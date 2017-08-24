<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = Yii::t('adminka', 'TTL_MIGRATION');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;

$array = ['CASCADE' => 'CASCADE', 'NO ACTION' => 'NO ACTION', 'RESTRICT' => 'RESTRICT', 'SET NULL' => 'SET NULL'];
?>

<div class="panel">
    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id' => 'form-submit',]); ?>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'mysql')->dropDownList(['0' => 'No', '1' => 'Yes'], ['id'=>'select2-ns']) ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'mysql_options') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'mssql')->dropDownList(['0' => 'No', '1' => 'Yes'], ['id'=>'select2-ns']) ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'mssql_options') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'pgsql')->dropDownList(['0' => 'No', '1' => 'Yes'], ['id'=>'select2-ns']) ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'pgsql_options') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'sqlite')->dropDownList(['0' => 'No', '1' => 'Yes'], ['id'=>'select2-ns']) ?>
            </div>
            <div class="col-md-8">
                <?= $form->field($model, 'sqlite_options') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <?= $form->field($model, 'databaseTables')->dropDownList(['00' => ' '] + $tables)->label('Choose Tables') ?>
            </div>
            <div class="col-md-2">
                <?= Html::button('Add All Tables', ['class' => 'btn btn-success mt20', 'id' => 'button-add-all']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-10">
                <?= $form->field($model, 'tables')
                    ->label('Tables to Process')
                    ->hint('Change to textarea and back to easily view tables') ?>
            </div>
            <div class="col-md-2">
                <?= Html::button('Change View', ['class' => 'btn btn-success mt20', 'id' => 'button-tables-convert']) ?>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <?= $form->field($model, 'ForeignKeyOnUpdate')->dropDownList($array, ['id'=>'select2-ns'])->hint('') ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'ForeignKeyOnDelete')->dropDownList($array, ['id'=>'select2-ns'])->hint('') ?>
            </div>
            <div class="col-md-4">
                <?= $form->field($model, 'addTableInserts')->dropDownList(['0' => 'No', '1' => 'Yes'], ['id'=>'select2-ns'])->hint('Add table data to migration') ?>
            </div>
        </div>
        
        <hr class="darken" />

        <div class="well well-asset-options clearfix mt20">
            <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
                <div class="btn-group" role="group">
                    <?= Html::submitButton('<i class="fa fa-check mr10"></i>'.Yii::t('adminka', 'BTN_CREATE'), ['class' => 'btn btn-default', 'name' => 'button-submit', 'id' => 'button-submit']);?>
                </div>
            </div>
        </div>

        <?php ActiveForm::end() ?>
    </div>
</div>

<?php if (class_exists('c006\\spinner\\SubmitSpinner')) : ?>
    <?= c006\spinner\SubmitSpinner::widget(['form_id' => $form->id]);?>
<?php endif ?>

<?php if ($output) : ?>
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="select2-ns">Up()</label>
                        <textarea id="code-output" class="output-text form-control" rows="15"><?= $output ?></textarea>
                        <p class="help-block help-block-error">Select code and paste</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label class="control-label" for="select2-ns">Down()</label>
                        <textarea id="code-output-drop" class="output-text form-control" rows="15"><?= $output_drop ?></textarea>
                        <p class="help-block help-block-error">Select code and paste</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
