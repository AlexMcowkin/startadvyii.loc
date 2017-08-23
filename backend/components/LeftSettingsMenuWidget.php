<?php
namespace backend\components;

use yii\base\Widget;

class LeftSettingsMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('LeftSettingsMenuWidgetView');
    }
}