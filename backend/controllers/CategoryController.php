<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11
 * Time: 19:30
 */

namespace backend\controllers;


use common\models\Category;
use yii\helpers\Url;
use yii\web\Controller;
use Yii;

class CategoryController extends IndexController
{
    public $layout = 'main';
    public function actionShow()
    {
        $categorys = Category::find()->asArray()->all();
        $result = Category::getCategory($categorys);
        var_dump($result);die;
        return $this->render('show',['category'=>$category]);
    }

    public function actionAdd()
    {
        $category = new Category();
        if(Yii::$app->request->isPost)
        {
            if($category->load(Yii::$app->request->post()) && $category->validate())
            {
                $res = $category->save();
                if($res)
                {
                    $this->success('添加成功');
                }
                else
                {
                    $this->error('添加失败');
                }
            }

        }
        return $this->render('add',['category'=>$category]);
    }



}