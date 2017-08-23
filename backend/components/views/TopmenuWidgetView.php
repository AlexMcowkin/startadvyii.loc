<?php 
use yii\widgets\Menu;
echo Menu::widget([
    'encodeLabels'=>false,
    'options' => ['class' => 'dropdown-menu pull-right'],
    'activeCssClass'=>'current',
    'activateParents'=>true,
    'firstItemCssClass' =>null,
    'lastItemCssClass' =>null,
    'labelTemplate' =>'{label} Label',
    'linkTemplate' => '<a href="{url}">{label}</a>',
    'submenuTemplate' => "\n<ul>\n{items}\n</ul>\n",
    'items' => [
        ['label' => '<i class="fa fa-user"></i> '.Yii::t('adminka', 'TM_PROFILE'), 'url' => ['/profile']],
        ['label' => '<i class="fa fa-cog"></i> '.Yii::t('adminka', 'TM_SETTINGS'), 'url' => ['/account']],
        ['label' => '<i class="fa fa-power-off"></i> '.Yii::t('adminka', 'TM_LOGOUT'), 
            'url' => ['/logout'],
            'template' => '<a href="{url}" data-method="post">{label}</a>',
        ],
    ],
]);