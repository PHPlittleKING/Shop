<?php

namespace backend\controllers;


use yii\web\Controller;
use yii\filters\AccessControl;
use yii\helpers\Url;
use Yii;

//公共控制器
class IndexController extends Controller
{
    /**
     * ACF 认证
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],       //认证用户
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    protected function success($msg='',$url='',$wait=3)
    {
        $url = !empty($url) ? Url::toRoute($url) : '';
        Yii::$app->session->setFlash('alerts',['msg'=>$msg,'url'=>$url,'state'=>1,'wait'=>$wait]);
    }
    protected function error($msg,$url='',$wait=3)
    {
        $url = !empty($url) ? yii\helpers\Url::toRoute($url) : '';
        Yii::$app->session->setFlash('alerts',['msg'=>$msg,'url'=>$url,'state'=>0,'wait'=>$wait]);
    }
}