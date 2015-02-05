package com.janwerder;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;

/**
 * Erstellt von janwe_000 am 05.02.2015.
 */
public class WeatherRequest {
    public String getTemperature() {
        return temperature;
    }

    public String getSummary() {
        return summary;
    }

    private String temperature;
    private String summary;

    public WeatherRequest(String apiKey, String lon, String lat) {
        JSONObject json = null;
        try {
            json = JSONRequest.readJsonFromUrl("https://api.forecast.io/forecast/"
                    + apiKey
                    + "/"
                    + lon
                    + ","
                    + lat
                    + "?units=si");
        } catch (IOException e) {
            e.printStackTrace();
        } catch (JSONException e) {
            e.printStackTrace();
        }
        try {
            this.summary = (String)json.getJSONObject("currently").get("summary");
            this.temperature = json.getJSONObject("currently").get("temperature").toString();
        } catch (JSONException e) {
            e.printStackTrace();
        }

    }
}
