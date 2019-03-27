<!DOCTYPE html>
<?php
if(isset($_POST['submit'])){
$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
$fname=$_POST['fname'];
$sname=$_POST['sname'];
$special=$_POST['special'];
$user=$_POST['user'];
$pass=$_POST['pass'];
 	if($db==true){
		$table=$db->query("CREATE TABLE IF NOT EXISTS doc_details(fname VARCHAR(60) NOT NULL,sname VARCHAR(60) NOT NULL,special VARCHAR(60)NOT NULL,user VARCHAR(60) NOT NULL PRIMARY KEY,pass VARCHAR(60) NOT NULL)");	
 		$insert=$db->query("INSERT INTO doc_details(fname,sname,special,user,pass) VALUES('$fname','$sname','$special','$user','$pass')");
 		$ins=$db->query("INSERT INTO doclogin(user,pass) VALUES('$user','$pass')");
 	}
 }
?>
<html>
	<head>
		<title>doc</title>	
		<style type="text/css">
	.body{
		background-color: grey;
	}
	#docsign{
	border:solid gray 5px;
	width:30%;
	border-radius:5px;
	margin:100px auto;
	background:olive;
	padding:30px;
	}
	.btn{
	color: blue;
	padding:5px;
	margin-left:50%;
}
</style>
<body style="background-color:grey;">
	<div id="docsign">
	<form method="POST" action="signupdoc.php">
		<label> First Name</label><br>
		<input type="text" id="fname" name="fname" placeholder=First Name><br><br>
		<label> Second Name</label><br>
		<input type="text" id="sname" name="sname" placeholder=Second Name><br><br>
		<label> Specialisation</label><br>
		<input type="text" id="special" name="special" placeholder=Specialisation><br><br>
		<label> Username</label><br>
		<input type="text" id="user" name="user" placeholder=Username><br><br>
		<label> Password</label><br>
		<input type="text" id="pass" name="pass" placeholder=Password><br><br>
		<input type="submit" id="btn" value="SIGNUP" name="submit">
	</form>
	</div>
	</body>
</html>
