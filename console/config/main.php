<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

switch($_SERVER["HTTP_HOST"])
{
    case 'startadvyii.loc':
        $_url = 'http://startadvyii.loc';
        break;
    default:
        $_url = 'http://www.startadvyii.md';
        break;
}

return [
    'id' => 'app-console',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'console\controllers',
    'controllerMap' => [
        'fixture' => [
            'class' => 'yii\console\controllers\FixtureController',
            'namespace' => 'common\fixtures',
          ],
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'scriptUrl' => $_url,
            'baseUrl' => $_url,
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'mustache' => 'yii\mustache\ViewRenderer'
            ],
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => $params,
];
