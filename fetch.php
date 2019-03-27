<?php
$sql="SELECT * FROM pat_details";

 	$db=new PDO("mysql:host=localhost;dbname=group_project","root","",array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,INFO_GENERAL));
 	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value) {
 	echo "id:".$value['id'];
 	echo "<br>";
 	echo "name:".$value['name'];

 	}
?>