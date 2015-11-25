<?php
  session_start();
?>
  <div class="header clearfix">
    <nav>
      <ul class="nav nav-pills pull-right">
      <?php 
        if(isset($_SESSION['username'])){
          echo $this->_['logoutForm'];
        }
        else {
          echo $this->_['loginForm'];
        }
      ?>
    </nav>
    <h3 class="text-muted"><a href="?v=home"><?php echo $this->_['appName']; ?></a></h3>
  </div>
  <div id="errPanel" class="panel panel-danger" style="display:none;">
    <div class="panel-heading">
      <h3 class="panel-title">Fehler</h3>
    </div>
    <div id="errMessage" class="panel-body" >
    </div>
  </div>