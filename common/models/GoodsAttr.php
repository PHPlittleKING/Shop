<?php
namespace common\models;
use Yii;
use yii\base\Exception;
/**
 * This is the model class for table "{{%goods_attr}}".
 *
 * @property string $goods_attr_id
 * @property string $goods_id
 * @property integer $attr_id
 * @property string $attr_value
 *
 * @property Attribute $attr
 * @property Goods $goods
 */
class GoodsAttr extends \yii\db\ActiveRecord
{
    public $attrValueErr = null;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%goods_attr}}';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['goods_id', 'attr_id'], 'required'],
            [['goods_id', 'attr_id'], 'integer'],
            [['attr_value'], 'string', 'max' => 120],
//            [['attr_id'], 'exist', 'skipOnError' => true, 'targetClass' => Attribute::className(), 'targetAttribute' => ['attr_id' => 'attr_id']],
//            [['goods_id'], 'exist', 'skipOnError' => true, 'targetClass' => Goods::className(), 'targetAttribute' => ['goods_id' => 'goods_id']],
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'goods_attr_id' => 'Goods Attr ID',
            'goods_id' => 'Goods ID',
            'attr_id' => 'Attr ID',
            'attr_value' => '属性值',
        ];
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAttr()
    {
        return $this->hasOne(Attribute::className(), ['attr_id' => 'attr_id']);
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getGoods()
    {
        return $this->hasOne(Goods::className(), ['goods_id' => 'goods_id']);
    }
    /**
     * 商品属性入库
     *
     * @param $gid
     * @param $data
     */
    public function createAllGoodsAttr($gid,$data)
    {
        $temp = ['goods_id'=>$gid,'attr_id'=>'','attr_value'=>''];
        $transaction = Yii::$app->db->beginTransaction();
        try
        {
            foreach ($data as $key=>$value)
            {
                if(!empty($value) && is_array($value))
                {
                    foreach ($value as $val)
                    {
                        $temp['attr_id'] = $key;
                        $temp['attr_value'] = $val;
                        // 规格入库
                        if(!$this->createOneGoodsAttr($temp))
                        {
                            throw new Exception('规格添加失败.'.$this->attrValueErr);
                        }
                    }
                }
                else if(!empty($value) && !is_array($value))
                {
                    $temp['attr_id'] = $key;
                    $temp['attr_value'] = $value;
                    // 属性入库
                    if(!$this->createOneGoodsAttr($temp))
                    {
                        throw new Exception('属性添加失败.'.$this->attrValueErr);
                    }
                }
            }
            $transaction->commit();
        }
        catch (Exception $e)
        {
            $transaction->rollBack();
            throw  new Exception($e->getMessage());
        }
        return true;
    }
    /**
     * 单个商品规格属性入库
     *
     * @param $row
     * @return bool
     */
    public function createOneGoodsAttr($row)
    {
        if(!self::find()->where($row)->one())
        {
            $goodsAttr =(new GoodsAttr());
            $goodsAttr->load(['GoodsAttr'=>$row]);
            if(!$goodsAttr->save())
            {
                $this->attrValueErr = $goodsAttr->getFirstError('attr_value');
                return false;
            }
        }
        return true;
    }
}