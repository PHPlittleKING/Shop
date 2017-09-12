<?php
namespace backend\controllers;

use yii;
use common\models\Brand;
use yii\web\Controller;
use yii\data\Pagination;
use yii\filters\AccessControl;


class   UploadController extends Controller
{
    public function actions()
    {
        return [
            'upload'=>[
                'class' => 'common\widgets\file_upload\UploadAction',     //这里扩展地址别写错
                'config' => [
                    'imagePathFormat' => "/image/{yyyy}{mm}{dd}/{time}{rand:6}",
                ]
            ]
        ];
    }
}





?>