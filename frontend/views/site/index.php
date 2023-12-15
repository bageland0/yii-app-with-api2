<?php

use yii\helpers\Html;
use yii\helpers\Url;

/** @var $this \yii\web\View */

$this->title = 'Главная';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row news">
        <?php foreach ($news->all() as $newsItem):?>

        <div class="col-md-3">
                <div class="panel panel-default">
                        <div class="panel-heading">
                            <a class="" href="/news/news/read?url=<?=$newsItem->url?>">
                                <?= $newsItem->name?>
                            </a>
                        </div>

                        <div class="panel->footer">
                            <?= $newsItem->url?>
                        </div>
                </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
