<?php
/* @var $this yii\web\View */
/* @var $weatherData array */
?>
<?php var_dump($data);?>
<h1>Weather in <?= htmlspecialchars($weatherData['location']['name']) ?></h1>
<p>Temperature: <?= htmlspecialchars($weatherData['current']['temp_c']) ?> °C</p>
<p>Condition: <?= htmlspecialchars($weatherData['current']['condition']['text']) ?></p>
<img src="<?= htmlspecialchars($weatherData['current']['condition']['icon']) ?>" alt="Weather icon">





<div>
    <!--    <img src="--><?php //= \yii\helpers\Url::to('@web/images/weather/london.jpg')?><!--" alt="" style="width: 100vw;height: 100vh;">-->
    <!--<span>lat: --><?php //= $data['lon']?><!--</span><br>-->
    <!--<span>lon: --><?php //= $data['lat']?><!--</span><br>-->
    <!--<img src="--><?php //= 'http://openweathermap.org/img/wn/'.$data['weatherIcon'].'@2x.png'?><!--" alt=""><br>-->
    <!--<span>temp: --><?php //= $data['temperature']?><!--</span><br>-->
    <!--<span>humidity: --><?php //= $data['humidity']?><!--</span><br>-->
    <!--<span>feels_like: --><?php //= $data['feels_like']?><!--</span><br>-->
    <!--<span>temp_min: --><?php //= $data['temp_min']?><!--</span><br>-->
    <!--<span>temp_max: --><?php //= $data['temp_max']?><!--</span><br>-->
    <!--<span>pressure: --><?php //= $data['pressure']?><!--</span><br>-->
    <!--<span>sea_level: --><?php //= $data['sea_level']?><!--</span><br>-->
    <!--<span>grnd_level: --><?php //= $data['grnd_level']?><!--</span><br>-->
    <!--<span>windSpeed: --><?php //= $data['windSpeed']?><!--</span><br>-->
    <!--<span>windDeg: --><?php //= $data['windDeg']?><!--</span><br>-->
    <!--<span>visibility: --><?php //= $data['visibility']?><!--</span><br>-->
    <!--<span>sunrise: --><?php //= $data['sunrise']?><!--</span><br>-->
    <!--<span>sunset: --><?php //= $data['sunset']?><!--</span><br>-->
    <!---->
    <!---->
    <!--<div class="section-left">-->
    <!---->
    <!--    <span>weather: --><?php //= $data['weatherStatus']?><!--</span><br>-->
    <!---->
    <!--</div>-->
    <div class="row">

    </div>
</div>
<!--
<div style="background-color: black;border-radius: 40px;display: flex;width: 100%;gap: 20px;padding: 20px;margin-top: 4%;margin-bottom: 4%">
    <div class="left" style="background-color: lightgray;width: 6%;display: flex;flex-direction: column;border-radius: 15px;justify-content: center;align-items: center;">
        <div class="logo" style="margin-bottom: 5%;">
            weather
        </div>
        <div class="main" style="margin-bottom: 20%;display: flex;flex-direction: column;">
            <span>main1</span>
            <span>main1</span>
            <span>main1</span>
            <span>main1</span>
            <span>main1</span>
            <span>main1</span>
            <span>main1</span>
        </div>
        <div class="profile">
            profile
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="right" style="background-color: lightgray;width: 94%;border-radius: 15px"">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
    </div>
-->

<!--</div>-->
