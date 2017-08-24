<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Забыли пароль?');
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
?>
<div class="panel-heading">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="panel-body">
    <?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]);?>

    <?php $form = ActiveForm::begin([
        'id'                     => 'password-recovery-form',
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
    ]) ?>

        <?= $form->field($model, 'email', ['inputOptions' => [
                'autofocus' => 'autofocus',
                'class' => 'form-control',
                'tabindex' => '1',
                'placeholder'=>'email'
            ],
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>{error}{hint}',
            ])->label(false);
        ?>
   
        <div class="form-group">
            <?= Html::submitButton(Yii::t('user', 'ВОССТАНОВИТЬ'), ['class' => 'btn btn-success btn-quirk btn-block', 'tabindex' => '2']);?>
        </div>
        <?php ActiveForm::end();?>
        
        <div class="or"><?=Yii::t('user', 'или');?></div>
        <p>
            <?=Html::a(Yii::t('user', 'авторизация'), ['/login'], ['tabindex' => '3', 'class'=>"pull-left"]);?>
            <?=Html::a(Yii::t('user', 'на главную'), Yii::$app->params['frontendHomeUrl'], ['tabindex' => '4', 'class'=>"pull-right"]);?>
            <div class="clearfix"></div>
        </p>
</div>