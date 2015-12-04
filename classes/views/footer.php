<?php

 class Footer extends View {

  public function __construct() {
    parent::__construct("Footer");
	$this->assign('company', Globals::$COMPANY_NAME);
	$this->assign('startYear', Globals::$COPYRIGHT_START_YEAR);
  }
}
?>