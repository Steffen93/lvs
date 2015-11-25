<?php echo $this->_['htmlHeader']; ?>
<div class="container">

<?php echo $this->_['header']; ?>

  <form class="form-register" method="POST" action="assets/register.php" >
    <h2 class="form-register-heading">Registrieren</h2>
    <label for="inputEmail" class="sr-only">E-Mail Adresse</label>
    <input type="email" id="inputEmail" class="form-control" placeholder="E-Mail Adresse" required autofocus>
    <label for="inputPassword" class="sr-only">Passwort</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
    <label for="repeatPassword" class="sr-only">Passwort wiederholen</label>
    <input type="password" id="repeatPassword" class="form-control" placeholder="Passwort wiederholen" required>
    <label>
      <a href="?v=login"> Schon registriert? Hier anmelden.</a>
    </label>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Registrieren</button>
  </form>

<?php echo $this->_['footer']; ?>

</div> <!-- /container -->
<?php echo $this->_['htmlFooter'] ?>