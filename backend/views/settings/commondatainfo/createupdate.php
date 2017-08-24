<?php
use yii\helpers\Html;

$this->title = Yii::t('adminka', 'TTL_ADD_CREATE');

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('adminka', 'BC_COMMONDATA'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="panel">
	<div class="commondata-info-create">
	    <div class="panel-body">
    		<?=$this->render('_form', ['model' => $model, 'errors' => $errors]);?>
    	</div>
	</div>
</div>