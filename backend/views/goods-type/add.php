<?php
use \yii\widgets\ActiveForm;
use \yii\helpers\Html;
use \yii\helpers\Url;

?>

<div class="content">

    <div class="container-fluid">
        <div id="pad-wrapper" class="new-user">
            <div class="row-fluid header">
                <h3>新增商品类型</h3>
            </div>
            <!--                消息提示-->
            <?= $this->render('/common/message'); ?>
            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span9 with-sidebar">
                    <div class="container">
                        <?php $form = ActiveForm::begin(['class'=>'new_user_form inline-input']) ?>
                        <!--                            <form class="new_user_form inline-input" />-->
                        <div class="span12 field-box">
                            <?= $form->field($model,'type_name')->textInput(['class'=>'span9'])->label('商品类型名') ?>
                        </div>

                        <div class="span12 field-box textarea">
                            <?= $form->field($model,'attr_group')->textarea(['class'=>'span9'])->label('属性分组') ?>
<!--                            <span class="charactersleft">每行一个商品属性组，排序也将按照自然顺序排序。</span>-->
                        </div>
                        <div class="span11 field-box actions">
                            <?= Html::submitButton('提交',['class'=>'btn-glow primary']) ?>
                            <!--                                    <input type="button" class="btn-glow primary" value="Create user" />-->
                            <span>OR</span>
                            <?= Html::resetInput('重置',['class'=>'reset']) ?>
                            <!--                                    <input type="reset" value="Cancel" class="reset" />-->
                        </div>
                        <?php $form =ActiveForm::end(); ?>
                    </div>
                </div>

                <!-- side right column -->
                <div class="span3 form-sidebar pull-right">
                    <div class="btn-group toggle-inputs hidden-tablet">
                        <button class="glow left active" data-input="inline">INLINE INPUTS</button>
                        <button class="glow right" data-input="normal">NORMAL INPUTS</button>
                    </div>
                    <div class="alert alert-info hidden-tablet">
                        <i class="icon-lightbulb pull-left"></i>
                        点击上面看到内联和正常输入表单上的区别
                    </div>
                    <h6>侧边栏文本说明</h6>
                    <p>按Enter键，录入多个商品属性组</p>
                    <p>选择下列快速通道:</p>
                    <ul>
                        <li><a href="<?= Url::toRoute('goods-type/show')?>">属性列表</a></li>
                        <li><a href="#">分类列表</a></li>
                        <li><a href="#">发布商品</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>