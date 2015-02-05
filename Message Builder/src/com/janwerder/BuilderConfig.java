package com.janwerder;


import nl.chess.it.util.config.Config;

/**
 * Erstellt von janwe_000 am 05.02.2015.
 */
public class BuilderConfig extends Config {
    /**
     * Name of the file we are looking for to read the configuration.
     */
    public static final String RESOURCE_NAME = "config.properties";

    /**
     * Creates a new SimpleConfig object.
     */
    public BuilderConfig(String resourceName) {
        super(resourceName);
    }

    public String getName() {
        return getString("property.name");
    }

    public String getWeatherApiKey() {
        return getString("property.weatherapikey");
    }

    public String getLongitude() {
        return getString("property.lon");
    }

    public String getLatitude() {
        return getString("property.lat");
    }
}
