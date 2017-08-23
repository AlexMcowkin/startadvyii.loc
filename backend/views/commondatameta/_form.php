<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Language;
use common\models\CommondataMeta;

// get all languages
$_allLanguages = Language::getAllSiteLanguages();
// get used languages for meta
$_allUsedLanguages = CommondataMeta::getAllUsedLanguages($isnew = true, $curid = $model->lang_id);
// remove used language from list
$_allLanguages = array_diff_key($_allLanguages, $_allUsedLanguages);
?>
<div class="commondata-meta-form">
    <?php $form = ActiveForm::begin(); ?>
        <div class="row">
            <div class="col-md-10">
                <?=$form->field($model, 'meta_title')->textInput(['maxlength' => true, 'required'=>'required', 'aria-required'=>'true']);?>
            </div>
            <div class="col-md-2">
                <?=$form->field($model, 'lang_id')->dropDownList($_allLanguages, ['prompt'=>Yii::t('adminka', 'CHOOSE_LANGUAGE'), 'id'=>'select5', 'required'=>'required', 'aria-required'=>'true'])->label('&nbsp;');?>
            </div>
        </div>
        <?=$form->field($model, 'meta_description')->textInput(['maxlength' => true, 'required'=>'required', 'aria-required'=>'true']);?>
        <?=$form->field($model, 'meta_keywords')->textInput(['maxlength' => true, 'required'=>'required', 'aria-required'=>'true']);?>
        <?=$form->field($model, 'slogan')->textarea(['rows' => 6]);?>
        
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