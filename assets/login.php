<?php
	$uname = "";
	$pword = "";
	$errorMessage = "";
	$num_rows = 0;
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$uname = htmlspecialchars($_POST['username']);
		$pword = htmlspecialchars($_POST['password']);
		$pword = md5($pword);
		$result = false;
		if($uname == 'steffen.haertlein@gmx.de'){
			$result = true;
		}
		else {
			$errorMessage = 'Unknown User';
		}
		if($result){
			header("Location: ../");
			exit;
		}
		else {
			$errorMessage=htmlspecialchars($errorMessage);
			header("Location: login.html?err=$errorMessage");
			exit;
		}
	}
 ?>