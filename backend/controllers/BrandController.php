<?php

namespace backend\controllers;

use Yii;
use backend\models\Brand;
use backend\models\BrandSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * BrandController implements the CRUD actions for Brand model.
 */
class BrandController extends Controller
{
    public function actionAdd()
    {
        $this->layout = false;
        $model = new Brand();
        $request = Yii::$app->request;
        if ($request->isPost)
        {
            var_dump($request);
        }
        else
        {
            return $this->render('add');
        }


        return $this->render('add');
    }

    public function actionShow()
    {
        $this->layout = false;
        $model = new Brand();
        $sql = brand::find()->all();
        return $this->render('show',[
            'sql' => $sql,
        ]);
    }

}
