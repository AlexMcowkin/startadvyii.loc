<?php
use yii\helpers\Html;
use yii\grid\GridView;
use mdm\admin\components\RouteRule;

$context = $this->context;
$labels = $context->labels();
$this->title = Yii::t('rbac-admin', $labels['Items']);

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;

$rules = array_keys(Yii::$app->getAuthManager()->getRules());
$rules = array_combine($rules, $rules);
unset($rules[RouteRule::RULE_NAME]);
?>
<div class="panel">
    <div class="role-index">
        <div class="panel-body">
            <div class="table-responsive">
            <?=
            GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
                'headerRowOptions' => ['class' => 'success'],
                'showFooter'=>true,
                'showHeader' => true,
                'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                        'attribute' => 'name',
                        'label' => Yii::t('rbac-admin', 'Name'),
                    ],
                    [
                        'attribute' => 'ruleName',
                        'label' => Yii::t('rbac-admin', 'Rule Name'),
                        'filter' => $rules
                    ],
                    [
                        'attribute' => 'description',
                        'label' => Yii::t('rbac-admin', 'Description'),
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{view}',
                        'header' => Yii::t('adminka', 'GV_VIEW'),
                        'buttons' =>
                        [
                            'view' => function ($url,$model) {
                                return Html::a('<i class="fa fa-eye fa-lg"></i>', $url);
                            },
                        ],
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{update}',
                        'header' => Yii::t('adminka', 'GV_UPDATE'),
                        'buttons' =>
                        [
                            'update' => function ($url,$model) {
                                return Html::a('<i class="fa fa-pencil-square fa-lg"></i>', $url);
                            },
                        ],
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{delete}',
                        'header' => Yii::t('adminka', 'GV_DELETE'),
                        'buttons' =>
                        [
                            'delete' => function ($url,$model) {
                                return Html::a('<i class="fa fa-trash fa-lg" ></i>', $url, ['data-method'=>'post', 'class'=>'deleterecord', 'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this record?'),]);
                            },
                        ],
                    ],
                ],
            ])
            ?>
            </div>
            <hr class="darken" />

            <div class="well well-asset-options clearfix mt20">
                <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
                    <div class="btn-group" role="group">
                        <?=Html::a('<i class="fa fa-plus-circle mr10"></i>'.Yii::t('rbac-admin', 'Create ' . $labels['Item']), ['create'], ['class'=>'btn btn-default']);?>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>