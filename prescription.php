<?php
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript">
		function fetchPresc(){
			var request=new XMLHttpRequest();
			request.open("GET","fetchpresc.php",true);
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			request.onreadystatechange=function(){
				var div=document.getElementById('display');
				if(this.readyState==4 && this.status==200){
					div.innerHTML=this.responseText;
				}
			}
			request.send();
		}
	</script>
</head>
<body>
<button onclick="fetchPresc()">View Prescriptions</button><br><br>
<a href="appointment.php" style="text-decoration:none"><button label="Press ME" name="so_link">View Appointments</button></a>
<div id="display"></div>
</body>
</html>