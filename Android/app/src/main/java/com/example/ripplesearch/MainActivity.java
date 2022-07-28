package com.example.ripplesearch;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (App.readPreference(App.is_checked, "").length() > 0) {
            App.openUrl(App.ripple_url, MainActivity.this);
            finish();
            return;
        }

        setContentView(R.layout.activity_main);

        CheckBox checkBox = findViewById(R.id.chkBox);
        checkBox.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (App.readPreference(App.is_checked, "").length() == 0) {
                    App.setPreference(App.is_checked, "checked");
                } else {
                    App.removePreference(App.is_checked);
                }
            }
        });
        Button btn_start = findViewById(R.id.btn_start);
        btn_start.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                App.openUrl("https://www.ripplesearch.com/", MainActivity.this);
                finish();
            }
        });
    }
}