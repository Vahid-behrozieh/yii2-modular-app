<?php

namespace common\components\Weather\Services;

interface WeatherServiceInterface
{
    public function getWeatherData($location);
}
