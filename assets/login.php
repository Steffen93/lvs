<?php
session_start();
?>

<?php
	$uname = "";
	$pword = "";
	$errorMessage = "";
	$num_rows = 0;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$uname = htmlspecialchars($_POST['username']);
		$pword = htmlspecialchars($_POST['password']);
		$pword = md5($pword);
		$loginSuccess = false;
		if($uname == 'steffen.haertlein@gmx.de'){
			$loginSuccess = true;
		}
		else {
			$errorMessage = 'Unknown User';
		}
		if($loginSuccess){
			$_SESSION['username'] = $uname;
			header("Location: ../?v=members");
			exit;
		}
		else {
			$errorMessage=htmlspecialchars($errorMessage);
			header("Location: ../?v=login&err=$errorMessage");
			exit;
		}
	}
 ?>