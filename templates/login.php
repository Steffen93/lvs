<?php echo $this->_['htmlHeader']; ?>
<div class="container">

<?php echo $this->_['header']; ?>

<form class="form-signin" action="assets/login.php" method="POST">
	<h2 class="form-signin-heading">Anmelden</h2>
	<label for="inputEmail" class="sr-only">E-Mail Adresse</label>
	<input type="email" id="inputEmail" name="username" class="form-control" placeholder="E-Mail Adresse" required autofocus>
	<label for="inputPassword" class="sr-only">Passwort</label>
	<input type="password" id="inputPassword" name="password" class="form-control" placeholder="Passwort" required>
	<div class="checkbox">
	  <label>
	    <input type="checkbox" value="remember-me"> Angemeldet bleiben
	  </label>
	</div>
	<label>
		<a href="?v=register"> Noch kein Login? Hier registrieren.</a>
	</label>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
</form>      

<?php echo $this->_['footer']; ?>
</div> <!-- /container -->
<?php echo $this->_['htmlFooter'] ?>