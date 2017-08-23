<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use unclead\multipleinput\MultipleInput;
?>
<div class="commondata-info-form">
	<?php $form = ActiveForm::begin([
		'id' => 'commondata-info-form',
	    'enableAjaxValidation' => true,
	    'enableClientValidation' => true,
	    'validateOnChange' => false,
	    'validateOnSubmit' => true,
	    'validateOnBlur' => false,
	]);?>
	<div class="row">
		<div class="col-md-12">
			<div class="table-responsive">
			<?= $form->field($model, 'commoninfo')->widget(MultipleInput::className(), [
		        'max' => 99,
		        'min' => 0,
        		'allowEmptyList' => false,
			    'attributeOptions' => [
			        'enableAjaxValidation'      => true,
			        'validateOnChange'          => true,
			        'validateOnSubmit'          => true,
			        'validateOnBlur'            => false,
			    ],
        		'addButtonPosition' => MultipleInput::POS_HEADER,
        		'addButtonOptions' => [
            		'class' => 'btn btn-info',
            		'label' => '<i class="fa fa-plus"></i>'
        		],
		        'removeButtonOptions' => [
		        	'class' => 'btn btn-danger',
		            'label' => '<i class="fa fa-trash"></i>'
		        ],
			    'columns' => [
			        [
			        	'headerOptions' => ['class' => 'success text-center th-vert-align'],
			            'name'  => 'attribute',
			            'type'  => 'textInput',
			            'title' => Yii::t('adminka', 'GV_ATTRIBUTE'),
			            'enableError' => true,
			        ],
			        [
			        	'headerOptions' => ['class' => 'success text-center th-vert-align'],
			            'name'  => 'text',
			            'type'  => 'textInput',
			            'title' => Yii::t('adminka', 'GV_VALUE'),
			            'enableError' => true,
			        ],
				]
			 ])->label(false);
			?>
			</div>
		</div>
	</div>

    <hr class="darken" />

    <div class="well well-asset-options clearfix mt20">
        <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
            <div class="btn-group" role="group">
                <?= Html::submitButton($model->isNewRecord ? '<i class="fa fa-check mr10"></i>'.Yii::t('adminka', 'BTN_UPDATE') : '<i class="fa fa-check mr10"></i>'.Yii::t('adminka', 'BTN_INSERT'), ['class' => 'btn btn-default']);?>
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