<?php
use dektrium\user\models\UserSearch;
use yii\data\ActiveDataProvider;
use yii\grid\GridView;
use yii\helpers\Html;
use yii\web\View;
use yii\widgets\Pjax;

$this->title = Yii::t('user', 'Manage users');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;
?>

<?= $this->render('/_alert', ['module' => Yii::$app->getModule('user')]) ?>


<div class="panel">
    <div class="language-index">
        <div class="panel-body">
            <div class="table-responsive">

                <?php Pjax::begin() ?>

                <?= GridView::widget([
                    'dataProvider'  =>  $dataProvider,
                    'filterModel'   =>  $searchModel,
                    'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
                    'headerRowOptions' => ['class' => 'success'],
                    'captionOptions' => ['class' => 'text-center'],
                    'showFooter'=>true,
                    'showHeader' => true,
                    'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
                    'columns' => [
                        'username',
                        'email:email',
                        [
                            'attribute' => 'registration_ip',
                            'value' => function ($model) {
                                return $model->registration_ip == null
                                    ? '<span class="not-set">' . Yii::t('user', '(not set)') . '</span>'
                                    : $model->registration_ip;
                            },
                            'format' => 'html',
                        ],
                        [
                            'attribute' => 'created_at',
                            'value' => function ($model) {
                                if (extension_loaded('intl')) {
                                    return Yii::t('user', '{0, date, MMMM dd, YYYY HH:mm}', [$model->created_at]);
                                } else {
                                    return date('Y-m-d G:i:s', $model->created_at);
                                }
                            },
                        ],
                        [
                            'header' => Yii::t('user', 'Confirmation'),
                            'value' => function ($model) {
                                if ($model->isConfirmed) {
                                    return '<div class="text-center">
                                                <span class="text-success">' . Yii::t('user', 'Confirmed') . '</span>
                                            </div>';
                                } else {
                                    return Html::a(Yii::t('user', 'Confirm'), ['confirm', 'id' => $model->id], [
                                        'class' => 'btn btn-xs btn-success btn-block',
                                        'data-method' => 'post',
                                        'data-confirm' => Yii::t('user', 'Are you sure you want to confirm this user?'),
                                    ]);
                                }
                            },
                            'format' => 'raw',
                            'visible' => Yii::$app->getModule('user')->enableConfirmation,
                        ],
                        [
                            'header' => Yii::t('user', 'Block status'),
                            'value' => function ($model) {
                                if ($model->isBlocked) {
                                    return Html::a(Yii::t('user', 'Unblock'), ['block', 'id' => $model->id], [
                                        'class' => 'btn btn-xs btn-success btn-block',
                                        'data-method' => 'post',
                                        'data-confirm' => Yii::t('user', 'Are you sure you want to unblock this user?'),
                                    ]);
                                } else {
                                    return Html::a(Yii::t('user', 'Block'), ['block', 'id' => $model->id], [
                                        'class' => 'btn btn-xs btn-danger btn-block',
                                        'data-method' => 'post',
                                        'data-confirm' => Yii::t('user', 'Are you sure you want to block this user?'),
                                    ]);
                                }
                            },
                            'format' => 'raw',
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

                <?php Pjax::end() ?>
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