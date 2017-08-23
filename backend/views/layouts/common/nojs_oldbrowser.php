<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<noscript>
	<?=Yii::t('adminka', 'ENABLE_JS_PLEASE_1');?>
	<?=Html::a(Yii::t('adminka', 'ENABLE_JS_PLEASE_2'), 'http://www.enable-javascript.com/', ['target'=>'_blank', 'rel'=>'nofollow']);?>
</noscript>
<!--[if lt IE 8]>
<p class="chromeframe">
	<?=Yii::t('adminka', 'UPGRADE_BROWSER_PLEASE_1');?>
	<?=Html::a(Yii::t('adminka', 'UPGRADE_BROWSER_PLEASE_2'), 'http://browsehappy.com/', ['target'=>'_blank', 'rel'=>'nofollow'])?></p>
<![endif]-->