<?php
namespace frontend\models;

use yii\base\Model;
// use common\models\User;
// use yii\web\UploadedFile;

class LoginForm extends \yii\base\Model
{
    public $username;
    public $pwd;
    public $email;
    public $phone;

    public function rules()
    {
        return [
            // 在这里定义验证规则

			[['username'],'required','message'=>'用户名不能为空'],  
			['pwd','required','message'=>'密码不能为空'],
			['pwd','string','max'=>6,'min'=>3],
			['email','required','message'=>'邮箱不能为空'],
			['email','email','message'=>'邮箱格式不正确'],
			['phone','required','message'=>'手机号不能为空'],
      [['phone'],'match','pattern'=>'/^[1][3578][0-9]{9}$/','message'=>'手机格式不正确'],
      ];
    } 
    
    public function attributeLabels()
  	{

     return [
       'username'=>'用户名',
       'email'=>'邮箱',
       'pwd'=>'密码',
       'phone'=>'手机号',

      ];
  	}

}


?>