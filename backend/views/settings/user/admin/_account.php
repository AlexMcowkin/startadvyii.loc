<?php

/*
 * This file is part of the Dektrium project
 *
 * (c) Dektrium project <http://github.com/dektrium>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

/*
 * @var yii\web\View $this
 * @var dektrium\user\models\User $user
 */

?>

<?php $this->beginContent('@dektrium/user/views/admin/update.php', ['user' => $user]) ?>

<?php $form = ActiveForm::begin([
    'layout' => 'horizontal',
    'enableAjaxValidation'   => true,
    'enableClientValidation' => false,
    'fieldConfig' => [
        'horizontalCssClasses' => [
            'wrapper' => 'col-sm-9',
        ],
    ],
]); ?>

<?= $this->render('_user', ['form' => $form, 'user' => $user]) ?>

<hr class="darken" />

<div class="well well-asset-options clearfix mt20">
    <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
        <div class="btn-group" role="group">
            <?=\yii\helpers\Html::submitButton('<i class="fa fa-check mr10"></i>'.Yii::t('user', 'Update'), ['class' => 'btn btn-default']);?>
        </div>
    </div>
    <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
        <div class="btn-group" role="group">
            <?=\yii\helpers\Html::resetButton('<i class="fa fa-refresh mr10"></i>'.Yii::t('adminka', 'BTN_RESET'), ['class' => 'btn btn-default']);?>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

<?php $this->endContent() ?>
