<?php
use yii\helpers\Html;

$context = $this->context;
$labels = $context->labels();

$this->title = Yii::t('rbac-admin', 'Create ' . $labels['Item']);

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('rbac-admin', $labels['Items']), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
	<div class="auth-item-create">
	    <div class="panel-body">
	    	<?=$this->render('_form', ['model' => $model]);?>
	    </div>
	</div>
</div>
