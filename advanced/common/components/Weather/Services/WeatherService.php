<?php

namespace common\components\Weather\Services;

use common\components\Weather\Fetchers\WeatherDataFetcherInterface;
use yii\base\Component;

class WeatherService extends Component implements WeatherServiceInterface
{
    private $fetcher;

    public function __construct(WeatherDataFetcherInterface $fetcher, $config = [])
    {
        $this->fetcher = $fetcher;
        parent::__construct($config);
    }

    public function getCurrentWeather($location)
    {
        return $this->fetcher->fetchCurrentWeather($location);
    }

    public function getForecast($location)
    {
        return $this->fetcher->fetchForecast($location);
    }

    public function getWeatherByCoordinates($latitude, $longitude)
    {
        return $this->fetcher->fetchWeatherByCoordinates($latitude, $longitude);
    }

    public function getWeatherData($location)
    {
        // TODO: Implement getWeatherData() method.
    }
}
