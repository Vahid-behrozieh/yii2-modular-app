<?php

namespace common\components\Weather\Fetchers;

interface WeatherDataFetcherInterface
{
    public function fetchCurrentWeather($location);
    public function fetchForecast($location);
    public function fetchWeatherByCoordinates($latitude, $longitude);
}
