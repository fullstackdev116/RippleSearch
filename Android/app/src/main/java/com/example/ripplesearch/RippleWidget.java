package com.example.ripplesearch;

import static android.app.PendingIntent.FLAG_IMMUTABLE;
import static android.app.PendingIntent.FLAG_MUTABLE;

import android.app.PendingIntent;
import android.appwidget.AppWidgetManager;
import android.appwidget.AppWidgetProvider;
import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.widget.RelativeLayout;
import android.widget.RemoteViews;
import android.widget.Toast;

/**
 * Implementation of App Widget functionality.
 */
public class RippleWidget extends AppWidgetProvider {
    private static final String LogoClick = "LogoClickTag";
    private static final String MicClick = "MicClickTag";
    private static final String SearchClick = "SearchClickTag";

    void updateAppWidget(Context context, AppWidgetManager appWidgetManager,
                                int appWidgetId) {

        Intent intent = new Intent(context, SearchActivity.class);
//        Uri uri = Uri.parse(App.ripple_url); // missing 'http://' will cause crashed
//        Intent intent = new Intent(Intent.ACTION_VIEW, uri);

        PendingIntent pendingIntent = PendingIntent.getActivity(context, 0, intent, FLAG_IMMUTABLE);
        RemoteViews views = new RemoteViews(context.getPackageName(), R.layout.ripple_widget);

//        Intent serviceIntent = new Intent(context, WidgetService.class);
//        serviceIntent.putExtra(AppWidgetManager.EXTRA_APPWIDGET_ID, appWidgetId);
//        serviceIntent.setData(Uri.parse(serviceIntent.toUri(Intent.URI_INTENT_SCHEME)));

//        views.setOnClickPendingIntent(R.id.btn_logo, getPendingSelfIntent(context, LogoClick));
        views.setOnClickPendingIntent(R.id.ly_container, pendingIntent);

        appWidgetManager.updateAppWidget(appWidgetId, views);
    }
    public void onReceive(Context context, Intent intent) {
        super.onReceive(context, intent);//add this line
        if (LogoClick.equals(intent.getAction())){

        }
    };
    protected PendingIntent getPendingSelfIntent(Context context, String action) {
        Intent intent = new Intent(context, getClass());
        intent.setAction(action);
        return PendingIntent.getBroadcast(context, 0, intent, FLAG_MUTABLE);
    }
    @Override
    public void onUpdate(Context context, AppWidgetManager appWidgetManager, int[] appWidgetIds) {
        // There may be multiple widgets active, so update all of them
        for (int appWidgetId : appWidgetIds) {
            updateAppWidget(context, appWidgetManager, appWidgetId);
        }
    }

    @Override
    public void onEnabled(Context context) {
        // Enter relevant functionality for when the first widget is created
    }

    @Override
    public void onDisabled(Context context) {
        // Enter relevant functionality for when the last widget is disabled
    }
}

