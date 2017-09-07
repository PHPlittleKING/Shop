<?php

namespace backend\models;

use yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sh_brand".
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
        return 'sh_brand';
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
            'b_name' => '品牌名称',
            'b_logo' => '品牌Logo',
            'b_desc' => '描述',
            'site_url' => '品牌官网',
            'sort' => '排序',
            'is_show' => '是否展示',
        ];
    }
}
