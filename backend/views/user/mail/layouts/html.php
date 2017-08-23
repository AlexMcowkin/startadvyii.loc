<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->beginPage();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=<?= Yii::$app->charset ?>" />
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    
        <div class="logo">
            <?= Html::a(Html::img(Yii::$app->params['homeUrl'].'images/maillogo.png', ['alt'=>Yii::$app->params['homeUrlTextLink'], 'title'=>Yii::$app->params['homeUrlTextLink']]), Url::to(['frontend/index']), ['title'=>Yii::$app->params['homeUrlTextLink']])?>
        </div>
    
        <div class="content" style="font-size: 14px; color: #4F5E62; line-height:20px; font-family: Arial,Helvetica,sans-serif;">
            <?= $content ?>
        </div>
    
        <div class="footer" style="border-top:1px solid #e5e5e5; max-width: 350px;">
            <p style="font-size: 12px;color: #2196F3;font-style: italic;"><?=Yii::t('adminka/user', 'MAIL');?>,<br /><?=Yii::$app->params['homeUrlTextLink'];?></p>
        </div>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>