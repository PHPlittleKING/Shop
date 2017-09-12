<?php
namespace backend\controllers;

use yii;
use yii\web\Controller;

class InfoController extends Controller
{
    public function actionInfo()
    {
        return $this->render('info');
    }
}