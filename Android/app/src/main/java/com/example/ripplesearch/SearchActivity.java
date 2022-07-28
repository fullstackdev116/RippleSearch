package com.example.ripplesearch;

import static android.Manifest.permission.RECORD_AUDIO;

import androidx.appcompat.app.AppCompatActivity;
import androidx.core.app.ActivityCompat;
import androidx.core.content.ContextCompat;
import androidx.core.content.res.ResourcesCompat;

import android.annotation.SuppressLint;
import android.content.Context;
import android.content.Intent;
import android.content.pm.PackageManager;
import android.os.Bundle;
import android.os.Handler;
import android.os.Looper;
import android.speech.RecognitionListener;
import android.speech.RecognizerIntent;
import android.speech.SpeechRecognizer;
import android.util.Log;
import android.view.KeyEvent;
import android.view.MotionEvent;
import android.view.View;
import android.view.inputmethod.EditorInfo;
import android.view.inputmethod.InputMethodManager;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageButton;
import android.widget.TextView;
import android.widget.Toast;

import java.util.ArrayList;

public class SearchActivity extends AppCompatActivity {
    EditText edit_query;
    ImageButton btn_mic;

    @SuppressLint("ClickableViewAccessibility")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search);

        edit_query = findViewById(R.id.edit_query);

        Button btn_search = findViewById(R.id.btn_search);
        btn_search.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                do_search();
            }
        });
        btn_mic = findViewById(R.id.btn_mic);
        btn_mic.setOnTouchListener(new View.OnTouchListener() {
            @Override
            public boolean onTouch(View v, MotionEvent event) {
                if (event.getAction() == MotionEvent.ACTION_DOWN) {
                    Log.d("touch", "down");
                    record_start();
                } else if (event.getAction() == MotionEvent.ACTION_UP) {
                    record_stop();
                    Log.d("touch", "up");
                }
                return false;
            }
        });

        edit_query.setOnEditorActionListener(new EditText.OnEditorActionListener() {
            @Override
            public boolean onEditorAction(TextView v, int actionId, KeyEvent event) {
                if (actionId == EditorInfo.IME_ACTION_SEARCH) {
                    do_search();
                    return true;
                }
                return false;
            }
        });
        if (setPermission()) {
            init_recognizer();
        }

        edit_query.requestFocus();
        App.showKeyboard(this);
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
        Toast.makeText(SearchActivity.this, permission_result, Toast.LENGTH_SHORT);
    }
    SpeechRecognizer recognizer;
    void init_recognizer() {

        new Handler(Looper.getMainLooper()).post(new Runnable() {
            @Override
            public void run() {
                // Code here will run in UI thread
                if(!SpeechRecognizer.isRecognitionAvailable(SearchActivity.this)) {
                    Toast.makeText(SearchActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
                    return;
                }
                recognizer = SpeechRecognizer
                        .createSpeechRecognizer(SearchActivity.this);
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
                                edit_query.setText(match);
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
            Toast.makeText(SearchActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
            return;
        }
        btn_mic.setBackgroundResource(R.drawable.ic_mic_record);
        Intent intent = new Intent(RecognizerIntent.ACTION_RECOGNIZE_SPEECH);
        intent.putExtra(RecognizerIntent.EXTRA_LANGUAGE_MODEL,
                RecognizerIntent.LANGUAGE_MODEL_FREE_FORM);
        intent.putExtra(RecognizerIntent.EXTRA_CALLING_PACKAGE,
                "com.domain.app");
        recognizer.startListening(intent);

    }
    void record_stop() {
        if (recognizer == null) {
            Toast.makeText(SearchActivity.this, "SpeechRecognizer is not available", Toast.LENGTH_SHORT).show();
            return;
        }
        btn_mic.setBackgroundResource(R.drawable.ic_mic);
        recognizer.stopListening();
    }
    void do_search() {
        String query = edit_query.getText().toString().trim();
        if (query.length() == 0) {
            Toast.makeText(SearchActivity.this, "Please fill out this field.", Toast.LENGTH_SHORT).show();
            return;
        }
        String search_url = "https://www.bing.com/search?q="+query;
//                String[] separated = query.split(" ");
//                for (int i = 0; i < separated.length; i++) {
//                    search_url += separated[i];
//                    if (i < separated.length-1) {
//                        search_url += "+";
//                    }
//                }
        App.openUrl(search_url, SearchActivity.this);
        App.hideKeyboard(this);
    }
}