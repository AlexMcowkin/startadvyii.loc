<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
?>
<?php $this->beginContent('@app/views/layouts/common.php');?>
<?= Breadcrumbs::widget([
    'tag' => 'ol',
    'options' => ['class' => 'breadcrumb breadcrumb-quirk'],
    'homeLink' => [
        'label' => '<i class="fa fa-home mr5"></i>',
        'url' => Url::toRoute('/backend/index'),
        'encode' => false,
        'template' => "<li>{link}</li>",
    ],
    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
]);?>
<hr class="darken" />
<div class="pageheader mb20">
	<h2><i class="fa fa-tags mr10"></i><?= Html::encode($this->title);?></h2>
</div>
<div class="row">
	<div class="col-md-12 col-lg-12 dash-left">
		<?=$content;?>
	</div>
</div>
<?php $this->endContent();?>