<?php
namespace backend\models\user;

use yii\imagine\Image;

class Profile extends \dektrium\user\models\Profile
{
    public function rules()
    {
        $rules = parent::rules();
        $rules['avatarFile']   = [['avatar'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg',  'maxSize' => 1024*1024*5];
        $rules['skypeLength'] = [['skype'], 'string', 'min' => 5, 'max' => 20];
        $rules['phoneLength'] = [['phone'], 'string', 'min' => 5, 'max' => 20];
        
        return $rules;
    }

    public function attributeLabels()
    {
        $attributeLabels = parent::attributeLabels();
        $attributeLabels['avatar'] = \Yii::t('adminka/models', 'PROFILE_AVATAR');
        $attributeLabels['phone'] = \Yii::t('adminka/models', 'PROFILE_PHONE');
        $attributeLabels['skype'] = \Yii::t('adminka/models', 'PROFILE_SKYPE');
        
        return $attributeLabels;
    }

    public function loadAttributes(User $user)
    {
        $user->setAttributes($this->attributes);

        $profile = \Yii::createObject(Profile::className());
        $profile->setAttributes([
            'name' => $this->username,
            'public_email' => $this->public_email,
            'avatar' => $this->avatar,
            'phone' => $this->phone,
            'skype' => $this->skype,
        ]);
        $user->setProfile($profile);
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert))
        {
            $this->avatar = \Yii::$app->user->identity->profile->avatar;

            return true;
        }

        return false;
    }

    public function afterSave($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        $user_id = \Yii::$app->user->identity->getId();

        // UPLOAD NEW AVATAR
        if(!is_null($this->avatar))
        {
            $path = \Yii::getAlias('@backend') . '/web/images/avatar/';

            $this->avatar = \Yii::$app->security->generateRandomString().'.'.$this->avatar->extension;

            // remove old avatar file from folder
            $oldAvatar = \Yii::$app->user->identity->profile->avatar;
            if(is_file($path.$oldAvatar) && file_exists($path.$oldAvatar))
            {
                unlink($path.$oldAvatar);
            }

            $this->avatar->saveAs($path . $this->avatar);
            Image::thumbnail($path . $this->avatar, 150, 150)->save($path . $this->avatar, ['quality' => 80]);

            Profile::updateAll(['avatar'=>$this->avatar], ['user_id'=> $user_id]);
        }
    }
}