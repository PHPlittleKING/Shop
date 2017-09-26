<!-- 属性 -->
<div class="span4 column">
    <?php if(!empty($attrs['attr'])): foreach ($attrs['attr'] as $value): ?>
        <?php if(empty($value['attr_values'])): ?>
            <div class="field-box">
                <label><?= $value['attr_name'];?>:</label>
                <input class="span5" name="attr_value[<?= $value['attr_id']; ?>]" type="text" />
            </div>
        <?php else: ?>
            <div class="field-box">
                <label><?= $value['attr_name'];?>:</label>
                <div class="ui-select">
                    <select name="attr_value[<?= $value['attr_id']; ?>]">
                        <?php foreach ($value['attr_values'] as $v):?>
                            <option value="<?= $v;?>"><?= $v;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
            </div>
        <?php endif; ?>

    <?php endforeach; endif; ?>

</div>



<div class="span4 column pull-right">
    <label class="label">已选规格</label>

    <div class="field-box">
        <label>内存空间:</label>
        <div class="btn icon">
            <i class="icon-remove"></i> 8G
        </div>
        <div class="btn icon">
            <i class="icon-remove"></i> 16G
        </div>
    </div>

    <div class="field-box">
        <label>套餐:</label>
        <div class="btn icon">
            <i class="icon-remove"></i> 套餐一
        </div>
        <div class="btn icon">
            <i class="icon-remove"></i> 套餐二
        </div>
        <div class="btn icon">
            <i class="icon-remove"></i> 套餐三
        </div>

    </div>

</div>


<!-- 规格 -->
<div class="span4 column pull-right">
    <?php if(!empty($attrs['spec'])): foreach ($attrs['spec'] as $value): ?>

        <?php if(empty($value['attr_values'])): ?>
            <div class="field-box">
                <label><?= $value['attr_name'];?>:</label>
                <input class="span5" name="attr_value[<?= $value['attr_id']; ?>]" type="text" />
            </div>
        <?php else: ?>
            <div class="field-box">
                <label><?= $value['attr_name'];?>:</label>
                <div class="ui-select">
                    <select name="attr_value[<?= $value['attr_id']; ?>][]">
                        <?php foreach ($value['attr_values'] as $v):?>
                            <option value="<?= $v;?>"><?= $v;?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <span class="btn-flat ">+</span>
            </div>
        <?php endif; ?>
    <?php endforeach; endif; ?>

</div>

<div class="span8 field-box actions pull-right">
    <?= \yii\helpers\Html::submitButton('确认保存',['class'=>'btn-glow primary']);?>
</div>

