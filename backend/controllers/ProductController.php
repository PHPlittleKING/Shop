<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/19
 * Time: 8:46
 */
namespace backend\controllers;

use backend\models\Goods;
use backend\models\GoodsType;
use common\models\Brand;
use common\models\Category;
use yii\data\Pagination;
use Yii;


class ProductController extends IndexController
{
    public function actionShow()
    {
        $this->layout = 'main';
        return $this->render('show');
    }
}
