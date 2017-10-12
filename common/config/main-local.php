<?php
if(php_sapi_name() == "cli")
{
    // developer PC (home or work)
    // in MigrateController in beforeAction add var_dump(getHostByName(getHostName()));
    if(getHostByName(getHostName()) == '192.168.0.10')
    {
        $_db = [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=startadvyii_db',
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ];
    }
    else
    {
        $_db = [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=',
            'username' => '',
            'password' => '',
            'charset' => 'utf8',
        ];
    }
}
else
{
    switch($_SERVER["HTTP_HOST"])
    {
        case 'startadvyii.loc':
        case 'adminka.startadvyii.loc':
            $_db = [
                'class' => 'yii\db\Connection',
                'dsn' => 'mysql:host=localhost;dbname=startadvyii_db',
                'username' => 'root',
                'password' => '',
                'charset' => 'utf8',
            ];
            break;
        default:
            $_db = [
                'class' => 'yii\db\Connection',
                'dsn' => 'mysql:host=localhost;dbname=',
                'username' => '',
                'password' => '',
                'charset' => 'utf8',
            ];
            break;
    }
}

return [
    'components' => [
        'db' => $_db,
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'messageConfig' => [
                'charset' => 'UTF-8',
            ],
            'viewPath' => '@common/mail',
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.gmail.com',
                'username' => 'scorpiolaboratory@gmail.com',
                'password' => '***',
                'port' => '587',
                'encryption' => 'tls',
            ],
        ],
    ],
];
