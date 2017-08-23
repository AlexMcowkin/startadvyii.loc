<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\switchinput\SwitchInput;
?>
<div class="language-form">
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="col-md-6">
            <?=$form->field($model, 'name')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('adminka', $model->name), 'required'=>'required', 'aria-required'=>'true'])->hint('<small class="text-default">'.Yii::t('adminka', 'EXAMPLE').'</small><small class="text-info mr10">English</small>');?>
        </div>
        <div class="col-md-1">
            <?=$form->field($model, 'code')->textInput(['maxlength' => true, 'placeholder'=>Yii::t('adminka', $model->code), 'required'=>'required', 'aria-required'=>'true'])->hint('<small class="text-default">'.Yii::t('adminka', 'EXAMPLE').'</small><small class="text-info mr10">en</small>');?>
        </div>
    </div>

    <hr class="darken" />

    <div class="well well-asset-options clearfix mt20">
        <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
            <div class="btn-group" role="group">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-check mr10"></i>'.Yii::t('adminka', 'BTN_INSERT') : '<i class="fa fa-check mr10"></i>'.Yii::t('adminka', 'BTN_UPDATE'), ['class' => 'btn btn-default']);?>
            </div>
        </div>
        <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
            <div class="btn-group" role="group">
                <?= Html::resetButton('<i class="fa fa-refresh mr10"></i>'.Yii::t('adminka', 'BTN_RESET'), ['class' => 'btn btn-default']);?>

                <?= Html::a('<i class="fa fa-arrow-circle-left mr10"></i>'.Yii::t('adminka', 'BTN_BACK'), ['index'], ['class' => 'btn btn-default']);?>
            </div>
        </div>
    </div>
    <?php ActiveForm::end(); ?>
</div>