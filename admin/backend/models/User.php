<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "User".
 *
 * @property integer $user_id
 * @property string $user_name
 * @property string $user_pwd
 * @property string $user_job
 * @property integer $user_sex
 * @property integer $user_phone
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_sex', 'user_phone'], 'integer'],
            [['user_name', 'user_pwd', 'user_job'], 'message'=>'{attribute}不能为空', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'user_id' => 'User ID',
            'user_name' => 'User Name',
            'user_pwd' => 'User Pwd',
            'user_job' => 'User Job',
            'user_sex' => 'User Sex',
            'user_phone' => 'User Phone',
        ];
    }

    
}
