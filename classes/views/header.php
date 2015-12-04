<?php

 class Header extends View {

/**
*	Contstructor of the Header bar
*	@param active: Active option of the Header bar
*/


  public function __construct() {
    parent::__construct("header");
	$this->assign('appName', Globals::$APP_NAME_SHORT);
	$this->assign('loginForm', (new LoginForm())->loadTemplate());
	$this->assign('logoutForm', (new LogoutForm())->loadTemplate());
  }
}
?>