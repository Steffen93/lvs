<!--TODO: error Message Teil auslagern und als Variable importieren, nur nutzen falls nötig (login Seite etc.)-->
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
</body>
</html>