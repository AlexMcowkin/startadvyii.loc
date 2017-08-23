<?php
use yii\helpers\Html;
use yii\helpers\Json;
use mdm\admin\AnimateAsset;
use yii\web\YiiAsset;

$this->title = Yii::t('rbac-admin', 'Routes');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;

AnimateAsset::register($this);
YiiAsset::register($this);
$opts = Json::htmlEncode([
    'routes' => $routes
]);
$this->registerJs("var _opts = {$opts};");
$this->registerJs($this->render('_script.js'));
?>
<div class="panel">
    <div class="assignment-index">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="input-group">
                        <input id="inp-route" type="text" class="form-control"
                               placeholder="<?= Yii::t('rbac-admin', 'New route(s)') ?>">
                        <span class="input-group-btn">
                            <?= Html::a('<i class="fa fa-plus fa-lg"></i>', ['create'], [
                                'class' => 'btn btn-success',
                                'id' => 'btn-new'
                            ]) ?>
                        </span>
                    </div>
                </div>
            </div>
            <div class="row"><p>&nbsp;</p></div>
            <div class="row">
                <div class="col-sm-5">
                    <div class="input-group">
                        <input class="form-control search" data-target="avaliable"
                               placeholder="<?= Yii::t('rbac-admin', 'Search for avaliable') ?>">
                        <span class="input-group-btn">
                            <?= Html::a('<i class="fa fa-refresh"></i>', ['refresh'], [
                                'class' => 'btn btn-default',
                                'id' => 'btn-refresh'
                            ]) ?>
                        </span>
                    </div>
                    <select multiple size="20" class="form-control list" data-target="avaliable"></select>
                </div>
                <div class="col-sm-2 text-center">
                    <?= Html::a('<i class="fa fa-angle-double-right fa-lg"></i>', ['assign'], [
                        'class' => 'btn btn-success btn-assign',
                        'data-target' => 'avaliable',
                        'title' => Yii::t('rbac-admin', 'Assign')
                    ]) ?><br><br>
                    <?= Html::a('<i class="fa fa-angle-double-left fa-lg"></i>', ['remove'], [
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
