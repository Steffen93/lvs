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
		errMessage = decodeURI(errMessage);
		document.getElementById("errMessage").innerHTML = errMessage;
		document.getElementById("errPanel").style.display = "block";
	}
</script>
<script src='https://code.jquery.com/jquery-2.1.4.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/<?php echo $this->_['bootstrapVersion']; ?>/js/bootstrap.min.js'></script>
</body>
</html>