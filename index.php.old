<?php
	session_start();
?>
<html>
	<head>
		<?php 
			include 'assets/vars.php';
		?>
		<title><?php echo $title; ?></title>
		<link rel='stylesheet' type='text/css' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'>
		<link rel='stylesheet' type='text/css' href='styles/app.css'>
		<link rel='stylesheet' type='text/css' href='styles/signin.css'>
	</head>
	<body>
	    <div class="container">
			<h1>Willkommen bei der Lehrgangsverwaltung</h1>
		    <div class="container">
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
					<a href="assets/register.html"> Noch kein Login? Hier registrieren.</a>
				</label>
		        <button class="btn btn-lg btn-primary btn-block" type="submit">Anmelden</button>
		      </form>      
		    </div>
			<div id="errPanel" class="panel panel-danger" style="display:none;">
				<div class="panel-heading">
					<h3 class="panel-title">Fehler beim Anmelden</h3>
				</div>
				<div id="errMessage" class="panel-body" >
				</div>
			</div>
	    </div> <!-- /container -->
	<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->
<script type="text/javascript">
	function getQueryVariable(variable)
	{
	       var query = window.location.search.substring(1);
	       var vars = query.split("&");
	       for (var i=0;i<vars.length;i++) {
	               var pair = vars[i].split("=");
	               if(pair[0] == variable){return pair[1];}
	       }
	       return(false);
	}
	var errMessage = getQueryVariable("err");
	if(errMessage != false){
		errMessage = decodeURIComponent(errMessage);
		document.getElementById("errMessage").innerHTML = errMessage;
		document.getElementById("errPanel").style.display = "block";
	}
</script>
	</body>
</html>