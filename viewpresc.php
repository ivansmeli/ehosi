<html>
<body>
	<table class="table table-bordered">
	<tr bgcolor=blue><td align=center><font SIZE=5 color=white>PATIENTS PRESCRIPTION HISTORY</font></td></tr>
	<tr><td><table align=center width=650 cellspacing=0 cellpadding=5>
	</table></td></tr>
	<table  width=650 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><th align="left">ID</th><th align="left">PRESCRIPTION</th></th>
	<th align="left">DATE</th>
</tr>
	<?php
	$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
 	$sql="SELECT diagnosis_prescription.prescription,diagnosis_prescription.patid, pat_details.todays_date FROM diagnosis_prescription INNER JOIN pat_details  ON diagnosis_prescription.patid=pat_details.pid";
	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value) {
 	echo "<tr style="background-color:green">";
 	echo "<td>".$value['patid']."</td>";
 	echo "<td>".$value['prescription']."</td>";
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