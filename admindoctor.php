<!DOCTYPE html>
<html>
<head>
	<title>viewdocdet</title>
</head>
<body>
	<table class="table table-bordered">
	<tr bgcolor=blue><td align=center><font SIZE=6 color=white>DOCTOR</font></td></tr>
	<tr><td><table align=center width=750 cellspacing=0 cellpadding=5>
	</table></td></tr>
	<tr><td><a href=signupdoc.php >Add New Doctor</a></td></tr>

	<form method="POST" action=admindoctor.php>
	<table  width=750 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><th align="left">First Name</th><th align="left">Second Name</th><th align="left">Specialization</th><th align="left">Username</th>
	<th align="left">Password</th></tr>
	<?php
	$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
 	$sql="SELECT * FROM doc_details";
	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value) {
 	echo "<tr>";
 	echo "<td>".$value['fname']."</td>";
 	echo "<td>".$value['sname']."</td>";
 	echo "<td>".$value['special']."</td>";
 	echo "<td>".$value['user']."</td>";
 	echo "<td>".$value['pass']."</td>";
 	echo "</tr>";
 	}
 		?>
 		
</table>
</table>
</body>
</html>