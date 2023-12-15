<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var $this \yii\web\View */

$this->title = "Панель";
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <ul>
            <li><?= Html::a('Новости', Url::to('/news/news'))?></li>
            <?php if (\Yii::$app->user->can('administration')): ?>
                <li><?= Html::a('Пользователи', Url::to('/users'))?></li>
            <?php endif; ?>
        </ul>

    </div>
</div>
