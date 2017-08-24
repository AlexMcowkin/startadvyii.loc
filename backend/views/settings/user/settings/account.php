<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('user', 'Account settings');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="row profile-wrapper">
    <div class="col-xs-12 col-md-3 col-lg-2 profile-left">
        <?= $this->render('_menu') ?>
    </div>
    <div class="col-md-9 col-lg-10 profile-right">
        <div class="profile-right-body">
            <div class="panel-heading">
                <h4 class="panel-title"><?= Html::encode($this->title) ?></h4>
            </div>
            <div class="panel-body">
            <hr>
                <?php $form = ActiveForm::begin([
                    'id'          => 'account-form',
                    'options'     => ['class' => 'form-horizontal'],
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                ]); ?>

                <?=$form->field($model, 'username', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-user-plus"></i></span>{input}</div>',
                ])->textInput(['placeholder'=>Yii::t('user', 'Username')]);?>

                <?=$form->field($model, 'email', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>',
                ])->textInput(['placeholder'=>Yii::t('user', 'Email'), 'type'=>'email']);?>

                <?=$form->field($model, 'current_password', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-key"></i></span>{input}</div>{error}{hint}',
                ])->passwordInput(['placeholder'=>Yii::t('user', 'Current password')]);?>

                <?=$form->field($model, 'new_password', [
                    'template' => '<div class="input-group mb20">{input}<span class="input-group-addon"><i class="fa fa-key"></i></span></div>{error}{hint}',
                ])->passwordInput(['placeholder'=>Yii::t('user', 'New password')]);?>

                <hr class="darken" />

                <div class="well well-asset-options clearfix mt20">
                    <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
                        <div class="btn-group" role="group">
                            <?=  \yii\helpers\Html::submitButton('<i class="fa fa-check mr10"></i>'.Yii::t('user', 'Update'), ['class' => 'btn btn-default']);?>
                        </div>
                    </div>
                    <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
                        <div class="btn-group" role="group">
                            <?=  \yii\helpers\Html::resetButton('<i class="fa fa-refresh mr10"></i>'.Yii::t('adminka', 'BTN_RESET'), ['class' => 'btn btn-default']);?>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>