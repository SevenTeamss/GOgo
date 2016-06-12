<?php

namespace backend\controllers;
use yii;

class IndexController extends \yii\web\Controller
{
	public $enableCsrfValidation = false;
	//头部
    public function actionHeader()
    {

        return $this->renderPartial('header');
    }
    //首页显示
    public function actionIndex()
    {
    	$session = Yii::$app->session;
    	$session->open();
        return $this->actionHeader().$this->renderPartial('index');
    }


}
