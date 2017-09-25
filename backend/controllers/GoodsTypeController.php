<?php
namespace backend\controllers;

use backend\models\Attribute;
use backend\models\GoodsType;
use Yii;

class GoodsTypeController extends IndexController
{
    //商品类型展示
    public function actionShow()
    {
        $this->layout = 'main';
        $model = new GoodsType();
        $model = GoodsType::find()->all();
//        var_dump($model);
        return $this->render('show',['model'=>$model]);
    }

    //商品类型添加
    public function actionAdd()
    {
        $model = new GoodsType();
        if(Yii::$app->request->isPost)
        {
            $data = Yii::$app->request->post();
//            var_dump($data);
            if($model->load($data) && $model->validate())
            {
                $res = $model->save();
                if($res)
                {
                    $this->success('添加成功',['goods-type/show']);
                }
                else
                {
                    $this->error('添加失败');
                }
            }
        }
        return $this->render('add',['model'=>$model]);
    }

    //商品类型修改
    public function actionUpdate()
    {
        return $this->render('update');
    }

    //商品类型删除
    public function actionDel()
    {
        return $this->render('del');
    }

    public function actionGetAttrByTypeId($tid)
    {
        $this->layout = false;
        $attrs = (new Attribute())->getAttr($tid);
        return $this->render('attrlist',['attrs'=>$attrs]);
    }

    public  function dropDownList()
    {
        return $this->render('list');
    }

    //
    public function actionGetAttributeByTypeId($tid)
    {
        $this->layout = false;
        $attrs = (new Attribute())->getAttr($tid);
        return $this->render('attrlist',['attrs'=>$attrs]);
    }







}
?>