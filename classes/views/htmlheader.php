<?php

 class HtmlHeader extends View {

	public function __construct() {
		parent::__construct("htmlheader");
		$this->assign('title', Globals::$APP_TITLE);
		$this->assign('bootstrapVersion', Globals::$BOOTSTRAP_VERSION);
	}
}
?>