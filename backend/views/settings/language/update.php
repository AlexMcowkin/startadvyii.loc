<?php
use yii\helpers\Html;

$this->title = Yii::t('adminka', 'TTL_UPD_LANGS', [
    'modelClass' => 'Language',
]) . $model->title;

$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);

$this->params['breadcrumbs'][] = ['label' => Yii::t('adminka', 'BC_LANGS'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<?php if(Yii::$app->session->hasFlash('errorDefaultLang')):?>
<div class="alert alert-danger">
    <?=Yii::$app->session->getFlash('errorDefaultLang');?>
</div>
<?php endif;?>

<div class="panel">
	<div class="language-update">
		<div class="panel-body">
		<?= $this->render('_form', ['model' => $model]);?>
		</div>
	</div>
</div>