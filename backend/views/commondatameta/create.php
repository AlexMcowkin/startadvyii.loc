<?php
use yii\helpers\Html;

$this->title = Yii::t('adminka', 'TTL_ADD_META_COMMONDATA');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('adminka', 'BC_META_COMMONDATA'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
	<div class="commondata-meta-create">
		<div class="panel-body">
		<?= $this->render('_form', ['model' => $model]);?>
		</div>
	</div>
</div>