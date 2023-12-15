<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var common\models\User $model */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email:email',
            'password_hash',
            'auth_key',
            'unconfirmed_email:email',
            'registration_ip',
            'flags',
            'confirmed_at',
            'blocked_at',
            'updated_at',
            'created_at',
            'last_login_at',
            'last_login_ip',
            'auth_tf_key',
            'auth_tf_enabled',
            'auth_tf_type',
            'auth_tf_mobile_phone',
            'password_changed_at',
            'gdpr_consent',
            'gdpr_consent_date',
            'gdpr_deleted',
            'access_token',
        ],
    ]) ?>

</div>
