<?php
use yii\helpers\Html;
use yii\widgets\Menu;

$user = Yii::$app->user->identity;
$networksVisible = count(Yii::$app->authClientCollection->clients) > 0;
?>
<div class="profile-left-heading">
    <div class="profile-photo">

		<?php
		$_imgSrc = 'images/help/no-avatar.jpg';
		if($user->profile->avatar){
			$_imgSrc = '/images/avatar/'.$user->profile->avatar;
		}
		echo Html::img($_imgSrc, ['class' => 'img-circle img-responsive','alt' => $user->username,]);
		?>

    </div>
    <h2 class="profile-name"><?=$user->profile->name;?></h2>
    <hr class="fadeout" />
    <?=Html::a(Yii::t('user', 'Profile'), ['/user/settings/profile'], ['class' => 'btn btn-info btn-quirk btn-block profile-btn-follow']);?>
    <?=Html::a(Yii::t('user', 'Account'), ['/user/settings/account'], ['class' => 'btn btn-info btn-quirk btn-block profile-btn-follow']);?>
</div>