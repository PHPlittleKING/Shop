<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%goods_type}}".
 *
 * @property integer $type_id
 * @property string $type_name
 * @property string $attr_group
 *
 * @property Attribute[] $attributes
 * @property Goods[] $goods
 */
class GoodsType extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_type}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type_name', 'attr_group'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'type_id' => 'Type ID',
            'type_name' => '类型名',
            'attr_group' => '类型分组',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getAttributes()
//    {
//        return $this->hasMany(Attribute::className(), ['type_id' => 'type_id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasMany(Goods::className(), ['type_id' => 'type_id']);
    }

    static function getGoodsList()
    {
        $result = [];
        $data =self::find()->asArray()->all();
        foreach ($data as $key=>$value)
        {
            $result[$value['type_id']] = $value['type_name'];
        }
        return $result;
    }
}
