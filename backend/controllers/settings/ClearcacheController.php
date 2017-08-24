<?php
namespace backend\controllers\settings;

use Yii;
use yii\helpers\Url;
use yii\web\Controller;
use yii\helpers\FileHelper;

class ClearcacheController extends Controller
{
    public $layout = "@app/views/layouts/content/content_full";
    
	public function actionIndex()
	{
        return $this->redirect(Url::base().'/adminka');	
	}

    public function actionFrontendcache($folder="cache")
    {
    	$_dir = Yii::getAlias('@frontend').'\runtime\\'.$folder;
    	try
    	{
    		FileHelper::removeDirectory($_dir);
    		Yii::$app->getSession()->setFlash('successDelete', Yii::t('adminka', 'MSG_CLEAR_CACHE'));
    	}
        catch (Exception $e)
        {
        	Yii::$app->getSession()->setFlash('errorDelete', Yii::t('adminka', 'MSG_NOTCLEAR_CACHE'));
        }
        return $this->render('index');
    }

    public function actionBackendcache($folder="cache")
    {
    	$_dir = Yii::getAlias('@backend').'\runtime\\'.$folder;
    	try
    	{
    		FileHelper::removeDirectory($_dir);
    		Yii::$app->getSession()->setFlash('successDelete', Yii::t('adminka', 'MSG_CLEAR_CACHE'));
    	}
        catch (Exception $e)
        {
        	Yii::$app->getSession()->setFlash('errorDelete', Yii::t('adminka', 'MSG_NOTCLEAR_CACHE'));
        }
        return $this->render('index');
    }
}