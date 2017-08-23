$( document ).ready(function(){

	var siteAdminBaseUrl = window.location.host;
  var CookiesMT = Cookies.noConflict(); // for left menu tab
  
  // COOKIE: for admin left menu
  $('.adminleft_commonmenutab').click(function(e){
    e.preventDefault();
    CookiesMT.set('admin_leftmenu_common', 'active', {expires: 7, path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_mails', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_users', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_settings', {path: '/', domain: siteAdminBaseUrl});
  });

  $('.adminleft_emailsmenutab').click(function(e){
    e.preventDefault();
    CookiesMT.set('admin_leftmenu_mails', 'active', {expires: 7, path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_common', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_users', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_settings', {path: '/', domain: siteAdminBaseUrl});
  });

  $('.adminleft_usersmenutab').click(function(e){
    e.preventDefault();
    CookiesMT.set('admin_leftmenu_users', 'active', {expires: 7, path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_mails', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_common', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_settings', {path: '/', domain: siteAdminBaseUrl});
  });

  $('.adminleft_settingsmenutab').click(function(e){
    e.preventDefault();
    CookiesMT.set('admin_leftmenu_settings', 'active', {expires: 7, path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_mails', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_users', {path: '/', domain: siteAdminBaseUrl});
    CookiesMT.remove('admin_leftmenu_common', {path: '/', domain: siteAdminBaseUrl});
  });

  // console.log(CookiesMT.get('admin_leftmenu_settings'));
  // console.log(CookiesMT.get('admin_leftmenu_mails'));
  // console.log(CookiesMT.get('admin_leftmenu_users'));
  // console.log(CookiesMT.get('admin_leftmenu_common'));

  if(CookiesMT.get('admin_leftmenu_settings') == 'active'){
    $('#left-admin-menu-tab li').removeClass('active');
    $('#left-admin-menu-pane .tab-pane').removeClass('active');
    $('.adminleft_settingsmenutab').parent().addClass('active');
    $('#adminleft_settingsmenupane').addClass('active');
  }
  else if(CookiesMT.get('admin_leftmenu_mails') == 'active'){
    $('#left-admin-menu-tab li').removeClass('active');
    $('#left-admin-menu-pane .tab-pane').removeClass('active');
    $('.adminleft_emailsmenutab').parent().addClass('active');
    $('#adminleft_emailsmenupane').addClass('active');
  }
  else if(CookiesMT.get('admin_leftmenu_users') == 'active'){
    $('#left-admin-menu-tab li').removeClass('active');
    $('#left-admin-menu-pane .tab-pane').removeClass('active');
    $('.adminleft_usersmenutab').parent().addClass('active');
    $('#adminleft_usersmenupane').addClass('active');
  }
  else{
    $('#left-admin-menu-tab li').removeClass('active');
    $('#left-admin-menu-pane .tab-pane').removeClass('active');
    $('.adminleft_commonmenutab').parent().addClass('active');
    $('#adminleft_commonmenupane').addClass('active');
  }

});