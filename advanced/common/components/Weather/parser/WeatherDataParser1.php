<?php

namespace common\components\Weather\parser;

class WeatherDataParser1 implements WeatherDataParserInterface
{

    public function parse($response)
    {
        return [
            'lon' => $response['coord']['lon'],
            'lat' => $response['coord']['lat'],
            'weatherId' => $response['weather'][0]['id'],
            'weatherStatus' => $response['weather'][0]['main'],
            'weatherDescription' => $response['weather'][0]['description'],
            'weatherIcon' => $response['weather'][0]['icon'],
            'temperature' => $response['main']['temp'],
            'humidity' => $response['main']['humidity'],
            'feels_like' => $response['main']['feels_like'],
            'temp_min' => $response['main']['temp_min'],
            'temp_max' => $response['main']['temp_max'],
            'pressure' => $response['main']['pressure'],
            'sea_level' => $response['main']['sea_level'],
            'grnd_level' => $response['main']['grnd_level'],
            'windSpeed' => $response['wind']['speed'],
            'windDeg' => $response['wind']['deg'],
            'visibility' => $response['visibility'],
            'sunrise' => $response['sys']['sunrise'],
            'sunset' => $response['sys']['sunset'],
        ];
    }
}