<?php
use yii\helpers\Html;
$_userRole = array_shift(Yii::$app->authManager->getRolesByUser(Yii::$app->user->identity->id));
?>
<div class="leftpanel">
  <div class="leftpanelinner">
    <!-- ################## LEFT PANEL PROFILE ################## -->
    <div class="media leftpanel-profile">
      <div class="media-left">
        <a>
          <?php
          $_imgSrc = 'images/help/no-avatar.jpg';
          if(Yii::$app->user->identity->profile->avatar){
            $_imgSrc = '/images/avatar/'.Yii::$app->user->identity->profile->avatar;
          }
          echo Html::img($_imgSrc, ['class' => 'media-object img-circle','alt' => Yii::$app->user->identity->username,]);
          ?>
        </a>
      </div>
      <div class="media-body">
        <h4 class="media-heading"><?=Yii::$app->user->identity->username;?></h4>
        <span><?=$_userRole->name;?></span>
      </div>
    </div>

    <ul class="nav nav-tabs nav-justified nav-sidebar" id="left-admin-menu-tab">
      <li class="tooltips" data-toggle="tooltip" title="<?=Yii::t('adminka', 'LM_TABS_1');?>">
        <a class="adminleft_reportsmenutab" data-toggle="tab" data-target="#adminleft_reportsmenupane"><i class="tooltips fa fa-envelope"></i></a>
      </li>
      <li class="tooltips" data-toggle="tooltip" title="<?=Yii::t('adminka', 'LM_TABS_2');?>">
        <a class="adminleft_usersmenutab" data-toggle="tab" data-target="#adminleft_usersmenupane"><i class="fa fa-user"></i></a>
      </li>
      <li class="tooltips" data-toggle="tooltip" title="<?=Yii::t('adminka', 'LM_TABS_3');?>">
        <a class="adminleft_commonmenutab" data-toggle="tab" data-target="#adminleft_commonmenupane"><i class="tooltips fa fa-info"></i></a>
      </li>
      <li class="tooltips" data-toggle="tooltip" title="<?=Yii::t('adminka', 'LM_TABS_4');?>">
        <a class="adminleft_settingsmenutab" data-toggle="tab" data-target="#adminleft_settingsmenupane"><i class="fa fa-cog"></i></a>
      </li>
    </ul>

    <div class="tab-content" id="left-admin-menu-pane">

      <!-- ######################## REPORTS MENU ##################### -->
      <div class="tab-pane" id="adminleft_reportsmenupane">
        <?= backend\components\LeftCommonMenuWidget::widget();?>
        <h5 class="sidebar-title"><strong>Tags</strong></h5>
        <ul class="nav nav-pills nav-stacked nav-quirk nav-label">
          <li><a href="#"><i class="fa fa-tags primary"></i> <span>Communication</span></a></li>
          <li><a href="#"><i class="fa fa-tags success"></i> <span>Updates</span></a></li>
          <li><a href="#"><i class="fa fa-tags warning"></i> <span>Promotions</span></a></li>
          <li><a href="#"><i class="fa fa-tags danger"></i> <span>Social</span></a></li>
        </ul>
      </div>

      <!-- ################### CONTACT LIST ################### -->
      <div class="tab-pane" id="adminleft_usersmenupane">
        <?= backend\components\LeftCommonMenuWidget::widget();?>
        <h5 class="sidebar-title"><?=Yii::t('adminka', 'TTL_LEFT_SUBMENU_NEWFREE');?></h5>
        <?= backend\components\LeftDevelopersMenuWidget::widget();?>
        <div class="sidebar-btn-wrapper">
          <a href="#" class="btn btn-info btn-sm btn-block"><?=Yii::t('adminka', 'TTL_LEFT_SUBMENU_ALLFREE');?></a>
        </div>
        <h5 class="sidebar-title"><?=Yii::t('adminka', 'TTL_LEFT_SUBMENU_NEWCUSTOM');?></h5>
        <?= backend\components\LeftEmployerMenuWidget::widget();?>
        <div class="sidebar-btn-wrapper">
          <a href="#" class="btn btn-info btn-sm btn-block"><?=Yii::t('adminka', 'TTL_LEFT_SUBMENU_ALLCUSTOM');?></a>
        </div>
      </div>

      <!-- ################# MAIN MENU ################### -->
      <div class="tab-pane" id="adminleft_commonmenupane">
        <?= backend\components\LeftCommonMenuWidget::widget();?>
        <h5 class="sidebar-title"><strong><?=Yii::t('adminka', 'TM_MENU');?></strong></h5>
        <?= backend\components\LeftMenuWidget::widget();?>
      </div>

      <!-- #################### SETTINGS ################### -->
      <div class="tab-pane" id="adminleft_settingsmenupane">
        <?= backend\components\LeftCommonMenuWidget::widget();?>
        <h5 class="sidebar-title"><strong><?=Yii::t('adminka', 'TM_SETTINGS');?></strong></h5>
        <?= backend\components\LeftSettingsMenuWidget::widget();?>
      </div>
    
    </div>
  </div>
</div>