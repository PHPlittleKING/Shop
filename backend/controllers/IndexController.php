<?php
namespace backend\controllers;

use backend\models\Admin;
use backend\models\People;
use frontend\models\Classs;
use Yii;
use yii\web\Controller;

/**
 * Site controller
 */
class IndexController extends Controller{
  public $enableCsrfValidation=false;
  public function actionLogin(){
      return $this->render('login');
  }
  public function actionPro(){
      $username=\yii::$app->request->post('username');
      $pwd=\yii::$app->request->post('pwd');
      $arr=Admin::find()->where(['username'=>$username])->one();
      if($arr){
          if($pwd==$arr['pwd']){
              setcookie('username',$username);
              echo "<script>alert('登录成功');location.href='?r=index/show';</script>";
          }
      }
  }
  public function actionShow(){
      return $this->render('show');
  }
  public function actionAdd(){
      $title=\yii::$app->request->post('title');
      $message=\yii::$app->request->post('message');
      $begin=\yii::$app->request->post('begin');
      $end=\yii::$app->request->post('end');
      $num=\yii::$app->request->post('num');
      $sql="insert into people(title,message,begin,end,num) values('$title','$message','$begin','$end','$num')";
      $res=People::findBySql($sql)->createCommand()->query();
      if($res){
          echo "<script>alert('添加活动成功');location.href='?r=index/aaa';</script>";
      }
  }
  public function actionAaa(){
      $data=People::find()->all();
      return $this->render('thank',['data'=>$data]);
  }
  public function actionNum(){
      $id=\yii::$app->request->get('id');
      $data=Classs::find()->where(['pid'=>$id])->all();
      return $this->render('num',['data'=>$data]);
  }
}
