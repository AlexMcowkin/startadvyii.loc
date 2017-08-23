<?php 
use yii\widgets\Menu;
use common\models\lists\TopmenuBackend;
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
    'items' => TopmenuBackend::viewMenuItemsForSorting(),
]);