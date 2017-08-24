<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mdm\admin\components\RouteRule;
use mdm\admin\AutocompleteAsset;
use yii\helpers\Json;

$context = $this->context;
$labels = $context->labels();
$rules = Yii::$app->getAuthManager()->getRules();
unset($rules[RouteRule::RULE_NAME]);
$source = Json::htmlEncode(array_keys($rules));

$js = <<<JS
    $('#rule_name').autocomplete({
        source: $source,
    });
JS;
AutocompleteAsset::register($this);
$this->registerJs($js);
?>

<div class="auth-item-form">
    <?php $form = ActiveForm::begin([
        'id' => 'item-form',
    ]);?>
    <div class="row">
        <div class="col-sm-6">
            <?=$form->field($model, 'name')->textInput(['maxlength' => 64]);?>
        </div>
        <div class="col-sm-6">
            <?=$form->field($model, 'description')->textarea(['rows' => 2]);?>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <?= $form->field($model, 'ruleName')->textInput(['id' => 'rule_name']) ?>
        </div>
        <div class="col-sm-6">
            <?= $form->field($model, 'data')->textarea(['rows' => 6]) ?>
        </div>
    </div>

    <hr class="darken" />

    <div class="well well-asset-options clearfix mt20">
        <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
            <div class="btn-group" role="group">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-check mr10"></i>'.Yii::t('rbac-admin', 'Create') : '<i class="fa fa-check mr10"></i>'.Yii::t('rbac-admin', 'Update'), ['class' => 'btn btn-default', 'name' => 'submit-button']);?>
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
