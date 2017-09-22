<?php
namespace backend\controllers;

use backend\models\Admin;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\helpers\Url;
use backend\models\LoginForm;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * ACF 认证
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
//            'access' => [
//                'class' => AccessControl::className(),
//                'rules' => [
//                    [
//                        'actions' => ['login', 'error'],
//                        'allow' => true,
//                    ],
//                    [
//                        'actions' => ['logout', 'index',''],
//                        'allow' => true,
//                        'roles' => ['@'],       //认证用户
//                    ],
//                ],
//            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->redirect(['index/index']);
//        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = 'signin';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }


    public function actionSendMail()
    {
        $this->layout = 'signin';
        $admin = new Admin(['scenario'=>'sendmail']);
        if(Yii::$app->request->isPost)
        {
            $data = Yii::$app->request->post();
            //var_dump($data);
            if($admin->load($data) && $admin->validate())
            {
                //判断Admin表里有没有传过来的email
                $email = $admin->email;
                $res = Admin::findOne(['email'=>$email]);
                if($res)
                {
                    //发送邮件
//                    var_dump($res);
                    $a = Yii::$app->mailer->compose('html')
                        ->setFrom('13001177118@163.com')
                        ->setTo($res->email)
                        ->setSubject('ssssss')
                        ->send();
                    var_dump($a);
                }
                else
                {
                    $this->error('输入有误');
                }
            }
        }
        return $this->render('mail',['admin'=>$admin]);
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
