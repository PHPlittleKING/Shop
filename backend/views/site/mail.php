<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/14
 * Time: 14:12
 */
use yii\widgets\ActiveForm;
?>

<!--消息提示-->
<?= $this->render('/common/message');?>
<div class="row-fluid login-wrapper">
    <a class="brand" href="index.html"></a>
    <?php $form = ActiveForm::begin()?>
    <div class="span4 box">
        <div class="content-wrap">
            <h6>必应商城 - 找回管理密码</h6>
            <?= $form->field($admin,'email')->textInput(['class'=>'span12','placeholder'=>'管理员Email'])->label('')?>
            <a href="<?= \yii\helpers\Url::toRoute('site/login')?>" class="forgot">去登录?</a>
            <?= \yii\bootstrap\Html::submitButton('发送Email',['class'=>'btn-glow primary login'])?>
        </div>
    </div>
    <?php ActiveForm::end();?>
</div>

