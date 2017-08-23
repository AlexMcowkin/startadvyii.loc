<?php 
namespace backend\controllers\user;

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
            $image = UploadedFile::getInstance($model, 'avatar');

            // if we upload new image
            if(!is_null($image))
            {
                $ext = end((explode(".", $image->name)));
                $model->avatar = Yii::$app->security->generateRandomString().".{$ext}";

                $path = Yii::getAlias('@backend') . '\web\images\avatar\\';

                if($model->save())
                {
                    // remove old avatar file
                    $oldAvatar = Yii::$app->user->identity->profile->avatar;
                    if(file_exists($path.$oldAvatar) && is_file($path.$oldAvatar)) {unlink($path.$oldAvatar);}

                    $image->saveAs($path . $model->avatar);
                    // Image::thumbnail(Yii::$app->params['uploadPath'].$model->avatar, 120, 120)->save(Yii::$app->params['uploadPath'].'sqr_'.$model->avatar, ['quality' => 50]);
                
                    Yii::$app->getSession()->setFlash('success', Yii::t('user', 'Your profile has been updated'));
                    $this->trigger(self::EVENT_AFTER_PROFILE_UPDATE, $event);
                    return $this->refresh();
                }
            }
            else
            {
                $model->avatar = Yii::$app->user->identity->profile->avatar;

                if($model->save())
                {
                    Yii::$app->getSession()->setFlash('success', Yii::t('user', 'Your profile has been updated'));
                    $this->trigger(self::EVENT_AFTER_PROFILE_UPDATE, $event);
                    return $this->refresh();
                }
            }
        }

        return $this->render('profile', [
            'model' => $model,
        ]);
    }
}