<?php
$username=$_POST['username'];
$password=$_POST['password'];

$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
if($username!="" && $password!=""){
	$query=$db->query("SELECT * FROM admin WHERE username='$username' AND password='$password'");
	$row=$query->fetch();
	if($row[0]==$username){
 	echo "true";
	}
	else{
		echo "Wrong username or password";
	}
}else{
	echo "Username and password cannot be empty";
}
?>
