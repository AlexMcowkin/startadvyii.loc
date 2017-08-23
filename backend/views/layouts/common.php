<?php
use yii\helpers\Html;
use yii\helpers\Url;
use backend\assets\AppAsset;
AppAsset::register($this);
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
<?php switch (Yii::$app->controller->action->id)
{
    case 'post':    $bodyclass =  'class="signwrapper"';
                    break;
    default:        $bodyclass =  '';
                    break;
}?>
<body <?=$bodyclass;?>>
<?php $this->beginBody();?>
<?=$this->render('common/nojs_oldbrowser');?>
	<?=$this->render('common/topmenu');?>
	<section>
		<?=$this->render('common/leftmenu');?>
		<div class="mainpanel">
			<div class="contentpanel">
				<?=$content;?>
			</div>
		</div>
		<?=$this->render('common/footer');?>
	</section>
<?php $this->endBody();?>
</body>
</html>
<?php $this->endPage();?>