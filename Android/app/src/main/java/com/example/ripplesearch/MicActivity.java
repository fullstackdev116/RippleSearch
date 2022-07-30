package com.example.ripplesearch;

import static android.Manifest.permission.RECORD_AUDIO;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;
import androidx.core.content.ContextCompat;

import android.annotation.SuppressLint;
import android.app.Activity;
import android.content.DialogInterface;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.graphics.Color;
import android.os.Bundle;
import android.os.Handler;
import android.os.Looper;
import android.speech.RecognitionListener;
import android.speech.RecognizerIntent;
import android.speech.SpeechRecognizer;
import android.util.Log;
import android.view.MotionEvent;
import android.view.View;
import android.widget.ImageButton;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import com.bumptech.glide.Glide;
import com.google.android.material.bottomsheet.BottomSheetDialog;

import java.util.ArrayList;

public class MicActivity extends Activity {
    BottomSheetDialog mBottomSheetDialog;
    ImageButton btn_mic;
    ImageView img_mic;
    TextView txt_query;
    boolean isRecord = true;
    String msg_result = "Try saying something";
    Handler handler = new Handler();
    RecognitionListener listener;

    @SuppressLint("ClickableViewAccessibility")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_mic);
        mBottomSheetDialog = new BottomSheetDialog(this);
        mBottomSheetDialog.setContentView(R.layout.mic_popup);
        mBottomSheetDialog.setOnDismissListener(new DialogInterface.OnDismissListener() {
            @Override
            public void onDismiss(DialogInterface dialog) {
                if (recognizer != null) {
                    recognizer.cancel();
                    recog_handler.removeCallbacksAndMessages(null);
                    listener = null;
                    recognizer = null;
                }
                btn_mic.setBackgroundResource(R.drawable.ic_mic_circle);
                txt_query.setText("Try saying something.");
                mBottomSheetDialog = null;
                finish();
            }
        });
        mBottomSheetDialog.show();

        img_mic = mBottomSheetDialog.findViewById(R.id.img_mic);
        btn_mic = mBottomSheetDialog.findViewById(R.id.btn_mic);
        txt_query = mBottomSheetDialog.findViewById(R.id.txt_query);
        btn_mic.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                isRecord = !isRecord;
                if (isRecord) {
                    txt_query.setText("Try saying something");
                    record_start();
                } else {
                    record_stop();
                }
            }
        });
    }
    void setTimeLimit() {
        handler = new Handler();
        handler.postDelayed(new Runnable() {
            @Override
            public void run() {
                // Write whatever to want to do after delay specified (1 sec)
                record_stop();
            }
        }, 3000);
    }
    @Override
    protected void onResume() {
        super.onResume();
        if (setPermission()) {
            init_recognizer();
        }
    }

    public boolean setPermission() {
        if (ContextCompat.checkSelfPermission(this, RECORD_AUDIO)!= PackageManager.PERMISSION_GRANTED) {
            ArrayList<String> arrPermissionRequests = new ArrayList<>();
            arrPermissionRequests.add(RECORD_AUDIO);
            ActivityCompat.requestPermissions(this, arrPermissionRequests.toArray(new String[arrPermissionRequests.size()]), 201);
            return false;
        }
        return true;
    }
    @Override
    public void onRequestPermissionsResult(int requestCode, String[] permissions, int[] grantResults) {
        super.onRequestPermissionsResult(requestCode, permissions, grantResults);
        String permission_result = "";
        switch (requestCode) {
            case 201: {
                if ((grantResults.length > 0) && grantResults[0] == PackageManager.PERMISSION_GRANTED) {
                    permission_result = "Microphone Access Allowed!";
                    init_recognizer();
                } else {
                    permission_result = "Microphone Access Denied!";
                    mBottomSheetDialog.dismiss();
                }
                break;
            }
            default:
                permission_result = "Microphone Access Denied!";
        }
        Toast.makeText(getApplicationContext(), permission_result, Toast.LENGTH_SHORT);
    }
    SpeechRecognizer recognizer;
    Handler recog_handler = new Handler(Looper.getMainLooper());
    void init_recognizer() {
        if (recog_handler != null) recog_handler.removeCallbacksAndMessages(null);
        recog_handler = new Handler(Looper.getMainLooper());
        recog_handler.post(new Runnable() {
            @Override
            public void run() {
                // Code here will run in UI thread
                if(!SpeechRecognizer.isRecognitionAvailable(MicActivity.this)) {
                    Toast.makeText(MicActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
                    return;
                }
                recognizer = SpeechRecognizer
                        .createSpeechRecognizer(MicActivity.this);
                listener = new RecognitionListener() {
                    @Override
                    public void onResults(Bundle results) {
                        ArrayList<String> voiceResults = results
                                .getStringArrayList(SpeechRecognizer.RESULTS_RECOGNITION);
//                        if (voiceResults == null) {
//                            System.out.println("No voice results");
//                            Toast.makeText(getApplicationContext(), "silence..", Toast.LENGTH_SHORT).show();
//                        } else {
//                            System.out.println("Printing matches: ");
//                            for (String match : voiceResults) {
//                                String result_str = "";
//                                if (match.length() == 0) {
//                                    result_str = "Silence ..........";
//                                } else {
//                                    result_str = match;
//                                }
//                                Toast.makeText(getApplicationContext(), result_str, Toast.LENGTH_SHORT).show();
//                                txt_query.setText(result_str);
//                                System.out.println(match);
//                            }
//                        }
//                        Toast.makeText(MicActivity.this, "onResults :"+voiceResults.get(0), Toast.LENGTH_LONG).show();
                        isRecord = false;
                        img_mic.setVisibility(View.GONE);
                        btn_mic.setVisibility(View.VISIBLE);
                        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle_record);
                        if (voiceResults == null) {
                            msg_result = "Didn't catch that. Try speaking again.";
                        } else {
                            msg_result = voiceResults.get(0);
                            App.query = msg_result;
                            if (!App.query_from.equals("search")) {
                                Intent intent = new Intent(MicActivity.this, SearchActivity.class);
                                intent.putExtra("query", voiceResults.get(0));
                                startActivity(intent);
                            }
                            mBottomSheetDialog.dismiss();
                        }
                        txt_query.setText(msg_result);
                    }

                    @Override
                    public void onReadyForSpeech(Bundle params) {
                        System.out.println("Ready for speech");
                    }

                    /**
                     *  ERROR_NETWORK_TIMEOUT = 1;
                     *  ERROR_NETWORK = 2;
                     *  ERROR_AUDIO = 3;
                     *  ERROR_SERVER = 4;
                     *  ERROR_CLIENT = 5;
                     *  ERROR_SPEECH_TIMEOUT = 6;
                     *  ERROR_NO_MATCH = 7;
                     *  ERROR_RECOGNIZER_BUSY = 8;
                     *  ERROR_INSUFFICIENT_PERMISSIONS = 9;
                     *
                     * @param error code is defined in SpeechRecognizer
                     */
                    @Override
                    public void onError(int error) {
                        System.err.println("Error listening for speech: " + error);
                        switch (error) {
                            case 1:
                                msg_result = "ERROR_NETWORK_TIMEOUT";
                                break;
                            case 2:
                                msg_result = "ERROR_NETWORK";
                                break;
                            case 3:
                                msg_result = "ERROR_AUDIO";
                                break;
                            case 4:
                                msg_result = "ERROR_SERVER";
                                break;
                            case 5:
                                msg_result = "ERROR_CLIENT";
                                break;
                            case 6:
                                msg_result = "ERROR_SPEECH_TIMEOUT";
                                break;
                            case 7:
                                msg_result = "ERROR_NO_MATCH";
                                msg_result = "Didn't catch that. Try speaking again.";
                                break;
                            case 8:
                                msg_result = "ERROR_RECOGNIZER_BUSY";
                                break;
                            case 9:
                                msg_result = "ERROR_INSUFFICIENT_PERMISSIONS";
                                break;
                        }
                        txt_query.setText(msg_result);
                        isRecord = false;
                        img_mic.setVisibility(View.GONE);
                        btn_mic.setVisibility(View.VISIBLE);
                        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle_record);

//                        App.query = "result";
//                        if (!App.query_from.equals("search")) {
//                            Intent intent = new Intent(MicActivity.this, SearchActivity.class);
//                            startActivity(intent);
//                        }
//                        mBottomSheetDialog.dismiss();
                    }

                    @Override
                    public void onBeginningOfSpeech() {
                        txt_query.setText("");
                        System.out.println("Speech starting");
                    }

                    @Override
                    public void onBufferReceived(byte[] buffer) {
                        // TODO Auto-generated method stub

                    }

                    @Override
                    public void onEndOfSpeech() {
                        // TODO Auto-generated method stub
//                        Toast.makeText(MicActivity.this, "Speech End", Toast.LENGTH_LONG).show();
//                        isRecord = false;
//                        img_mic.setVisibility(View.GONE);
//                        btn_mic.setVisibility(View.VISIBLE);
//                        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle_record);
                    }

                    @Override
                    public void onEvent(int eventType, Bundle params) {
                        // TODO Auto-generated method stub

                    }

                    @Override
                    public void onPartialResults(Bundle partialResults) {
                        // TODO Auto-generated method stub
                        final ArrayList<String> partialData = partialResults.getStringArrayList(SpeechRecognizer.RESULTS_RECOGNITION);

                        if (partialData != null) {
                            String word = partialData.get(partialData.size() - 1);
                            if (word.replaceAll("\\s", "").isEmpty()) {
                                word = " ";
                            }
                            String txt = txt_query.getText().toString();
                            txt += word;
                            txt_query.setText(txt);
//                            Toast.makeText(MicActivity.this, word, Toast.LENGTH_LONG).show();
                        }


                    }

                    @Override
                    public void onRmsChanged(float rmsdB) {
                        // TODO Auto-generated method stub

                    }
                };
                recognizer.setRecognitionListener(listener);
                new Handler().postDelayed(new Runnable() {
                    @Override
                    public void run() {
                        // Write whatever to want to do after delay specified (1 sec)
                        record_start();
                    }
                }, 100);
            }
        });



    }
    void record_start() {
        if (recognizer == null) {
            Toast.makeText(MicActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
            return;
        }
        Intent intent = new Intent(RecognizerIntent.ACTION_RECOGNIZE_SPEECH);
        intent.putExtra(RecognizerIntent.EXTRA_LANGUAGE_MODEL,
                RecognizerIntent.LANGUAGE_MODEL_FREE_FORM);
        intent.putExtra(RecognizerIntent.EXTRA_CALLING_PACKAGE,
                "com.domain.app");
        recognizer.startListening(intent);
        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle);
    }
    void record_stop() {
        if (recognizer == null) {
            Toast.makeText(MicActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
            return;
        }
        img_mic.setVisibility(View.VISIBLE);
        Glide.with(this)
                .load(R.drawable.loading)
                .into(img_mic);
        btn_mic.setVisibility(View.GONE);
        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle_record);
    }
}