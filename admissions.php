<?php  
if(isset($_POST['submit'])){
 	$pid=$_POST['pid'];
 	$ward=$_POST['ward'];
 	$roomno=$_POST['roomno'];


 	$db=new PDO("mysql:host=localhost;dbname=group_project","root","",array(PDO::ATTR_ERRMODE =>PDO::ERRMODE_EXCEPTION,INFO_GENERAL));
 	if($db==true){
 		try{
 			$table=$db->query("CREATE TABLE IF NOT EXISTS inpatient (pid VARCHAR(50) PRIMARY KEY,ward VARCHAR(10),roomno INT)");
 		$insert=$db->query("INSERT INTO inpatient (pid,ward,roomno) VALUES ('$pid','$ward','$roomno')");
 		}catch(PDOException $e){
 			die(var_dump($e));
 		}
 	}
 }
?>
<html>
<head>
<title></title>
	<style type="text/css">
		#frm {

			border: solid gray 1px;
			width: 30%;
			border-radius: 5px;
			margin: 100px auto;
			background: green;
			padding: 5px;
		}
	</style>
</head>
<body>
<h2 style="text-align: center"><u>ADMISSION FORM</u></h2>
<div id="frm">
<form method="POST" action="admissions.php">
	PATIENT ID<br><input type="text" name="pid" required="true"><br>
	WARD<br><input type="text" name="ward" required="true"><br>
	ROOM NO<br><input type="text" name="roomno" required="true"><br><br>
	<input type="submit" name="submit" value="submit">
</form>
</div>
</body>
</html>