<?php
namespace backend\controllers;

use common\models\Brand;
use yii;
use yii\web\Controller;
use yii\grid\GridView;
use yii\data\ActiveDataProvider;  //引用
use yii\data\Pagination;    //分页类

class BrandController extends Controller
{
    public $layout='main';
    public function actionAdd()
    {
        $brand = new Brand();
        //判断是否post过来数据
        if(yii::$app->request->isPost)
        {
            $post=yii::$app->request->post();
            if($brand->load($post) && $brand->validate())
            {
                $brand->save();
            }
        }
        return $this->render('add',['brand'=>$brand]);
    }

    public function actionShow()
    {
        $sql= Brand::find()->all();
        return $this->render('show',['sql'=>$sql]);
    }


    //分页
//    public function actionShow()
//    {
//        $query = Brand::find();
//        $provider = new ActiveDataProvider([
//            'query' => $query,
//            'pagination' => [
//                'pageSize' => 5,   //每页条数
//            ],
//        ]);
//        return $this->render('show', [
//            'model' => $query,
//            'dataProvider' => $provider
//        ]);
//
//    }

        public function actionUpdate()
        {
            $this->layout = 'main';
            $brand = new Brand();
            $brand = Brand::find()->one();
            var_dump($brand);die;
            return $this->render('update',['brand'=>$brand]);
        }

}