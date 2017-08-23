<?php
namespace backend\controllers;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\filters\VerbFilter;
use common\models\Seourl;

class BackendController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function init()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->redirect(Url::base().'/login');
        }
    }

    public function actionIndex()
    {
        if (Yii::$app->user->isGuest)
        {
            return $this->redirect(Url::base().'/login');
        }
        else
        {
            // return $this->redirect(Url::base().'/adminka');
            $this->layout = "@app/views/layouts/content/content_part";
            return $this->render('empty');
        }
    }

    public function actionSeourl()
    {
        if($_SERVER['REQUEST_METHOD'] == 'POST')
        {
            $seoVal = Yii::$app->request->post('seoVal');

            $seourl = Seourl::generateSeoUrlFromTitle($seoVal);
            
            return $this->renderPartial('_ajaxsubmit', ['ajaxtext'=>$seourl]);
        }
        else
        {
            return $this->redirect(URL::home());
        }
    }
}