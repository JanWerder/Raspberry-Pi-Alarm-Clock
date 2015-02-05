package com.janwerder;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;

public class Main {

    public static void main(String[] args) {
        BuilderConfig config = new BuilderConfig(BuilderConfig.RESOURCE_NAME);
        System.out.print("Good Morning, " + config.getName() + ". ");

        WeatherRequest wr = new WeatherRequest(config.getWeatherApiKey(),config.getLongitude(), config.getLatitude());
        System.out.print("It's " + wr.getSummary() + " with " + wr.getTemperature() + " degrees outside. ");

    }
}
