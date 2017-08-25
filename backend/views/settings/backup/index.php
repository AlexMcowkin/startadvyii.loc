<?php
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

$this->title = Yii::t('adminka', 'TTL_BACKUP');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="backup-default-index">
	
	<?php if(Yii::$app->session->hasFlash('success')):?>
	<div class="alert alert-success">
		<?=Yii::$app->session->getFlash('success');?>
	</div>
	<?php endif;?>

	<div class="panel">
	    <div class="backup-index">
	        <div class="panel-body">
				<div class="table-responsive">
				<?= GridView::widget([
						'id' => 'install-grid',
						'dataProvider' => $dataProvider,
		                'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
		                'headerRowOptions' => ['class' => 'success'],
		                'showFooter'=>true,
		                'showHeader' => true,
		                'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
						'columns' => [
								[
				                    'attribute' => 'name',
		                    		'format'=>'text',
									'header' => Yii::t('adminka', 'GV_NAME'),
								],
								[
				                    'attribute' => 'size',
		                    		'format'=>'size',
									'header' => Yii::t('adminka', 'GV_SIZE'),
								],
								[
				                    'attribute' => 'create_time',
		                    		'format' => 'datetime',
									'header' => Yii::t('adminka', 'GV_TIME'),
								],
								// [
								// 	'class' => 'yii\grid\ActionColumn',
								// 	'template' => '{restore}',
								// 	'header' => Yii::t('adminka', 'GV_RESTORE'),
								// ],
			                    // [
			                    //     'class' => 'yii\grid\ActionColumn',
			                    //     'contentOptions' => ['class' => 'actions-buttons'],
			                    //     'template' => '{restore}',
			                    		// 'header' => 'restore',
			                    //     'buttons' =>
			                    //     [
			                    //         'restore' => function ($url,$model) {
			                    //             return Html::a('<i class="fa fa-refresh fa-lg" style="margin-right: 30px; margin-left: 20px;"></i>', $url);
			                    //         },
			                    //     ],
			                    // ],
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
									'urlCreator' => function ($action, $model, $key, $index) {
										$url = Url::toRoute([ 
											'default/' .$action,
											'file' => $model ['name'] 
										]);
										return $url;
									}
			                    ],
						],
				]);?>
				</div>
			    
			    <hr class="darken" />

			    <div class="well well-asset-options clearfix mt20">
			        <div class="btn-toolbar btn-toolbar-media-manager pull-right" role="toolbar">
			            <div class="btn-group" role="group">
							<?=Html::a('<i class="fa fa-download mr10"></i> '.Yii::t('adminka', 'BTN_CREATE_BACKUP'), ['/backup/default/create'], ['class'=>'btn btn-default']);?>
			                <?= Html::a('<i class="fa fa-upload mr10"></i>'.Yii::t('adminka', 'BTN_UPLOAD_BACKUP'), ['/backup/default/upload'], ['class' => 'btn btn-default']);?>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</div>
</div>