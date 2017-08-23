<?php
namespace backend\components;

use yii\base\Widget;

class InfopanelWidget extends Widget
{
    public function run()
    {
        return $this->render('InfopanelWidgetView');
    }
}