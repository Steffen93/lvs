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
			<?php 
				foreach ($this->_['columns'] as $col) {
					echo "<th>$col</th>";
				}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($this->_['users'] as $user) {
				echo "<tr>";
				foreach ($this->_['columns'] as $key) {
					$output = "Spalte nicht gefunden";
					if (array_key_exists($key, $user)){
						$output = $user[$key];
					}
					echo "<td>$output</td>";
				}
				echo "</tr>";
			}
		?>
	</tbody>
</table>

<?php echo $this->_['footer']; ?>
</div> <!-- /container -->
<?php echo $this->_['htmlFooter'] ?>