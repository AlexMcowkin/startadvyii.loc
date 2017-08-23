<?php
namespace backend\components;

use yii\base\Widget;

class LeftCommonMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('LeftCommonMenuWidgetView');
    }
}