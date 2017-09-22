<?php

namespace backend\controllers;
use backend\models\Admin;
use yii;
use common\models\UploadForm;
use yii\web\UploadedFile;
class AdminController extends IndexController
{
    public function actionInfo()
    {

        $model = new UploadForm();
        $admin = new Admin();
        $data[] = Yii::$app->user->identity->username;
        $data[] = Yii::$app->user->identity->email;
//        var_dump($data);
        if(Yii::$app->request->isPost)
        {
            $model->imageFile = UploadedFile::getInstance($model,'imageFile');
            $res = $model->upload();
//            var_dump($res);
        }
        $data = Admin::find()->all();
        return $this->render('info',['model'=>$model]);
    }

    public function actionEmail()
    {

    }


}
