<?php 
namespace backend\controllers\settings\user;

use Yii;
use yii\web\UploadedFile;
use yii\imagine\Image;

class SettingsController extends \dektrium\user\controllers\SettingsController
{
    public $layout = "@app/views/layouts/content/content_full";

    public function actionProfile()
    {
        $model = $this->finder->findProfileById(Yii::$app->user->identity->getId());
        if ($model == null) {
            $model = Yii::createObject(Profile::className());
            $model->link('user', Yii::$app->user->identity);
        }
        $event = $this->getProfileEvent($model);
        $this->performAjaxValidation($model);
        $this->trigger(self::EVENT_BEFORE_PROFILE_UPDATE, $event);
        
        if($model->load(Yii::$app->request->post()))
        {
            $model->avatar_file = UploadedFile::getInstance($model, 'avatar_file');

            if($model->save())
            {
                Yii::$app->getSession()->setFlash('success', Yii::t('user', 'Your profile has been updated'));
                $this->trigger(self::EVENT_AFTER_PROFILE_UPDATE, $event);
                return $this->refresh();
            }
        }

        return $this->render('profile', [
            'model' => $model,
        ]);
    }
}
