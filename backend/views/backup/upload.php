<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\file\FileInput;

$this->title = Yii::t('adminka', 'TTL_ADD_BACKUP');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('adminka', 'BC_BACKUP'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
	<div class="backup-create">
		<div class="panel-body">
			<div class="backup-upload-form">
			    <?php $form = ActiveForm::begin([
			        'id' => 'basicForm',
			        'options' => ['enctype' => 'multipart/form-data', /*'novalidate'=>'novalidate',*/],
			    ]);?>

                <?=$form->field($model, 'upload_file', [
                    'template' => '<div class="input-group mb20"><span class="input-group-addon"><i class="fa fa-database"></i></span>{input}</div>{hint}',
                ])->widget(FileInput::classname(), [
                    'options' => ['accept' => 'text/x-sql, text/sql', 'multiple' => false],
                    'pluginOptions'=>[
                        'showPreview' => false,
                        'allowedFileExtensions'=>['sql'],
                        'removeIcon' => '<i class="fa fa-trash fa-lg"></i>',
                        'removeClass' => 'btn btn-danger',
                        'browseIcon' => '<i class="fa fa-folder-open fa-lg"></i>',
                        'browseClass' => 'btn btn-default',
                        'showUpload' => false,
                        'uploadIcon' => '<i class="fa fa-download fa-lg"></i>',
                        'uploadClass' => 'btn btn-primary',
                        'layoutTemplates' => ['icon'=>''],
                    ],
                ])->hint('<small class="text-primary">'.Yii::t('adminka', 'HINT_FILE_SQL').'</small>');?>

			    <hr class="darken" />

			    <div class="well well-asset-options clearfix mt20">
			        <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
			            <div class="btn-group" role="group">
			                <?= Html::submitButton('<i class="fa fa-check mr10"></i>'.Yii::t('adminka', 'BTN_UPLOAD'), ['class' => 'btn btn-default']);?>
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
		</div>
	</div>
</div>