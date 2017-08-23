<?php
use dektrium\user\widgets\Connect;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Регистрация');
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
?>
<div class="panel-heading">
    <h1><?=Html::encode($this->title);?></h1>
</div>
<div class="panel-body">
    <?=$this->render('/_alert', ['module' => Yii::$app->getModule('user')]);?>
    <?php $form = ActiveForm::begin([
        'id'                     => 'registration-form',
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
    ]);?>

        <?= $form->field($model, 'username', ['inputOptions' => [
                'autofocus' => 'autofocus',
                'class' => 'form-control',
                'tabindex' => '1',
                'placeholder'=>Yii::t('user', 'логин')
            ],
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-user"></i></span>{input}</div>{error}{hint}',
            ])->label(false);?>

        <?= $form->field($model, 'email', ['inputOptions' => [
                'autofocus' => 'autofocus',
                'class' => 'form-control',
                'tabindex' => '2',
                'placeholder'=>'email',
                'type'=>'email'
            ],
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>{error}{hint}',
            ])->label(false);?>

        <?php if ($module->enableGeneratingPassword == false): ?>
            <?= $form->field($model, 'password', ['inputOptions' => [
                    'class' => 'form-control',
                    'tabindex' => '3',
                    'placeholder'=>Yii::t('user', 'пароль')
                ],
                'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-lock"></i></span>{input}</div>{error}{hint}',
                ])->passwordInput()->label(false);
            ?>
        <?php endif ?>

        <div class="form-group">
            <?= Html::submitButton(Yii::t('user', 'ЗАРЕГИСТРИРОВАТЬСЯ'), ['class' => 'btn btn-success btn-quirk btn-block', 'tabindex' => '4']);?>
        </div>
    <?php ActiveForm::end();?>
    <div class="or"><?=Yii::t('user', 'или');?></div>
    <p class="text-center"><?=Html::a(Yii::t('user', 'авторизация'), ['/login']);?></p>
</div>