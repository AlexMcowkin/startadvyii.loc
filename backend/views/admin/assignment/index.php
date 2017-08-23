<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

$this->title = Yii::t('rbac-admin', 'Assignments');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;

$columns = [
    ['class' => 'yii\grid\SerialColumn'],
    $usernameField,
];
if (!empty($extraColumns)) {
    $columns = array_merge($columns, $extraColumns);
}
$columns[] = [
    'class' => 'yii\grid\ActionColumn',
    'contentOptions' => ['class' => 'actions-buttons'],
    'header' => Yii::t('adminka', 'GV_VIEW'),
    'template' => '{view}',
    'buttons' =>
    [
        'view' => function ($url,$model) {
            return Html::a('<i class="fa fa-eye fa-lg" ></i>', $url);
        },
    ],
];
?>
<div class="panel">
    <div class="assignment-index">
        <div class="panel-body">
            <div class="table-responsive">
                <?php Pjax::begin(); ?>
                <?=
                GridView::widget([
                    'dataProvider' => $dataProvider,
                    'filterModel' => $searchModel,
                    'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
                    'headerRowOptions' => ['class' => 'success'],
                    'showFooter'=>true,
                    'showHeader' => true,
                    'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
                    'columns' => $columns,
                ]);
                ?>
                <?php Pjax::end(); ?>
            </div>
        </div>
    </div>
</div>