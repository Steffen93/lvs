<ul class="nav nav-pills nav-justified">
<?php 
	$active = $this->_['activeNavigation'];
	foreach ($this->_['navigationOptions'] as $category => $value) {
		if (is_array($value) && count($value) > 0){
			echo "<li role='presentation' class='dropdown";
			if(in_array($active, $value)){
				echo " active";
			}
			echo "'>";
			echo "<a role='button' data-toggle='dropdown' class='dropdown-toggle'>$category <span class='caret'></span></a>";
			echo "<ul class='dropdown-menu'>";
			foreach ($value as $subCategory => $link) {
				echo "<li";
				if($link == $active){
					echo " class='active'";
				}
				echo "><a href='?v=$link'>$subCategory</a></li>";
			}
			echo "</ul></li>";
		}
		else {
			echo "<li role='presentation'";
			if($active == $value){
				echo " class='active' ";
			}
			echo "><a href='?v=$value'>$category</a></li>";	
		}
	}
 ?>
</ul>