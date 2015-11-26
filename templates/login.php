<?php echo $this->_['htmlHeader']; ?>
<div class="container">

<?php echo $this->_['header']; ?>

<form class="form-signin" action="assets/login.php" method="POST">
  <div class="form-group">
    <label for="inputEmail">E-Mail Adresse</label>
    <input type="email" class="form-control" id="inputEmail" placeholder="E-Mail" required>
  </div>
  <div class="form-group">
    <label for="inputPassword">Passwort</label>
    <input type="password" class="form-control" id="inputPassword" placeholder="Passwort" required>
  </div>
  <button type="submit" class="btn btn-success">Login</button>
</form>

<?php echo $this->_['footer']; ?>
</div> <!-- /container -->
<?php echo $this->_['htmlFooter'] ?>