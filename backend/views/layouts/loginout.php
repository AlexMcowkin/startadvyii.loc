<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="<?=Yii::$app->language;?>"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="<?=Yii::$app->language;?>"><![endif]-->
<!--[if !IE]><!-->
<html lang="<?=Yii::$app->language;?>">
<!--<![endif]-->
<head>
	<title><?=Html::encode($this->title);?></title>
	<base href="<?=Yii::$app->params['adminHomeUrl'];?>">
	<meta charset="<?=Yii::$app->charset;?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<?=Html::csrfMetaTags();?>
	<meta name="author" content="<?=Yii::$app->params['developerName']?>" />
	<meta name="contact" content="<?=Yii::$app->params['developerEmail']?>" />
	<?php $this->head();?>
	<?=$this->render('common/header');?>
</head>
<body>
<?php $this->beginBody();?>
<?=$this->render('common/nojs_oldbrowser');?>
<div class="sign-overlay"></div>
<div class="signpanel"></div>
<div class="panel signin">
	<?=$content;?>
</div>
<?=$this->render('common/footer');?>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>