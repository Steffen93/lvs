<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		header("Location: ../index.php");
		exit;
	}
	else {
		echo "Hallo ".$_SESSION['username'].".";
		echo '<a href="logout.php">Logout</a>';
	}
 ?>