<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Json;
use mdm\admin\AnimateAsset;
use yii\web\YiiAsset;

$context = $this->context;
$labels = $context->labels();
$this->title = $model->name;

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', $labels['Items']), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

AnimateAsset::register($this);
YiiAsset::register($this);
$opts = Json::htmlEncode([
    'items' => $model->getItems()
]);
$this->registerJs("var _opts = {$opts};");
$this->registerJs($this->render('_script.js'));
?>
<div class="auth-item-view">

    <div class="well well-asset-options clearfix mt20">
        <div class="btn-toolbar btn-toolbar-media-manager pull-left" role="toolbar">
            <div class="btn-group" role="group">
                <?=Html::a('<i class="fa fa-check"></i>'.Yii::t('rbac-admin', 'Update'), ['update', 'id' => $model->name], ['class' => 'btn btn-default']);?>
            </div>
        </div>
        <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
            <div class="btn-group" role="group">
                <?=Html::a('<i class="fa fa-arrow-circle-left"></i>'.Yii::t('rbac-admin', 'Back'), ['index'], ['class' => 'btn btn-default']);?>
                <?=Html::a('<i class="fa fa-trash"></i>'.Yii::t('rbac-admin', 'Delete'), ['delete', 'id' => $model->name], [
                    'class' => 'btn btn-danger',
                    'data-confirm' => Yii::t('rbac-admin', 'Are you sure to delete this item?'),
                    'data-method' => 'post',
                ]);?>
            </div>
        </div>
    </div>
    <hr class="darken" />

    <div class="row">
        <div class="col-sm-12">
            <?=
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'name',
                    'description:ntext',
                    'ruleName',
                    'data:ntext',
                ],
                'template' => '<tr><th style="width:25%">{label}</th><td>{value}</td></tr>'
            ]);
            ?>
        </div>
    </div>
    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-5">
                    <input class="form-control search" data-target="avaliable"
                           placeholder="<?= Yii::t('rbac-admin', 'Search for avaliable') ?>">
                    <select multiple size="20" class="form-control list" data-target="avaliable"></select>
                </div>
                <div class="col-sm-2 text-center">
                    <?= Html::a('&gt;&gt;', ['assign', 'id' => $model->name], [
                        'class' => 'btn btn-success btn-assign',
                        'data-target' => 'avaliable',
                        'title' => Yii::t('rbac-admin', 'Assign')
                    ]) ?><br><br>
                    <?= Html::a('&lt;&lt;', ['remove', 'id' => $model->name], [
                        'class' => 'btn btn-danger btn-assign',
                        'data-target' => 'assigned',
                        'title' => Yii::t('rbac-admin', 'Remove')
                    ]) ?>
                </div>
                <div class="col-sm-5">
                    <input class="form-control search" data-target="assigned"
                           placeholder="<?= Yii::t('rbac-admin', 'Search for assigned') ?>">
                    <select multiple size="20" class="form-control list" data-target="assigned"></select>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
