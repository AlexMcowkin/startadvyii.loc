<?php 
use yii\widgets\Menu;
echo Menu::widget([
    'encodeLabels'=>false,
    'options' => ['class' => 'nav nav-pills nav-stacked nav-quirk nav-quirk-primary'],
    'activeCssClass'=>'active',
    'activateParents'=>true,
    'firstItemCssClass' =>null,
    'lastItemCssClass' =>null,
    'submenuTemplate' => "\n<ul class='children'>\n{items}\n</ul>\n",
    'items' => [
        ['label' => Yii::t('adminka', 'TTL_LEFT_SPECS'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-list-alt"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/category/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/category/create']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_TAGS'), 'url' => ['/tags/index']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_PAGES'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-pencil-square-o"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/pages/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/pages/create']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_WIDGETS'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-share-alt"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/widget/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/widget/create']],
            ]
        ],
        // ['label' => Yii::t('adminka', 'TTL_LEFT_SUBSCR'),
        //     'url' => ['/'],
        //     'options'=>['class'=>'nav-parent'],
        //     'template' => '<a><i class="fa fa-user-plus"></i> <span>{label}</span></a>',
        //     'items' => [
        //         ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/subscribers/index']],
        //         ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/subscribers/create']],
        //     ]
        // ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_CURRENCY'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-usd"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/currency/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/currency/create']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_CITY'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-building"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/city/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/city/create']],
                ['label' => Yii::t('adminka', 'страны'), 'url' => ['/country/index']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_FAQ'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-question-circle"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/help/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/help/create']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_NEWS'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-info-circle"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/news/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/news/create']],
            ]
        ],
    ],
]);