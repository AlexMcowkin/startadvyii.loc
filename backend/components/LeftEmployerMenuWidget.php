<?php
namespace backend\components;

use yii\base\Widget;

class LeftEmployerMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('LeftEmployerMenuWidgetView');
    }
}