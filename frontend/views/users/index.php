<?php

use common\models\User;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create User', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            'password_hash',
            'auth_key',
            //'unconfirmed_email:email',
            //'registration_ip',
            //'flags',
            //'confirmed_at',
            //'blocked_at',
            //'updated_at',
            //'created_at',
            //'last_login_at',
            //'last_login_ip',
            //'auth_tf_key',
            //'auth_tf_enabled',
            //'auth_tf_type',
            //'auth_tf_mobile_phone',
            //'password_changed_at',
            //'gdpr_consent',
            //'gdpr_consent_date',
            //'gdpr_deleted',
            //'access_token',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, User $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
