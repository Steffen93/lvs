<?php class Navigation extends View {
  public function __construct($active = "") {
    parent::__construct();
    $this->setTemplate("membernav");
    $this->assign("navigationOptions", Model::getNavigationOptions());
    $this->assign("activeNavigation", $active);
  }
}
?>