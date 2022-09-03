<?php

namespace app\controllers;

class PenjualanController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $model = new \app\models\Penjualan();
        return $this->render('form_header', compact ('model'));
        
    }

}