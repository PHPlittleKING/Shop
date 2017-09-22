<?php
namespace backend\controllers;


use backend\models\Attribute;

class AttributeController extends IndexController
{
    public function actionAdd()
    {
        $this->layout = 'main';
        return $this->render('add');
    }

    public function actionShow()
    {
        $this->layout = 'main';
        $attr = new Attribute();
        $attr = Attribute::find()->all();
        var_dump($attr);
        return $this->render('show',['attr',$attr]);
    }

}
