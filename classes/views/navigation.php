<?php

 class Navigation extends View {

/**
*	Contstructor of the navigation bar
*	@param active: Active option of the navigation bar
*/


  public function __construct($active = "") {
    parent::__construct();
    $this->setTemplate("membernav");
    $this->assign("navigationOptions", Model::getNavigationOptions());
    $this->assign("activeNavigation", $active);
  }
}
?>