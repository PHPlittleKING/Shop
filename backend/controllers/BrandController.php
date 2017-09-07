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
    public $layout= 'main';
    //品牌添加
    public function actionAdd()
    {
        $brand = new Brand();
        //判断是否post过来数据
        if(yii::$app->request->isPost)
        {
            $post=yii::$app->request->post();
            if($brand->load($post) && $brand->validate())
            {
                $b = $brand->save();
                if($b)
                {
                    return $this->redirect(['brand/show']);
                }
                else
                {
                    return $this->redirect(['brand/add']);
                }
            }
        }
        return $this->render('add',['brand'=>$brand]);
    }
    //品牌查询
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
        //品牌修改
        public function actionUpdate()
        {
            $this->layout = 'main';
            $brand = new Brand();
            $get = yii::$app->request->get('id');
            var_dump($get);die;
            $brand = Brand::find()->one();
            return $this->render('update',['brand'=>$brand]);
        }

        public function actionDel()
        {
            $brand = new Brand();
            $get = yii::$app->request->get('id');
            $brand = Brand::find()->where(['id'=>'id'])->one();
            var_dump($get);die;
            $brand->delete();
            return $this->render('del');
        }

}