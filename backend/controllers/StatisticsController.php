<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class StatisticsController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }
}