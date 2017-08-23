<?php
namespace backend\components;

use yii\base\Widget;

class TopmenuSortWidget extends Widget
{
    public function run()
    {
        return $this->render('TopmenuSortWidgetView');
    }
}