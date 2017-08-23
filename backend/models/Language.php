<?php
namespace backend\models;

use Yii;

class Language extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'language';
    }

    public function rules()
    {
        return [
            [['name', 'code'], 'required'],
            [['name'], 'string', 'max' => 20],
            [['code'], 'string', 'max' => 4],
            ['code', 'filter', 'filter'=>'strtolower'],
            [['name', 'code'], 'unique'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => Yii::t('adminka/models', 'LANGUAGE_NAME'),
            'code' => Yii::t('adminka/models', 'LANGUAGE_CODE'),
        ];
    }
}