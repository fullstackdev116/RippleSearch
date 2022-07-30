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
import android.text.Editable;
import android.text.TextWatcher;
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
    ImageButton btn_mic, btn_cancel;

    @SuppressLint("ClickableViewAccessibility")
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_search);
        edit_query = findViewById(R.id.edit_query);

        ImageButton btn_search = findViewById(R.id.btn_search);
        btn_search.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                do_search();
            }
        });
        ImageButton btn_search_big = findViewById(R.id.btn_search_big);
        btn_search_big.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                App.query_from = "search";
                Intent intent = new Intent(SearchActivity.this, MicActivity.class);
                startActivity(intent);
            }
        });
        btn_mic = findViewById(R.id.btn_mic);
        btn_cancel = findViewById(R.id.btn_cancel);
        btn_cancel.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                edit_query.setText("");
            }
        });
        btn_mic.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                App.query_from = "search";
                Intent intent = new Intent(SearchActivity.this, MicActivity.class);
                startActivity(intent);
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
        edit_query.addTextChangedListener(new TextWatcher() {
            @Override
            public void beforeTextChanged(CharSequence s, int start, int count, int after) {

            }

            @Override
            public void onTextChanged(CharSequence s, int start, int before, int count) {

            }

            @Override
            public void afterTextChanged(Editable s) {
                if (edit_query.getText().length() == 0) {
                    btn_cancel.setVisibility(View.INVISIBLE);
                    btn_mic.setVisibility(View.VISIBLE);
                } else {
                    btn_cancel.setVisibility(View.VISIBLE);
                    btn_mic.setVisibility(View.INVISIBLE);
                }
            }
        });
//        edit_query.requestFocus();
        App.showKeyboard(this);
    }

    @Override
    protected void onResume() {
        super.onResume();
        edit_query.setText(App.query);
        App.query_from = "";
    }

    @Override
    public void onBackPressed() {
        super.onBackPressed();
        App.query_from = "";
        App.query = "";
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