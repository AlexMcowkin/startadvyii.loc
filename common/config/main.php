<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'modules' => [
        'admin' => [
            'class' => 'mdm\admin\Module',
        ],
    ],
    'components' => [
        // 'authManager' => [
        //     'class' => 'yii\rbac\DbManager',
        // ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
