<ul class="nav nav-tabs nav-justified">
	<li id="members" class="active" role="presentation">
		<a href="?v=members">Lehrgänge</a>
	</li>
	<li id="settings" class="dropdown" role="presentation"> 
		<a role="button" data-toggle="dropdown" class="dropdown-toggle"> 
			Einstellungen <span class="caret"></span> 
		</a> 
		<ul class="dropdown-menu"> 
			<li>
				<a href="#">Allgemein</a>
			</li> 
			<li>
				<a href="?v=userlist">Benutzer</a>
			</li> 
		</ul> 
	</li>
</ul>

<!-- Aktivsetzung anhand aktueller Seite setzen (Controller setzt den Wert, ) -->
<script type="text/javascript">
	var Idactive = "<?php echo $this->_['active']; ?>"; // TODO: Variable setzen
	var elem = document.getElementById(Idactive);
	var parent = elem.parentNode;
	for (var i = parent.childNodes.length - 1; i >= 0; i--) {
		parent.childNodes[i].removeClass('active');
	};
	elem.addClass('active');
</script>