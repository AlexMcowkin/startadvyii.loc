<?php
use yii\helpers\Html;
use yii\grid\GridView;

$this->title = Yii::t('adminka', 'TTL_CLEAR_CACHE');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = $this->title;
?>
<?php if(Yii::$app->session->hasFlash('errorDelete')):?>
<div class="alert alert-danger">
    <?=Yii::$app->session->getFlash('errorDelete');?>
</div>
<?php endif;?>
<div class="panel">
    <div class="clearcache-index">
        <div class="panel-body">
			<?php if(Yii::$app->session->hasFlash('successDelete')):?>
			<div class="alert alert-success">
			    <?=Yii::$app->session->getFlash('successDelete');?>
			</div>
			<?php endif;?>
        </div>
    </div>
</div>