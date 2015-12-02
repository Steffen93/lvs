<?php class Navigation extends View {
  public function __construct() {
    $this->setTemplate("membernav");
    $this->assign("navigationOptions", "");
    $this->assign("activeNavigation","");
  }
}
?>
