<!DOCTYPE html>
<html>
<head>
	<title>appointment</title>
</head>
<body>
<?php 
if (isset($_POST['send'])) {
$apid=$_POST['apid'];
$did=$_POST['did'];
$pid=$_POST['pid'];
$time=$_POST['tim'];
$apdate=$_POST['apdate'];

$db=new PDO("mysql:host=localhost;dbname=group_project","root","");

 		$table=$db->query("CREATE TABLE if not exists appointments(id INT PRIMARY KEY AUTO_INCREMENT,apid INT,pid INT,did INT,tim VARCHAR(100), apdate date)");
 		$insert=$db->query("INSERT INTO appointments(apid,pid,did,tim,apdate) VALUES('$apid','$pid','$did','$time','$apdate')");
	}
 	?>
	<table class="table table-bordered">
	<tr bgcolor=blue><td align=center><font SIZE=6 color=white>APPOINTMENTS</font></td></tr>
	<tr><td><table align=center width=650 cellspacing=0 cellpadding=5>
	</table></td></tr>
	<tr><td><a href=aplist.php>Add New Appointments</a></td></tr>
	<form method="POST" action=appointment.php>
	<table  width=650 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><th align="left">ID</th><th align="left">App. No</th><th align="left">Pat ID</th><th align="left">Doc ID</th><th align="left">Time</th>
	<th align="left">Date</th></tr>
	<?php
	$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
 	$sql="SELECT * FROM appointments";
	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value) {
 	echo "<tr>";
 	echo "<td>".$value['apid']."</td>";
 	echo "<td>".$value['id']."</td>";
 	echo "<td>".$value['pid']."</td>";
 	echo "<td>".$value['did']."</td>";
 	echo "<td>".$value['tim']."</td>";
 	echo "<td>".$value['apdate']."</td>";
 	echo "</tr>";
 	}
 	
 		?>
</table>
</table>
</body>
</html>
