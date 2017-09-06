<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\User */
/* @var $form ActiveForm */
?>
<div class="index-add">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'email') ?>
    <?= $form->field($model, 'password') ?>
    <?= $form->field($model, 'password_hash') ?>
    <?= $form->field($model, 'auth_key') ?>
    <?= $form->field($model, 'status') ?>
    <?= $form->field($model, 'created_at') ?>
    <?= $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div><!-- index-add -->
