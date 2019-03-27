<html>
 <head>
  	<title>Add Appointments</title>
 </head> 
 <body>
	<table class="table table-bordered">
</table>
	<tr bgcolor=red><td ><font size=4 color=white>Add Appointments</font></td></tr>
	<form method="POST" action=appointment.php>
	<tr><td><table width=750 cellspacing=0 cellpadding=5>
		<tr><td>App. ID</td><td><input name="apid" type="text" required><br></td></tr>
		<tr><td>Patient ID</td><td><input name="pid" type="text" required><br></td></tr>
		<tr><td>Doctor ID</td><td><input name="did" type="text" required><br></td></tr>
		<tr><td>Time</td><td><input name="tim" placeholder="hh:mm" size=20 maxlength=30 required></td></tr>
		<tr><td>Date</td><td><input name="apdate"placeholder="yyyy-mm-dd" size=20 maxlength=30 required></td></tr>
	</table></td></tr>
	<tr><td align=center><input type=submit name="send" value=Submit></td></tr>
</form>
</body>
</html>
