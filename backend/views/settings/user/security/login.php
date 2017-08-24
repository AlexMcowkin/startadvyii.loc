<?php
use dektrium\user\widgets\Connect;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Авторизация');
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
?>
<div class="panel-heading">
    <h1><?=Html::encode($this->title);?></h1>
</div>
<div class="panel-body">
    <?=$this->render('/_alert', ['module' => Yii::$app->getModule('user')]);?>
    <?php $form = ActiveForm::begin([
        'id'                     => 'login-form',
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
        'validateOnBlur'         => false,
        'validateOnType'         => false,
        'validateOnChange'       => false,
    ]);?>
        <?= $form->field($model, 'login', ['inputOptions' => [
                'autofocus' => 'autofocus',
                'class' => 'form-control',
                'tabindex' => '1',
                'placeholder'=>'email'
            ],
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>{error}{hint}',
            ])->label(false);?>

        <?= $form->field($model, 'password', ['inputOptions' => [
                'class' => 'form-control',
                'tabindex' => '2',
                'placeholder'=>Yii::t('user', 'пароль')
            ],
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>{input}</div>{error}{hint}',
            ])->passwordInput()->label(false);
        ?>
    
        <div class="row">
            <div class="col-md-6">
            <?= $form->field($model, 'rememberMe')->checkbox(['tabindex' => '3', 'label'=> '<span>'.Yii::t('user', 'запомнить').'</span>', 'labelOptions' => ['class'=>'ckbox']], TRUE);?>
            </div>
            <div class="col-md-6">
                <?php if($module->enablePasswordRecovery):?>
                    <?=Html::a(Yii::t('user', 'забыли пароль?'), ['/forgot'], ['tabindex' => '4', 'class'=>'forgot']);?>
                <?php endif;?>
            </div>
        </div>
  
        <div class="form-group">
            <?= Html::submitButton(Yii::t('user', 'ВОЙТИ'), ['class' => 'btn btn-success btn-quirk btn-block', 'tabindex' => '5']);?>
        </div>
    <?php ActiveForm::end();?>

    <?php if ($module->enableRegistration):?>
        <div class="or"><?=Yii::t('user', 'или');?></div>
        <div class="form-group">
            <?=Html::a(Yii::t('user', 'РЕГИСТРАЦИЯ'), ['/register'], ['class' => 'btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign']);?>
        </div>
    <?php else: ?>
        <div class="or"><?=Yii::t('user', 'или');?></div>
        <p class="text-center"><?=Html::a(Yii::t('user', 'на главную'), Yii::$app->params['frontendHomeUrl'], ['tabindex' => '3']);?></p>
    <?php endif;?>
    <?= Connect::widget([
        'baseAuthUrl' => ['/user/security/auth'],
    ]) ?>
</div>