<?php

if (isset($_POST["Register"])) {
    $id = $_POST["userid"];
    $password = $_POST["password"];

    $db = new PDO("mysql:host=localhost;dbname=group_project", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, INFO_GENERAL));
    if ($db == true) {

        try {
            //$create = $db->query("CREATE TABLE if not exists login(username VARCHAR(10),password VARCHAR(10)");
            $insert = $db->query("INSERT INTO login(username,password) VALUES('$id','$password')");
        } catch (PDOException $e) {
            die($e->getMessage());
          
        }
    
    }
    if(!$insert){
        header("Location:reg.php"); 
    } else {
        header("Location:login.php");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
#frm{
	border:solid gray 5px;
	width:30%;
	height:50%;
	border-radius:5px;
	margin:100px auto;
	background:green;
	padding:20px;
	text-align:justify;
}
</style>
	<title>Registrationform</title>
</head>
<body>
<div id="frm">
<form action="reg.php" method="POST">
	<label for="userid" name "userid" required>User ID</label><br>
	<input type="text" name="userid"><br>
	<label for="pid" name "pass">Password</label><br>
	<input type="Password" name="password"><br><br>
	<input type="submit" name="Register" value="register"/>
</form>
</div>
</body>
</html>