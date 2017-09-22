<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
use kartik\datetime\DateTimePicker; //加载的时间组件

?>
<!--进行提示-->
<?= $this->render('/common/message')?>
<?php $form = ActiveForm::begin(); ?>
<div class="content">
    <link href="static/css/lib/bootstrap-wysihtml5.css" type="text/css" rel="stylesheet" />
    <link href="static/css/lib/uniform.default.css" type="text/css" rel="stylesheet" />
    <link href="static/css/lib/select2.css" type="text/css" rel="stylesheet" />
    <link href="static/css/lib/bootstrap.datepicker.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" href="static/css/compiled/form-showcase.css" type="text/css" media="screen" />
    <div class="container-fluid">
        <div id="pad-wrapper" class="form-page">
            <div class="row-fluid form-wrapper">
                <!-- left column -->
                <div class="span8 column">

                    <div class="field-box">
                        <?= $form->field($model, 'goods_name')->textInput(['class' => 'span8 inline-input'])->label('商品名称:');?>
                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'goods_brief')->textInput(['class' => 'span8 inline-input'])->label('简短描述:');?>
                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'shop_price')->textInput(['class' => 'span8 inline-input'])->label('本店价格:');?>
                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'promote_price')->textInput(['class' => 'span8 inline-input'])->label('促销价格:');?>
                    </div>

                    <div class="field-box">
                        <?= $form->field($model, 'promote_start_date')->textInput(['class' => 'input-large datepicker'])->label('促销开始时间:');?>

                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'promote_end_date')->textInput(['class' => 'input-large datepicker'])->label('促销结束时间:');?>

                    </div>


                    <div class="field-box">
                        <?= $form->field($model, 'goods_number')->textInput(['class' => 'span8 inline-input'])->label('商品库存:');?>
                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'goods_img')->fileInput(['class' => 'span8 inline-input'])->label('商品主图:');?>
                    </div>
                    <div class="field-box">
                        <div class="wysi-column">
                            <?= $form->field($model, 'goods_desc')->textarea(['class' => 'span11 wysihtml5'])->label('详情描述:');?>
                            <?= Html::submitButton('添加商品', ['class' => 'span9']);?>
                        </div>
                    </div>

                </div>

                <div class="span4 column pull-right">

                    <div class="field-box">
                        <?= $form->field($model, 'cat_id')->dropDownList($catList, ['prompt' => '请选择分类...', 'style' => 'height:30px'])->label('');?>
                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'brand_id')->dropDownList($result, ['prompt' => '请选择品牌...', 'style' => 'height:30px'])->label('');?>
                    </div>
                    <div class="field-box">
                        <?= $form->field($model, 'type_id')->dropDownList($typeList, ['prompt' => '请选择类型...', 'style' => 'height:30px'])->label('');?>
                    </div>
                    <div class="field-box">
                        <label>加入推荐:</label>
                        <label class="checkbox">
                            <?= $form->field($model, 'is_hot',['template'=>'{label}{input}{error}'])->checkbox();?>
                        </label>
                        <label class="checkbox">
                            <?= $form->field($model, 'is_promote',['template'=>'{label}{input}{error}'])->checkbox();?>
                        </label>
                        <label class="checkbox">
                            <?= $form->field($model, 'is_new',['template'=>'{label}{input}{error}'])->checkbox();?>
                        </label>
                        <label class="checkbox">
                            <?= $form->field($model, 'is_best',['template'=>'{label}{input}{error}'])->checkbox();?>
                        </label>
                    </div>
                    <div class="field-box">
                        <label>上架:</label>

                        <?= $form->field($model,'is_on_sale',['template'=>'{label}{input}{error}'])->radioList([0=>'立即上架',1=>'稍后上架'])->label('')?>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
<script src="static/js/wysihtml5-0.3.0.js"></script>
<script src="static/js/bootstrap-wysihtml5-0.0.2.js"></script>
<script src="static/js/bootstrap.datepicker.js"></script>
<script src="static/js/jquery.uniform.min.js"></script>
<script src="static/js/select2.min.js"></script>
<script type="text/javascript">
    $(function () {

        // add uniform plugin styles to html elements
        $("input:checkbox, input:radio").uniform();

        // select2 plugin for select elements
        $(".select2").select2({
            placeholder: "Select a State"
        });

        // datepicker plugin
        $('.datepicker').datepicker().on('changeDate', function (ev) {
            $(this).datepicker('hide');
        });

        // wysihtml5 plugin on textarea
        $(".wysihtml5").wysihtml5({
            "font-styles": false
        });
    });
</script>