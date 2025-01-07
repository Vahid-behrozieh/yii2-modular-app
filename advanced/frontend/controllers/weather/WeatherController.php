<?php

namespace frontend\controllers\weather;

use common\components\Weather\Fetchers\WeatherDataFetcher1;
use common\components\Weather\parser\WeatherDataParser1;
use Yii;
use yii\web\Controller;
use common\components\Weather\Services\WeatherService;

class WeatherController extends Controller
{
    private $weatherService;
    public function getViewPath()
    {
        $this->layout = 'weather';
        return \Yii::getAlias('@frontend/views/weather');
    }
    public function init()
    {
        parent::init();

        $parser = new WeatherDataParser1();
        $fetcher = new WeatherDataFetcher1($parser);
        $this->weatherService = new WeatherService($fetcher);
    }

    public function actionIndex(){
        die('qqq');
    }

    public function actionCurrentWeather($location)
    {
        try {
//            $data = $this->weatherService->getCurrentWeather($location);
            $data = [];
            return $this->render('current-weather', ['data' => $data]);
        } catch (\Exception $e) {
            var_dump($e->getMessage());die();
            Yii::error($e->getMessage(), __METHOD__);
            throw new \yii\web\ServerErrorHttpException('Unable to fetch current weather data.');
        }
    }

    public function actionForecast($location)
    {
        try {
            $data = $this->weatherService->getForecast($location);
            return $this->render('forecast', ['data' => $data]);
        } catch (\Exception $e) {
            Yii::error($e->getMessage(), __METHOD__);
            throw new \yii\web\ServerErrorHttpException('Unable to fetch weather forecast data.');
        }
    }

    public function actionWeatherByCoordinates($latitude, $longitude)
    {
        try {
            $data = $this->weatherService->getWeatherByCoordinates($latitude, $longitude);
            return $this->render('weather-by-coordinates', ['data' => $data]);
        } catch (\Exception $e) {
            Yii::error($e->getMessage(), __METHOD__);
            throw new \yii\web\ServerErrorHttpException('Unable to fetch weather data by coordinates.');
        }
    }
}
