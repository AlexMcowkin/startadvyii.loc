<?php
namespace backend\components;

use yii\base\Widget;

class TopmenuWidget extends Widget
{
    public function run()
    {
        return $this->render('TopmenuWidgetView');
    }
}