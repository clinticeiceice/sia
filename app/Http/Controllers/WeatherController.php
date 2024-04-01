<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class WeatherController extends Controller
{
    public function getWeather()
{
    // Define the city name
    $city = 'Manila';

    try {
        // Initialize Guzzle HTTP client
        $client = new Client();

        // Make request to OpenWeatherMap API
        $response = $client->get('http://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => $city,
                'appid' => '413e2aa1280bef2efd1f52ad78dc93a6',
                'units' => 'metric',
            ]
        ]);

        // Decode the JSON response
        $data = json_decode($response->getBody(), true);

        // Check if the API returned an error
        if (isset($data['cod']) && $data['cod'] != 200) {
            return response()->json(['error' => $data['message']], 400);
        }

        // Return the weather data
        return response()->json($data);
    } catch (RequestException $e) {
        // Handle Guzzle HTTP request exceptions
        return response()->json(['error' => 'Failed to fetch weather data.'], 500);
    }
}
public function getWeather1()
{
    // Define the city name
    $city = 'Cebu';

    try {
        // Initialize Guzzle HTTP client
        $client = new Client();

        // Make request to OpenWeatherMap API
        $response = $client->get('http://api.openweathermap.org/data/2.5/weather', [
            'query' => [
                'q' => $city,
                'appid' => '413e2aa1280bef2efd1f52ad78dc93a6',
                'units' => 'metric',
            ]
        ]);

        // Decode the JSON response
        $data = json_decode($response->getBody(), true);

        // Check if the API returned an error
        if (isset($data['cod']) && $data['cod'] != 200) {
            return response()->json(['error' => $data['message']], 400);
        }

        // Return the weather data
        return response()->json($data);
    } catch (RequestException $e) {
        // Handle Guzzle HTTP request exceptions
        return response()->json(['error' => 'Failed to fetch weather data.'], 500);
    }
}
public function showJsonData(Request $request)
{
    // Call the getWeather method to fetch weather data for Manila
    $weatherResponse = $this->getWeather();

    // Extract the JSON content from the response
    $weatherData = json_decode($weatherResponse->getContent(), true);

    // Return the weather data to the view
    return view('show', ['weatherData' => $weatherData]);
}
public function showJsonData1(Request $request)
{
    // Call the getWeather method to fetch weather data for Cebu
    $weatherResponse = $this->getWeather1();

    // Extract the JSON content from the response
    $weatherData = json_decode($weatherResponse->getContent(), true);

    // Return the weather data to the view
    return view('show1', ['weatherData' => $weatherData]);
}

}
