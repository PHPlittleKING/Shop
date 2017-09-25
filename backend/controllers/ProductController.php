<?php
namespace backend\controllers;

use backend\controllers;
class ProductController extends IndexController
{
    public function actionShow()
    {
        return $this->render('show');
    }
}

?>

