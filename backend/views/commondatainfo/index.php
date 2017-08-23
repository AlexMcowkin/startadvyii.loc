<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('adminka', 'TTL_COMMONDATA');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
    <div class="commondata-info-index">
        <div class="panel-body">
            <div class="table-responsive">
            <?=GridView::widget([
                'dataProvider' => $dataProvider,
                'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
                'headerRowOptions' => ['class' => 'success'],
                'showFooter'=>true,
                'showHeader' => true,
                'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
                'columns' => [
                    'attribute',
                    'text',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{delete}',
                        'header' => Yii::t('adminka', 'GV_DELETE'),
                        'buttons' =>
                        [
                            'delete' => function ($url,$model) {
                                return Html::a('<i class="fa fa-trash fa-lg" ></i>', $url, ['data-method'=>'post', 'class'=>'deleterecord', 'data-confirm' => Yii::t('adminka', 'GV_DELETE_2'),]);
                            },
                        ],
                    ],
                ],
            ]);?>
            </div>

            <hr class="darken" />

            <div class="well well-asset-options clearfix mt20">
                <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
                    <div class="btn-group" role="group">
                        <?=Html::a(Yii::t('adminka', 'BTN_CREATE_UPDATE'), ['createupdate'], ['class'=>'btn btn-default']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>