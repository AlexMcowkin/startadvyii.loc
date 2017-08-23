<?php
namespace backend\components;

use yii\base\Widget;

class LeftDevelopersMenuWidget extends Widget
{
    public function run()
    {
        return $this->render('LeftDevelopersMenuWidgetView');
    }
}