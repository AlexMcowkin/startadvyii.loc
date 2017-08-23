<?php
use yii\helpers\Html;

$this->title = Yii::t('adminka', 'TTL_ADD_LANGS');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('adminka', 'BC_LANGS'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
	<div class="language-create">
		<div class="panel-body">
		<?= $this->render('_form', ['model' => $model]);?>
		</div>
	</div>
</div>