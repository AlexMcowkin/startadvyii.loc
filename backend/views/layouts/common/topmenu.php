<?php
use yii\helpers\Html;
?>
<header>
  <div class="headerpanel">
    <div class="logopanel">
      <h2><a href="<?=Yii::$app->params['adminHomeUrl']?>">ADMINKA</a></h2>
    </div>
    <div class="headerbar">
      <a id="menuToggle" class="menutoggle" title="switch menu"><i class="fa fa-bars"></i></a>
      <div class="header-right">
        <ul class="headermenu">
          <!-- infopanel widget -->
          <li>
            <div id="noticePanel" class="btn-group">
              <button class="btn btn-notice alert-notice" data-toggle="dropdown">
                <i class="fa fa-info-circle"></i>
              </button>
              <div id="noticeDropdown" class="dropdown-menu dm-notice pull-right">
                <div role="tabpanel">
                  <?= backend\components\InfopanelWidget::widget(); ?>  
                </div>
              </div>
            </div>
          </li>
          <!-- profile menu widget -->
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-logged" data-toggle="dropdown">
                <?php
                $_imgSrc = 'images/help/no-avatar.jpg';
                if(Yii::$app->user->identity->profile->avatar){
                  $_imgSrc = '/images/avatar/'.Yii::$app->user->identity->profile->avatar;
                }
                echo Html::img($_imgSrc, ['alt' => Yii::$app->user->identity->username,]);
                ?>
                <?=Yii::$app->user->identity->username;?>
                <span class="caret"></span>
              </button>
              <?= backend\components\TopmenuWidget::widget(); ?>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</header>