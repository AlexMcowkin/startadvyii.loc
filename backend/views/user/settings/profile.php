<?php
use yii\helpers\Html;
use kartik\file\FileInput;

$this->title = Yii::t('user', 'Profile settings');

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
                <?php $form = \yii\widgets\ActiveForm::begin([
                    'id' => 'profile-form',
                    'options' => ['class' => 'form-horizontal','enctype'=>'multipart/form-data'],
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'validateOnBlur'         => false,
                ]); ?>

                <?=$form->field($model, 'name', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-user"></i></span>{input}</div>',
                ]);?>
                
                <?=$form->field($model, 'public_email', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>',
                ]);?>

                <?=$form->field($model, 'website', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-at"></i></span>{input}</div>',
                ]);?>   

                <?=$form->field($model, 'skype', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-skype"></i></span>{input}</div>',
                ]);?>

                <?=$form->field($model, 'phone', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-phone"></i></span>{input}</div>',
                ]);?>

                <?=$form->field($model, 'avatar', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-picture-o"></i></span>{input}</div>',
                ])->widget(FileInput::classname(), [
                    'options' => ['accept' => 'image/*', 'multiple' => false],
                    'pluginOptions'=>[
                        'showPreview' => false,
                        'allowedFileExtensions'=>['jpg', 'png'],
                        'removeIcon' => '<i class="fa fa-trash fa-lg"></i>',
                        'removeClass' => 'btn btn-danger',
                        'browseIcon' => '<i class="fa fa-folder-open fa-lg"></i>',
                        'browseClass' => 'btn btn-default',
                        'showUpload' => false,
                        'uploadIcon' => '<i class="fa fa-download fa-lg"></i>',
                        'uploadClass' => 'btn btn-primary',
                        'layoutTemplates' => ['icon'=>''],
                    ],
                ]);?>

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
                <?php \yii\widgets\ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>