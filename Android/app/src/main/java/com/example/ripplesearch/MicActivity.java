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
import android.widget.TextView;
import android.widget.Toast;

import com.google.android.material.bottomsheet.BottomSheetDialog;

import java.util.ArrayList;

public class MicActivity extends Activity {
    BottomSheetDialog mBottomSheetDialog;
    ImageButton btn_mic, btn_search;
    TextView txt_logo, txt_query;

    boolean isRecord = false;

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
                mBottomSheetDialog = null;
                finish();
            }
        });
        mBottomSheetDialog.show();

        btn_mic = mBottomSheetDialog.findViewById(R.id.btn_mic);
        btn_search = mBottomSheetDialog.findViewById(R.id.btn_search);
        btn_search.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                String query = txt_query.getText().toString().trim();
                if (query.length() == 0) {
                    Toast.makeText(MicActivity.this, "Please say something...", Toast.LENGTH_SHORT).show();
                    return;
                }
                String search_url = "https://www.bing.com/search?q="+query;
                App.openUrl(search_url, MicActivity.this);
            }
        });
        txt_logo = mBottomSheetDialog.findViewById(R.id.txt_logo);
        txt_query = mBottomSheetDialog.findViewById(R.id.txt_query);
        btn_mic.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                isRecord = !isRecord;
                if (isRecord) {
                    txt_logo.setVisibility(View.VISIBLE);
                    btn_search.setVisibility(View.GONE);
                    txt_query.setVisibility(View.GONE);
                    txt_query.setText("");
                    record_start();
                } else {
                    txt_logo.setVisibility(View.GONE);
                    btn_search.setVisibility(View.VISIBLE);
                    txt_query.setVisibility(View.VISIBLE);
                    txt_query.setText("");
                    record_stop();
                }
            }
        });
//        btn_mic.setOnTouchListener(new View.OnTouchListener() {
//            @Override
//            public boolean onTouch(View v, MotionEvent event) {
//                if (event.getAction() == MotionEvent.ACTION_DOWN) {
//                    Log.d("touch", "down");
//                    record_start();
//                } else if (event.getAction() == MotionEvent.ACTION_UP) {
//                    record_stop();
//                    Log.d("touch", "up");
//                }
//                return false;
//            }
//        });
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
                }
                break;
            }
            default:
                permission_result = "Microphone Access Denied!";
        }
        Toast.makeText(MicActivity.this, permission_result, Toast.LENGTH_SHORT);
    }
    SpeechRecognizer recognizer;
    void init_recognizer() {

        new Handler(Looper.getMainLooper()).post(new Runnable() {
            @Override
            public void run() {
                // Code here will run in UI thread
                if(!SpeechRecognizer.isRecognitionAvailable(MicActivity.this)) {
                    Toast.makeText(MicActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
                    return;
                }
                recognizer = SpeechRecognizer
                        .createSpeechRecognizer(MicActivity.this);
                RecognitionListener listener = new RecognitionListener() {
                    @Override
                    public void onResults(Bundle results) {
                        ArrayList<String> voiceResults = results
                                .getStringArrayList(SpeechRecognizer.RESULTS_RECOGNITION);
                        if (voiceResults == null) {
                            System.out.println("No voice results");
                        } else {
                            System.out.println("Printing matches: ");
                            for (String match : voiceResults) {
                                Toast.makeText(getApplicationContext(), match, Toast.LENGTH_SHORT).show();
                                txt_query.setText(match);
                                System.out.println(match);
                            }
                        }
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
                    }

                    @Override
                    public void onBeginningOfSpeech() {
                        System.out.println("Speech starting");
                    }

                    @Override
                    public void onBufferReceived(byte[] buffer) {
                        // TODO Auto-generated method stub

                    }

                    @Override
                    public void onEndOfSpeech() {
                        // TODO Auto-generated method stub

                    }

                    @Override
                    public void onEvent(int eventType, Bundle params) {
                        // TODO Auto-generated method stub

                    }

                    @Override
                    public void onPartialResults(Bundle partialResults) {
                        // TODO Auto-generated method stub

                    }

                    @Override
                    public void onRmsChanged(float rmsdB) {
                        // TODO Auto-generated method stub

                    }
                };
                recognizer.setRecognitionListener(listener);
            }
        });



    }
    void record_start() {
        if (recognizer == null) {
            Toast.makeText(MicActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
            return;
        }
        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle_record);
        Intent intent = new Intent(RecognizerIntent.ACTION_RECOGNIZE_SPEECH);
        intent.putExtra(RecognizerIntent.EXTRA_LANGUAGE_MODEL,
                RecognizerIntent.LANGUAGE_MODEL_FREE_FORM);
        intent.putExtra(RecognizerIntent.EXTRA_CALLING_PACKAGE,
                "com.domain.app");
        recognizer.startListening(intent);

    }
    void record_stop() {
        if (recognizer == null) {
            Toast.makeText(MicActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
            return;
        }
        btn_mic.setBackgroundResource(R.drawable.ic_mic_circle);
        recognizer.stopListening();
    }
}