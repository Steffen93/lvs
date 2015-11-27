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

<table class="table table-hover"> 
	<thead> 
		<tr> 
			<th>#</th> 
			<th>First Name</th> 
			<th>Last Name</th>
			<th>Username</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<th scope="row">1</th>
			<td>Mark</td>
			<td>Otto</td>
			<td>@mdo</td>
		</tr>
		<tr>
			<th scope="row">2</th>
			<td>Jacob</td>
			<td>Thornton</td>
			<td>@fat</td>
		</tr>
		<tr>
		<th scope="row">3</th>
		<td>Larry</td>
		<td>the Bird</td>
		<td>@twitter</td>
		</tr>
	</tbody>
</table>
<?php 
	foreach ($this->_['users'] as $user) {
		echo $user['content'];
	}
 ?>

<?php echo $this->_['footer']; ?>
</div> <!-- /container -->
<?php echo $this->_['htmlFooter'] ?>