<?php


use frontend\assets\WeatherAsset;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
WeatherAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <?php $this->registerCsrfMetaTags() ?>

    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!---->
<div class="container-fluid p-0">
<?= $content ?>
</div>
<!---->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
