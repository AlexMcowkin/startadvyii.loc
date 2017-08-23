<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use mdm\admin\AnimateAsset;
use yii\web\YiiAsset;

$userName = $model->{$usernameField};
if (!empty($fullnameField)) {
    $userName .= ' (' . ArrayHelper::getValue($model, $fullnameField) . ')';
}
$userName = Html::encode($userName);

$this->title = Yii::t('rbac-admin', 'Assignment') . ' : ' . $userName;

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', 'Assignments'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $userName;

AnimateAsset::register($this);
YiiAsset::register($this);
$opts = Json::htmlEncode([
        'items' => $model->getItems()
    ]);
$this->registerJs("var _opts = {$opts};");
$this->registerJs($this->render('_script.js'));
?>
<div class="panel">
    <div class="assignment-index">
        <div class="panel-body">
            <div class="row">
                <div class="col-sm-5">
                    <input class="form-control search" data-target="avaliable"
                           placeholder="<?= Yii::t('rbac-admin', 'Search for avaliable') ?>">
                    <select multiple size="20" class="form-control list" data-target="avaliable">
                    </select>
                </div>
                <div class="col-sm-2 text-center">
                    <?= Html::a('<i class="fa fa-angle-double-right fa-lg"></i>', ['assign', 'id' => (string)$model->id], [
                        'class' => 'btn btn-success btn-assign',
                        'data-target' => 'avaliable',
                        'title' => Yii::t('rbac-admin', 'Assign')
                    ]) ?><br><br>
                    <?= Html::a('<i class="fa fa-angle-double-left fa-lg"></i>', ['revoke', 'id' => (string)$model->id], [
                        'class' => 'btn btn-danger btn-assign',
                        'data-target' => 'assigned',
                        'title' => Yii::t('rbac-admin', 'Remove')
                    ]) ?>
                </div>
                <div class="col-sm-5">
                    <input class="form-control search" data-target="assigned"
                           placeholder="<?= Yii::t('rbac-admin', 'Search for assigned') ?>">
                    <select multiple size="20" class="form-control list" data-target="assigned">
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>