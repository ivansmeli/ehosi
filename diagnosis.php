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

 if (isset($_POST['update'])) {
 	$pid=$_POST['pid'];
 	$diagnosis=$_POST['diagnosis'];
 	$prescription=$_POST['prescription'];
 	$fee=$_POST['fee'];

 	$db=new PDO("mysql:host=localhost;dbname=group_project","root","",array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,INFO_GENERAL));
 	if($db==true){
 		try{
 			/**
 			get existing values
 			get the new values
 			concatenate using delimiter ','
 			update db
 			*/
 			$sql= "SELECT * FROM diagnosis_prescription WHERE patid='$pid'";
 			$result=$db->query($sql);
 			foreach ($result as $key => $value){
 		$prescription.=",".$value['prescription'];
 		$diagnosis.=",".$value['diagnosis'];
 		$fee=$value['fee'];
 	}
 }
 catch(PDOException $e){
 			die($e->getMessage());

 }
 			$new="UPDATE diagnosis_prescription SET prescription='$prescription',diagnosis='$diagnosis' WHERE patid='$pid'";
 			$result=$db->query($new);
 		}
 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST" action="diagnosis.php">
PATIENT ID:<input type="text" name="pid" required/><br>
<h4><u>DIAGNOSIS</u></h4>
	<textarea name="diagnosis" rows="10" cols="90" placeholder="Type here"></textarea>
	<h4><u>PRESCRIPTION</u></h4>
	<textarea name="prescription" rows="10" cols="90" placeholder="Type here"></textarea><br>
	<br>Doctors Charges:<input type="text" name="fee" placeholder="Ksh." required><br>
	<br><input type="submit" name="submit" value="Submit"></input><br><br>
	<input type="submit" name="update" value="Update"><br>
</form>
</body>
</html>