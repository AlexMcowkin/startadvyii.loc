<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = Yii::t('hippotasker', 'Новый пароль');
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
?>
<div class="panel-heading">
    <h1><?= Html::encode($this->title) ?></h1>
</div>
<div class="panel-body">
    <?php $form = ActiveForm::begin([
        'id'                     => 'password-recovery-form',
        'enableAjaxValidation'   => true,
        'enableClientValidation' => false,
    ]) ?>

        <?= $form->field($model, 'password', ['inputOptions' => [
                'autofocus' => 'autofocus',
                'class' => 'form-control',
                'tabindex' => '1',
                'placeholder'=>'password'
            ],
            'template' => '<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>{input}</div>{error}{hint}',
            ])->label(false);
        ?>
   
        <div class="form-group">
            <?= Html::submitButton(Yii::t('user', 'ОБНОВИТЬ'), ['class' => 'btn btn-success btn-quirk btn-block', 'tabindex' => '2']);?>
        </div>
    <?php ActiveForm::end();?>
</div>