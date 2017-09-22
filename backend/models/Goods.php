<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "{{%goods}}".
 *
 * @property integer $goods_id
 * @property string $goods_name
 * @property string $goods_sn
 * @property integer $type_id
 * @property integer $cat_id
 * @property integer $brand_id
 * @property integer $click_count
 * @property integer $goods_number
 * @property string $goods_weight
 * @property string $market_price
 * @property string $shop_price
 * @property integer $warn_number
 * @property string $goods_brief
 * @property string $goods_desc
 * @property string $goods_thumb
 * @property string $goods_img
 * @property integer $is_on_sale
 * @property integer $is_shipping
 * @property integer $add_time
 * @property integer $sort
 * @property integer $is_delete
 * @property integer $is_best
 * @property integer $is_new
 * @property integer $is_hot
 * @property integer $last_update
 * @property integer $is_promote
 * @property string $promote_price
 * @property integer $promote_start_date
 * @property integer $promote_end_date
 *
 * @property Cart[] $carts
 * @property Brand $brand
 * @property Category $cat
 * @property GoodsType $type
 * @property GoodsAttr[] $goodsAttrs
 * @property Attribute[] $attrs
 * @property GoodsGallery[] $goodsGalleries
 * @property Product[] $products
 */
class Goods extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_name', 'cat_id', 'brand_id', 'is_promote'], 'required'],
            [['type_id', 'cat_id', 'brand_id', 'click_count', 'goods_number', 'warn_number', 'is_on_sale', 'is_shipping', 'add_time', 'sort', 'is_delete', 'is_best', 'is_new', 'is_hot', 'last_update', 'is_promote'], 'integer'],
            [['goods_weight', 'market_price', 'shop_price', 'promote_price'], 'number'],
            [['goods_desc'], 'string'],
            [['goods_name'], 'string', 'max' => 60],
            [['goods_sn'], 'string', 'max' => 45],
            [['goods_brief'], 'string', 'max' => 255],
            [['goods_thumb', 'goods_img'], 'string', 'max' => 120],
//            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'brand_id']],
//            [['cat_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['cat_id' => 'cat_id']],
//            [['type_id'], 'exist', 'skipOnError' => true, 'targetClass' => GoodsType::className(), 'targetAttribute' => ['type_id' => 'type_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_id' => 'Goods ID',
            'goods_name' => 'Goods Name',
            'goods_sn' => 'Goods Sn',
            'type_id' => 'Type ID',
            'cat_id' => 'Cat ID',
            'brand_id' => 'Brand ID',
            'click_count' => 'Click Count',
            'goods_number' => 'Goods Number',
            'goods_weight' => 'Goods Weight',
            'market_price' => 'Market Price',
            'shop_price' => 'Shop Price',
            'warn_number' => 'Warn Number',
            'goods_brief' => 'Goods Brief',
            'goods_desc' => 'Goods Desc',
            'goods_thumb' => 'Goods Thumb',
            'goods_img' => 'Goods Img',
            'is_on_sale' => 'Is On Sale',
            'is_shipping' => 'Is Shipping',
            'add_time' => 'Add Time',
            'sort' => 'Sort',
            'is_delete' => 'Is Delete',
            'is_best' => 'Is Best',
            'is_new' => 'Is New',
            'is_hot' => 'Is Hot',
            'last_update' => 'Last Update',
            'is_promote' => 'Is Promote',
            'promote_price' => 'Promote Price',
            'promote_start_date' => 'Promote Start Date',
            'promote_end_date' => 'Promote End Date',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarts()
    {
        return $this->hasMany(Cart::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['brand_id' => 'brand_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCat()
    {
        return $this->hasOne(Category::className(), ['cat_id' => 'cat_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getType()
    {
        return $this->hasOne(GoodsType::className(), ['type_id' => 'type_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsAttrs()
    {
        return $this->hasMany(GoodsAttr::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttrs()
    {
        return $this->hasMany(Attribute::className(), ['attr_id' => 'attr_id'])->viaTable('{{%goods_attr}}', ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoodsGalleries()
    {
        return $this->hasMany(GoodsGallery::className(), ['goods_id' => 'goods_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProducts()
    {
        return $this->hasMany(Product::className(), ['goods_id' => 'goods_id']);
    }
}
