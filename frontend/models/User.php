<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'email', 'password', 'password_hash', 'auth_key', 'status', 'created_at', 'updated_at'], 'required'],
            [['password'], 'safe'],
            [['updated_at'], 'safe'],
            [['username', 'email', 'password_hash', 'auth_key', 'status', 'created_at'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => '用户名',
            'email' => 'Email',
            'password' => '密码',
//            'password_hash' => 'Password Hash',
//            'auth_key' => 'Auth Key',
//            'status' => 'Status',
//            'created_at' => 'Created At',
//            'updated_at' => 'Updated At',
        ];
    }
}
