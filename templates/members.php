<?php
	if(!isset($_SESSION['username'])){
		$errorMessage = htmlspecialchars("Session abgelaufen. Bitte erneut anmelden.");
		header("Location: ?v=login&err=$errorMessage");
		exit;
	}
?>

<?php echo $this->_['htmlHeader']; ?>
<div class="container">

<?php echo $this->_['header']; ?>

<?php 
	echo $this->_['membernav'];
?>

<?php echo "Hello World, " . $_SESSION['username'];?>

<?php echo $this->_['footer']; ?>
</div> <!-- /container -->
<?php echo $this->_['bootstrapjs'] ?>
<?php echo $this->_['htmlFooter'] ?>