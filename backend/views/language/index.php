<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('adminka', 'TTL_LANGS');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;
?>

<?php if(Yii::$app->session->hasFlash('errorDelete')):?>
<div class="alert alert-danger">
    <?=Yii::$app->session->getFlash('errorDelete');?>
</div>
<?php endif;?>

<?php if(Yii::$app->session->hasFlash('successDelete')):?>
<div class="alert alert-success">
    <?=Yii::$app->session->getFlash('successDelete');?>
</div>
<?php endif;?>

<div class="panel">
    <div class="language-index">
        <div class="panel-body">
            <div class="table-responsive">
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
                'headerRowOptions' => ['class' => 'success'],
                'captionOptions' => ['class' => 'text-center'],
                'showFooter'=>true,
                'showHeader' => true,
                'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
                'columns' => [
                    'name',
                    'code',
                    [
                     'attribute' => 'name',
                     'header' => Yii::t('adminka', 'GV_FLAG'),
                     'format'=>'html',
                     'value' => function($data) { return '<img src="/images/flags/'.$data->code.'.png" alt="">'; },
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{update}',
                        'header' => Yii::t('adminka', 'GV_UPDATE'),
                        'headerOptions' => ['width' => '80'],
                        'buttons' =>
                        [
                            'update' => function ($url,$model) {
                                return Html::a('<i class="fa fa-pencil-square fa-lg" style="margin-right: 30px; margin-left: 20px;"></i>', $url);
                            },
                        ],
                    ],
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{delete}',
                        'header' => Yii::t('adminka', 'GV_DELETE'),
                        'headerOptions' => ['width' => '80'],
                        'buttons' =>
                        [
                            'delete' => function ($url,$model) {
                                return Html::a('<i class="fa fa-trash fa-lg" ></i>', $url, ['data-method'=>'post', 'class'=>'deleterecord', 'data-confirm' => Yii::t('adminka', 'GV_DELETE_2'),]);
                            },
                        ],
                    ],
                ],
            ]); ?>
            </div>

            <hr class="darken" />

            <div class="well well-asset-options clearfix mt20">
                <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
                    <div class="btn-group" role="group">
                        <?=Html::a('<i class="fa fa-plus-circle mr10"></i> '.Yii::t('adminka', 'BTN_INSERT'), ['create'], ['class'=>'btn btn-default']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>