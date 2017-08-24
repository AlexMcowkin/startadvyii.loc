<?php
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Nav;
use yii\helpers\Html;

$this->title = Yii::t('user', 'Create a user account');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('user', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="alert alert-info">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p><?= Yii::t('user', 'Credentials will be sent to the user by email') ?>.</p>
                    <p><?= Yii::t('user', 'A password will be generated automatically if not provided') ?>.</p>
                </div>
                <?php $form = ActiveForm::begin([
                    'options' => ['class' => 'form-horizontal'],
                    'layout' => 'horizontal',
                    'enableAjaxValidation'   => true,
                    'enableClientValidation' => false,
                    'fieldConfig' => [
                        'horizontalCssClasses' => [
                            'wrapper' => 'col-sm-5',
                        ],
                    ],
                ]); ?>

                <?= $this->render('_user', ['form' => $form, 'user' => $user]) ?>

                <hr class="darken" />

                <div class="well well-asset-options clearfix mt20">
                    <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
                        <div class="btn-group" role="group">
                            <?=  \yii\helpers\Html::submitButton('<i class="fa fa-check mr10"></i>'.Yii::t('user', 'Save'), ['class' => 'btn btn-default']);?>
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
