<?php
namespace backend\models;

use Yii;

class CommondataMeta extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'commondata_meta';
    }

    public function rules()
    {
        return [
            [['lang_id', 'meta_title', 'meta_description', 'meta_keywords'], 'required'],
            [['lang_id'], 'integer'],
            [['slogan'], 'string'],
            [['meta_title', 'meta_description', 'meta_keywords'], 'string', 'max' => 255],
            [['lang_id'], 'exist', 'skipOnError' => true, 'targetClass' => Language::className(), 'targetAttribute' => ['lang_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'lang_id' => Yii::t('adminka/models', 'COMMONDATAMETA_LANGID'),
            'meta_title' => Yii::t('adminka/models', 'COMMONDATAMETA_TTL'),
            'meta_description' => Yii::t('adminka/models', 'COMMONDATAMETA_DESCR'),
            'meta_keywords' => Yii::t('adminka/models', 'COMMONDATAMETA_KEY'),
            'slogan' => Yii::t('adminka/models', 'COMMONDATAMETA_SLOGAN'),
        ];
    }

    public function getLang()
    {
        return $this->hasOne(Language::className(), ['id' => 'lang_id']);
    }
    
    /**
     * получить список всех задействованных языков
     */
    public function getAllUsedLanguages($isnew = false, $curid = NULL)
    {
        $_arrLang = [];

        if(empty($curid))
        {
            $_lang = CommondataMeta::find()->select('lang_id')->all();
        }
        else
        {
            $_lang = CommondataMeta::find()->select('lang_id')->andWhere(['!=', 'lang_id', $curid])->all();
        }
        if($_lang)
        {
            foreach ($_lang as $value)
            {
                $_arrLang[$value->lang_id] = $value->lang_id;
            }         
        }

        return $_arrLang;
    }
}