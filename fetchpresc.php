<html>
<body>
	<table class="table table-bordered">
	<tr bgcolor=blue><td align=center><font SIZE=5 color=white>PATIENTS PRESCRIPTION HISTORY</font></td></tr>
	<tr><td><table align=center width=650 cellspacing=0 cellpadding=5>
	</table></td></tr>
	<table  width=650 cellspacing=0 cellpadding=5>
	<tr bgcolor=#ccccc><th align="left">ID</th><th align="left">Diagnosis</th><th align="left">Prescription</th></th><th align="left">Todays Date</th></tr>
	<?php
	$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
 	$sql="SELECT diagnosis_prescription.*,pat_details.todays_date FROM diagnosis_prescription INNER JOIN pat_details ON diagnosis_prescription.patid=pat_details.pid";
	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value) {
 	echo "<tr>";
 	echo "<td>".$value['patid']."</td>";"<br>"
 	echo "<td>".$value['diagnosis']."</td>";
 	echo "<td>".$value['prescription']."</td>";
 	echo "<td>".$value['todays_date']."</td>";
 	echo "</tr>";
 	}
 		?>
 		
</table>
</table>
</body>
</html>