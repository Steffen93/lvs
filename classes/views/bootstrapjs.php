<?php

 class BootstrapJs extends View {

  public function __construct() {
    parent::__construct("BootstrapJs");
	$this->assign('bootstrapVersion', Globals::$BOOTSTRAP_VERSION);
	$this->assign('jQueryVersion', Globals::$JQUERY_VERSION);
  }
}
?>