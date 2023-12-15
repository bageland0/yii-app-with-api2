<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\web\YiiAsset;
use yii\bootstrap\BootstrapAsset;

class AppAsset extends AssetBundle
{
    public $css = [
        'css/site.css',
    ];
    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class
    ];
}
