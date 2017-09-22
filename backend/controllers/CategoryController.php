<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/11
 * Time: 19:30
 */

namespace backend\controllers;


use common\models\Category;
use yii\helpers\Url;
use yii\web\Controller;
use Yii;

class CategoryController extends IndexController
{
    public $layout = 'main';
    public function actionShow()
    {

        $categorys = Category::getCategory(Category::find()->asArray()->all());
        return $this->render('show',['categorys'=>$categorys]);
    }

    public function actionAdd()
    {
        $category = new Category();
        if(Yii::$app->request->isPost)
        {
            if($category->load(Yii::$app->request->post()) && $category->validate())
            {
                $res = $category->save();
                if($res)
                {
                    $this->success('添加成功');
                }
                else
                {
                    $this->error('添加失败');
                }
            }
        }
        $categories=category::getCategory(category::find()->asArray()->all());
        $dropDownList=$category->dropDownList($categories);
        return $this->render('add',['category'=>$category,'dropDownList'=>$dropDownList]);
    }

    public function actionDelete()
    {
        $id = Yii::$app->request->get('id');
        $count = Category::find()->where('parent_id=:id',['id'=>$id])->count();
//        var_dump($count);die;
        if($count > 0)
        {
            $this->error('该分支下有孩子，不能删除！');
        }
        $cat = Category::findOne($id);
        if($cat->delete())
        {
            $this->success('删除成功',['category/show']);
        }
        else
        {
            $this->error('删除失败');
        }
    }



}