<?php

namespace common\components\Weather\Fetchers;

use common\components\Weather\Fetchers\WeatherDataFetcherInterface;
use common\components\Weather\parser\WeatherDataParserInterface;

class WeatherDataFetcher1 implements WeatherDataFetcherInterface
{
    public $apiUrl = 'https://api.openweathermap.org/data/2.5/';
    public $apiKey = '44ad1b7d2026c0d9276b028817004cc8';
    private $parser;

    public function __construct(WeatherDataParserInterface $parser)
    {
        $this->parser = $parser;
    }
    public function fetch($location)
    {
        // منطق برای دریافت داده‌های آب و هوا از API 1

        $url = $this->apiUrl . "weather?lat=44.34&lon=10.99&appid=$this->apiKey";
        $url = $this->apiUrl . "weather?q=$location&appid=$this->apiKey";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);

        $response = curl_exec($ch);
//        var_dump(curl_errno($ch));die('qq');

        if (curl_errno($ch)) {
            return null; // یا مدیریت خطا به صورت مناسب
        }

        curl_close($ch);

        return $response;
    }

    private function makeRequest($endpoint, $params)
    {
        $url = $this->apiUrl . $endpoint . '?' . http_build_query(array_merge($params, ['appid' => $this->apiKey]));
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    public function fetchCurrentWeather($location)
    {
        $response = $this->makeRequest('weather', ['q' => $location]);
        return $this->parser->parse($response);
    }

    public function fetchForecast($location)
    {
        return $this->makeRequest('forecast', ['q' => $location]);
    }

    public function fetchWeatherByCoordinates($latitude, $longitude)
    {
        return $this->makeRequest('weather', ['lat' => $latitude, 'lon' => $longitude]);
    }
}
