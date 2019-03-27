<?php

 if(isset($_POST['submit'])){

 	$patid=$_POST['pid'];
 	$diagnosis=$_POST['diagnosis'];
 	$prescription=$_POST['prescription'];
 	$fee=$_POST['fee'];

 	$db=new PDO("mysql:host=localhost;dbname=group_project","root","",array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,INFO_GENERAL));
 	if($db==true){
 		try{
 			$table=$db->query("CREATE TABLE IF NOT EXISTS diagnosis_prescription(patid VARCHAR(50) PRIMARY KEY,diagnosis TEXT,prescription TEXT,fee varchar(10))");
 		$insert=$db->query("INSERT INTO diagnosis_prescription (patid,diagnosis,prescription,fee) VALUES ('$patid','$diagnosis','$prescription','$fee')");
 		}catch(PDOException $e){
 			die(var_dump($e));
 		}
 	}
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="diagpresc.php">
	PATIENT ID:<input type="text" name="pid" required/><br>
	<h4><u>DIAGNOSIS</u></h4>
	<textarea name="diagnosis" rows="10" cols="90" placeholder="Type here"></textarea>
	<h4><u>PRESCRIPTION</u></h4>
	<textarea name="prescription" rows="10" cols="90" placeholder="Type here"></textarea><br>
	Doctors Fees:<input type="text" name="fee" placeholder="Ksh."><br>
	<input type="submit" name="submit" value="Submit"></input>
</form>
</body>
</html>