<?php
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = Html::encode(\Yii::t('adminka', 'ERROR_404_TITLE'));
$this->registerMetaTag(['name' => 'keywords', 'content' => '']);
$this->registerMetaTag(['name' => 'description', 'content' => '']);
?>
<h1>404</h1>
<h3><?= Html::encode(\Yii::t('adminka', 'ERROR_404_DESCRIPTION'));?></h3>
<hr class="darken">
<ul class="list-inline">
	<li>
		<script type="text/javascript">
		function goBack() {
		    window.history.back();
		}
		</script>
		<a onclick="goBack()" style="cursor: pointer;"><?=\Yii::t('adminka', 'ERROR_404_LINK_BACK');?></a>
	</li>
	<li class="pull-right">
		<script type="text/javascript">
			<?php
				$siteEmail = explode("@", Yii::$app->params['developerEmail']);
			?>
			emailE = ('<?=$siteEmail[0];?>' + '@' + '<?=$siteEmail[1];?>')
			document.write('<a href="mailto:' + emailE + '">' + emailE + '</a>')
		</script>
	</li>
</ul>