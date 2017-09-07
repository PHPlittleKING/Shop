<?php

namespace common\models;

use Yii;
use \yii\db\ActiveRecord;
/**
 * This is the model class for table "{{%brand}}".
 *
 * @property integer $id
 * @property string $b_name
 * @property string $b_logo
 * @property string $b_desc
 * @property string $site_url
 * @property integer $sort
 * @property integer $is_show
 */
class Brand extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%brand}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['b_name', 'b_logo', 'b_desc', 'site_url', 'sort', 'is_show'], 'required'],
            [['b_desc'], 'string'],
            [['sort', 'is_show'], 'integer'],
            [['b_name'], 'string', 'max' => 60],
            [['b_logo'], 'string', 'max' => 80],
            [['site_url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '品牌id',
            'b_name' => '品牌名称',
            'b_logo' => 'Logo图片',
            'b_desc' => '简单描述',
            'site_url' => '品牌的网址',
            'sort' => '排序',//品牌在前台页面的显示顺序,数字越大越靠后
            'is_show' => '是否显示',//;0否1显示
        ];
    }
}
