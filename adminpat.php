<html>
<head>
	<title>appointment</title>
</head>
<body>
<?php 
$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
	
?>
	<table class="table table-bordered">
	<tr bgcolor=blue><td align=center><font SIZE=6 color=white>PATIENTS DETAILS</font></td></tr>
	<tr><td><table align=center width=750 cellspacing=1 cellpadding=5>
	</table></td></tr>
	<table  width=750 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><th align="left">Name</th><th align="left">Patient ID</th><th align="left">Date of Birth</th><th align="left">Location</th>
	<th align="left">Date</th></tr>
	<?php
	$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
 	$sql="SELECT pid, name,dob,location,todays_date FROM pat_details";
	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value) {
 	echo "<tr>";
 	echo "<td>".$value['name']."</td>";
 	echo "<td>".$value['pid']."</td>";
 	echo "<td>".$value['dob']."</td>";
 	echo "<td>".$value['location']."</td>";
 	echo "<td>".$value['todays_date']."</td>";
 	echo "<td>"."<a href=update.php>UPDATE</a>"."</td>";
 	echo "<td>"."<a href=delete.php>DELETE</a>"."</td>";
 	echo "</tr>";
 	}
 	
 		?>
</table>
</table>
</body>
</html>
