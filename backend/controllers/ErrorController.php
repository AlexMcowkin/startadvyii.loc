<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;

class ErrorController extends Controller
{
    public function actionIndex()
    {
        $this->layout = "error";
        return $this->render('error404');
    }
    
    public function actionError404()
    {
        $this->layout = "error";
        return $this->render('error404');
    }
}