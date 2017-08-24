<?php 
use yii\widgets\Menu;

echo Menu::widget([
    'encodeLabels'=>false,
    'options' => ['class' => 'nav nav-pills nav-stacked nav-quirk'],
    'activeCssClass'=>'active',
    'activateParents'=>true,
    'firstItemCssClass' =>null,
    'lastItemCssClass' =>null,
    'submenuTemplate' => "\n<ul class='children'>\n{items}\n</ul>\n",
    'items' => 
    [
        ['label' => Yii::t('adminka', 'TTL_LEFT_COMMON'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_INFODATA'), 'url' => ['/settings/commondatainfo/index']],
                // ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_METADATA'), 'url' => ['/commondatameta/index']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_LANG'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/settings/language/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/settings/language/create']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_RBAC'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ROUTE'), 'url' => ['/admin/route/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_PERMISS'), 'url' => ['/admin/permission/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ROLE'), 'url' => ['/admin/role/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ASSIG'), 'url' => ['/admin/assignment/index']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_USERS'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LIST'), 'url' => ['/user/admin/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_ADD'), 'url' => ['/user/admin/create']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_CACHE'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => '###FRONTEND####', 'url' => ['/'], 'template' => '<a class="text-center">{label}</a>'],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_FE_CACHE'), 'url' => ['/settings/clearcache/frontendcache', 'folder' => 'cache']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_FE_DEBUG'), 'url' => ['/settings/clearcache/frontendcache', 'folder' => 'debug']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_FE_HTML'), 'url' => ['/settings/clearcache/frontendcache', 'folder' => 'HTML']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_FE_LOGS'), 'url' => ['/settings/clearcache/frontendcache', 'folder' => 'logs']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_FE_MAIL'), 'url' => ['/settings/clearcache/frontendcache', 'folder' => 'mail']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_FE_URI'), 'url' => ['/settings/clearcache/frontendcache', 'folder' => 'URI']],
                ['label' => '###BACKEND####', 'url' => ['/'], 'template' => '<a class="text-center">{label}</a>'],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BE_CACHE'), 'url' => ['/settings/clearcache/backendcache', 'folder' => 'cache']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BE_DEBUG'), 'url' => ['/settings/clearcache/backendcache', 'folder' => 'debug']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BE_HTML'), 'url' => ['/settings/clearcache/backendcache', 'folder' => 'HTML']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BE_LOGS'), 'url' => ['/settings/clearcache/backendcache', 'folder' => 'logs']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BE_MAIL'), 'url' => ['/settings/clearcache/backendcache', 'folder' => 'mail']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BE_URI'), 'url' => ['/settings/clearcache/backendcache', 'folder' => 'URI']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_BD'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BACKUPLIST'), 'url' => ['/backup/default/index']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_BACKUPCREATE'), 'url' => ['/backup/default/create']],
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_LOADBACKUP'), 'url' => ['/backup/default/upload']],
            ]
        ],
        ['label' => Yii::t('adminka', 'TTL_LEFT_MIGRATION'),
            'url' => ['/'],
            'options'=>['class'=>'nav-parent'],
            'template' => '<a><i class="fa fa-check-square"></i> <span>{label}</span></a>',
            'items' => [
                ['label' => Yii::t('adminka', 'TTL_LEFT_SUBMENU_CREATE'), 'url' => ['/utility']],
            ]
        ],
    ],
]);