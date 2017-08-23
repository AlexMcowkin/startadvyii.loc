<?php 
use yii\widgets\Menu;
use common\models\lists\CategoryBackend;
echo Menu::widget([
    'encodeLabels'=>false,
    'options' => ['class' => 'dd-list'],
    'activeCssClass'=>'',
    'activateParents'=>false,
    'firstItemCssClass' =>null,
    'lastItemCssClass' =>null,
    'labelTemplate' =>'{label} Label',
    'linkTemplate' => '<div class="dd-handle">{label}</div>',
    'submenuTemplate' => "\n<ul class='dd-list'>\n{items}\n</ul>\n",
    'items' => CategoryBackend::viewMenuItemsForSorting(),
]);