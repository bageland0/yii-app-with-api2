<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var common\models\User $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_hash')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'unconfirmed_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'registration_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'flags')->textInput() ?>

    <?= $form->field($model, 'confirmed_at')->textInput() ?>

    <?= $form->field($model, 'blocked_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_login_at')->textInput() ?>

    <?= $form->field($model, 'last_login_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_tf_key')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_tf_enabled')->textInput() ?>

    <?= $form->field($model, 'auth_tf_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auth_tf_mobile_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password_changed_at')->textInput() ?>

    <?= $form->field($model, 'gdpr_consent')->textInput() ?>

    <?= $form->field($model, 'gdpr_consent_date')->textInput() ?>

    <?= $form->field($model, 'gdpr_deleted')->textInput() ?>

    <?= $form->field($model, 'access_token')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
