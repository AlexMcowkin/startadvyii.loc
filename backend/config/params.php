<?php
switch($_SERVER["HTTP_HOST"])
{
    case 'adminka.startadvyii.loc':
        $adminHomeUrl = 'http://adminka.startadvyii.loc/';
        $frontendHomeUrl = 'http://startadvyii.loc';
        break;
    default:
        $adminHomeUrl = 'http://adminka.startadvyii.md/';
        $frontendHomeUrl = 'http://www.startadvyii.md';
        break;
}
return [
    'adminHomeUrl' => $adminHomeUrl,
    'frontendHomeUrl' => $frontendHomeUrl,
];
// Yii::$app->params['adminHomeUrl']
/* <?=Yii::$app->params['adminHomeUrl']?> */