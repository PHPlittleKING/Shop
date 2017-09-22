<?php
/**
 * Created by PhpStorm.
 * User: CrazyT
 * Date: 2017/9/7
 * Time: 8:48
 */

namespace common\models;


use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{
    public function rules()
    {
        return [
            [['brand_name','site_url'],'required'],
            ['brand_name','string','length'=>[1,4]],
            ['brand_desc','string','length'=>[0,255]],
            ['site_url','url','defaultScheme'=>'http'],
            ['is_show','integer'],
            ['sort','integer'],
            ['sort','default','value'=>10],
        ];


    }

    public function attributeLabels()
    {
        return [
            'brand_name' => '品牌名称',
            'brand_logo' => '品牌logo',
            'brand_desc' => '简短描述',
            'is_show'    => '是否展示',
            'site_url'   => '品牌官网',
            'sort'       => '排序',
        ];
//        return parent::attributeLabels(); // TODO: Change the autogenerated stub
    }

    public function loadDefaultValues($skipIfSet = true)
    {
        $this->is_show = 1;
        $this->sort = 10;
        return $this;
//        return parent::loadDefaultValues($skipIfSet); // TODO: Change the autogenerated stub
    }

    public function dropDownList($brands=[])
    {
        $result=[];
        if(is_array($brands))
        {
            foreach ($brands as $value)
            {
                $result[$value['brand_id']]=str_repeat('---',$value['level']).$value['brand_name'];
            }

        }
        return $result;
    }

    static public function getBrand($brands=[],$parentId=0,$level=0)
    {
        static $result = [];
        if(is_array($brands))
        {
            foreach($brands as $key => $value )
            {
                if($value['parent_id'] == $parentId)
                {
                    $value['level'] = $level;
                    $result[] = $value;
                    self::getBrand($brands,$value['brand_id'],$level+1);
                }
            }
        }
        return $result;
    }
}