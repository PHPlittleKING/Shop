<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "{{%product}}".
 *
 * @property integer $product_id
 * @property integer $product_num
 * @property string $product_price
 * @property string $product_sn
 * @property string $attr_list
 * @property integer $goods_id
 *
 * @property Goods $goods
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%product}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['product_num', 'goods_id'], 'integer'],
            [['product_price'], 'number'],
            [['goods_id'], 'required'],
            [['product_sn'], 'string', 'max' => 45],
            [['attr_list'], 'string', 'max' => 80],
            [['goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['goods_id' => 'goods_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'product_id' => 'Product ID',
            'product_num' => '货品库存',
            'product_price' => 'Product Price',
            'product_sn' => 'Product Sn',
            'attr_list' => 'Attr List',
            'goods_id' => 'Goods ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['goods_id' => 'goods_id']);
    }
}
