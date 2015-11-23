<html>
<head>
<title>LVS - Lehrgänge verwalten</title>
<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
<link rel='stylesheet' type='text/css' href='../styles/app.css'>
<link rel='stylesheet' type='text/css' href='../styles/register.css'>
</head>
<body>
    <div class="container">

      <form class="form-register" >
        <h2 class="form-register-heading">Registrieren</h2>
        <label for="inputEmail" class="sr-only">E-Mail Adresse</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="E-Mail Adresse" required autofocus>
        <label for="inputPassword" class="sr-only">Passwort</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Passwort" required>
        <label for="repeatPassword" class="sr-only">Passwort wiederholen</label>
        <input type="password" id="repeatPassword" class="form-control" placeholder="Passwort wiederholen" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Angemeldet bleiben
          </label>
          <label>
          	<a href="login.html"> Schon registriert? Hier anmelden.</a>
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrieren</button>
      </form>

    </div> <!-- /container -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>