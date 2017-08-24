<?php

switch($_SERVER["HTTP_HOST"])
{
    case 'startadvyii.loc':
        $frontendHomeUrl = 'http://startadvyii.loc';
        $adminHomeUrl = 'http://adminka.startadvyii.loc/';
        break;
    case 'adminka.startadvyii.loc':
        $frontendHomeUrl = 'http://startadvyii.loc';
        $adminHomeUrl = 'http://adminka.startadvyii.loc/';
        break;
    default:
        $frontendHomeUrl = '';
        $adminHomeUrl = '';
        break;
}

return [

    'siteLanguage' => 'ru-RU',
    'sourceLanguage' => 'ru-RU',
    'timeZone' => 'Europe/Chisinau',

	'homeUrl' => 'http://www.SITE.loc/',
    'homeUrlTextLink' => 'SITE.loc',
    'siteEmailName' => 'SITE.loc Team',
    'siteEmailFrom' => 'scorpiolaboratory@gmail.com',

    'developerEmail' => 'mail@makovkin.info',
    'developerSite' => 'makovkin.info',
    'developerName' => 'Makovkin Alex-jr',

    'frontendHomeUrl' => $frontendHomeUrl,
    'adminHomeUrl' => $adminHomeUrl,
];

// Yii::$app->params['adminHomeUrl']
/* <?=Yii::$app->params['adminHomeUrl']?> */
