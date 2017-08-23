<?php
use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Language;
use common\models\CommondataMeta;

$this->title = Yii::t('adminka', 'TTL_META_COMMONDATA');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;

// get all languages
$_allLanguages = Language::getAllSiteLanguages();
// get used languages for meta
$_allUsedLanguages = CommondataMeta::getAllUsedLanguages($isnew = true);
// remove used language from list
$_allLanguages = array_diff_key($_allLanguages, $_allUsedLanguages);
?>

<?php if($_allLanguages):?>
<div class="panel panel-danger-full">
    <div class="panel-heading">
        <h3 class="panel-title"><?=Yii::t('adminka', 'MSG_LANG_1');?></h3>
    </div>
    <div class="panel-body">
        <p class="nomargin">
            <?=Yii::t('adminka', 'MSG_LANG_2');?>: <strong><?= implode(',',$_allLanguages);?></strong>
            <br />
            <?=Yii::t('adminka', 'MSG_LANG_3');?>: <strong><?=Language::getDefaultLanguageTitle();?></strong>
        </p>
    </div>
</div>
<?php endif;?>

<div class="panel">
    <div class="commondata-meta-index">
        <div class="panel-body">
            <div class="table-responsive">
            <?=GridView::widget([
                'dataProvider' => $dataProvider,
                'tableOptions' => ['class' => 'table table-bordered table-hover table-striped nomargin'],
                'headerRowOptions' => ['class' => 'success'],
                'captionOptions' => ['class' => 'text-center'],
                'showFooter'=>true,
                'showHeader' => true,
                'layout'=>"{pager}\n{summary}\n{items}\n{summary}\n{pager}",
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    [
                     'attribute' => 'lang_id',
                     'header' => Yii::t('adminka', 'GV_LANG'),
                     'format'=>'html',
                     'value' => function($data){
                            $_star = (Language::checkIfDefault($data->lang_id))?'<i class="fa fa-star mr10"></i>':'';
                            return $_star . Language::getLangTitleById($data->lang_id);
                        },
                    ],
                    'meta_title',
                    [
                        'class' => 'yii\grid\ActionColumn',
                        'contentOptions' => ['class' => 'actions-buttons'],
                        'template' => '{update}',
                        'header' => Yii::t('adminka', 'GV_UPDATE'),
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
                        <?=Html::a('<i class="fa fa-plus-circle mr10"></i>'.Yii::t('adminka', 'BTN_INSERT'), ['create'], ['class'=>'btn btn-default']);?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>