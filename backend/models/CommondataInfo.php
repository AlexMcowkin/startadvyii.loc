<?php
namespace backend\models;

use Yii;

use yii\validators\EmailValidator;
use yii\validators\NumberValidator;
use yii\validators\RequiredValidator;

class CommondataInfo extends \yii\db\ActiveRecord
{

    public $commoninfo;

    public static function tableName()
    {
        return 'commondata_info';
    }

    public function rules()
    {
        return [
            ['commoninfo', 'requireAttributes'],
            ['commoninfo', 'uniqueAttribute'],
            // [['attribute', 'text'], 'required'],
            // [['attribute'], 'unique'],
            // [['attribute'], 'string', 'max' => 30],
            // [['text'], 'string', 'max' => 300],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'attribute' => Yii::t('adminka/models', 'COMMONDATAINFO_ATTR'),
            'text' => Yii::t('adminka/models', 'COMMONDATAINFO_VAL'),
        ];
    }

    /**
     * проверяю, если все поля заполнены
     */
    public function requireAttributes($attribute)
    {
        $requiredValidator = new RequiredValidator();
        foreach($this->$attribute as $index => $row)
        {
            foreach (['attribute', 'text'] as $name)
            {
                $error = null;
                $value = isset($row[$name]) ? $row[$name] : null;
                $requiredValidator->validate($value, $error);
                if (!empty($error))
                {
                    $key = $attribute . '[' . $index . '][' . $name . ']';
                    $this->addError($key, $error);
                }
            }
        }
    }

    /**
     * проверяю, если все значения поля 'attribute' не повторяются
     */
    public function uniqueAttribute($attribute)
    {
        $_atrArray = array();

        foreach($this->$attribute as $index => $row)
        {
            if (in_array($row['attribute'], $_atrArray))
            {
                $key = $attribute . '[' . $index . '][attribute]';
                $this->addError($key, Yii::t('adminka/models', 'DONOT_REPEAT'));
            }
            $_atrArray[] = $row['attribute'];
        }
    }
}