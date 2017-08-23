<?php
namespace backend\components;

use yii\base\Widget;

class CategorySortWidget extends Widget
{
    public function run()
    {
        return $this->render('CategorySortWidgetView');
    }
}