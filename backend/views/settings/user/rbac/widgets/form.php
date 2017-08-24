<?php
use dektrium\rbac\models\Assignment;
use kartik\select2\Select2;
use yii\bootstrap\Alert;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>

<?php if ($model->updated): ?>

<?= Alert::widget([
    'options' => [
        'class' => 'alert-success'
    ],
    'body' => Yii::t('adminka/models', 'ALERT_ASSIGNMENTS_UPDATED'),
]) ?>

<?php endif ?>

<?php $form = ActiveForm::begin([
    'enableClientValidation' => false,
    'enableAjaxValidation'   => false,
]) ?>

<?= Html::activeHiddenInput($model, 'user_id') ?>

<?= $form->field($model, 'items')->widget(Select2::className(), [
    'data' => $model->getAvailableItems(),
    'options' => [
        'id' => 'items',
        'multiple' => true,
        'placeholder' => Yii::t('adminka/models', 'SELECT_ASSIGNMENTS'),
    ],
])->label(false); ?>

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

<?php ActiveForm::end() ?>

