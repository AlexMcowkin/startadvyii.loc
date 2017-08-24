<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'language' => $params['siteLanguage'],
    'sourceLanguage' => $params['sourceLanguage'],
    'timeZone' => $params['timeZone'],
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'bootstrap' => ['log'],
    'modules' => [
        'admin' => [
            'layout' => '@app/views/layouts/content/content_full',
        ],
        'rbac' => 'dektrium\rbac\RbacWebModule',
        'user' => [
            'class' => 'dektrium\user\Module',
            'admins' => ['adminer'],
            'controllerMap' => [
                'recovery' => [
                    'class' => 'dektrium\user\controllers\RecoveryController',
                    'layout' => '@app/views/layouts/loginout',
                ],
                'security' => [
                    'class' => 'dektrium\user\controllers\SecurityController',
                    'layout' => '@app/views/layouts/loginout',
                ],
                'registration' => [
                    'class' => 'dektrium\user\controllers\RegistrationController',
                    'layout' => '@app/views/layouts/loginout',
                ],
                'settings' => 'backend\controllers\settings\user\SettingsController',
                'admin' => [
                    'class' => 'dektrium\user\controllers\AdminController',
                    'layout' => '@app/views/layouts/content/content_full',
                ],
            ],
            // http://adminka.SITENAME.loc/user/registration/resend
            // http://adminka.SITENAME.loc/user/confirm/1/RxJhMid-OVoQHOQOvYkD_9XOVOFY2g9R
            'enableUnconfirmedLogin' => false,
            'enableRegistration' => false,
            'confirmWithin' => 21600,
            'cost' => 12,
            'modelMap' => [
                'Profile' => 'backend\models\settings\user\Profile',
            ],
        ],
        'backup' => [
            'class' => 'spanjeta\modules\backup\Module',
            'controllerMap' => [
                'default' => [
                    'class' => 'spanjeta\modules\backup\controllers\DefaultController',
                    'layout' => '@app/views/layouts/content/content_full',
                ],
            ],
        ],
        'utility' => [
            'class' => 'c006\utility\migration\Module',
            'controllerMap' => [
                'default' => [
                    'class' => 'c006\utility\migration\controllers\DefaultController',
                    'layout' => '@app/views/layouts/content/content_full',
                ],
            ],
        ],
    ],
    'components' => [
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@dektrium/user/views' => '@app/views/settings/user',
                    '@vendor/mdmsoft/yii2-admin/views/assignment'=>'@app/views/settings/admin/assignment',
                    '@vendor/mdmsoft/yii2-admin/views/route'=>'@app/views/settings/admin/route',
                    '@vendor/mdmsoft/yii2-admin/views/item'=>'@app/views/settings/admin/item',
                    '@vendor/spanjeta/yii2-backup/views/default' => '@app/views/settings/backup',
                    '@vendor/c006/yii2-migration-utility/views/default' => '@app/views/settings/migration',
                    '@dektrium/rbac/widgets/views' => '@app/views/settings/user/rbac/widgets',
                ],
            ],
        ],
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'error/error404',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            // 'suffix' => '.html',
            'rules' => [
                ''=>'backend/index',
                'register' => 'user/registration/register',
                'login' => 'user/security/login',
                'forgot' => 'user/recovery/request',
                'logout' => '/user/security/logout',
                'account' => 'user/settings/account',
                'profile' => 'user/settings/profile',
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                 // ['pattern' => 'elastic_add_index', 'route' => 'elaticindex/addindex', 'suffix' => '.php'],
            ],
        ],
        'assetManager' => [
            'bundles' => [
                'yii\web\JqueryAsset' => [
                    'js'=>[]
                ],
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js'=>[]
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => [],
                ],
            ],
        ],
        'i18n' => [
            'translations' => [
                'adminka*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'forceTranslation' => true,
                    'fileMap' => [
                        'adminka' => 'adminka.php',
                        'adminka/models' => 'models.php',
                    ],
                ],
            ],
        ],
    ],
    'params' => $params,
    'layout' => 'common',
    'defaultRoute' => 'backend',
];
