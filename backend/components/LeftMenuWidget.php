<?php
namespace backend\components;

use yii\base\Widget;

class LeftMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('LeftMenuWidgetView');
    }
}