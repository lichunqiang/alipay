<?php namespace light\alipay\controllers;

use yii\web\Controller;

class TestController extends Controller
{
    /**
     * The index page
     * @return mixed
     */
    public function actionIndex()
    {
        echo "success", __CLASS__;
    }
}
