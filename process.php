
<?php
@session_start();
if(isset($_POST['register'])){
	header("Location:reg.php");
}
?>
<?php
if(isset($_POST['login'])){
	if(!empty($_POST['user']) && !empty($_POST['pass'])){
$username=$_POST['user'];
$password=$_POST['pass'];
//to prevent mysql injection
$username=stripcslashes($username);
$password=stripcslashes($password);
mysql_connect("localhost","root","");
mysql_select_db("group_project");
$result=mysql_query("select * from login where username='$username' && password='$password'")
or die("Failed to query database".mysql_error());
$row =mysqli_fetch_array($result);
if($row['username']==$username && $row['password']==$password)
{
	$_SESSION["name"]=$username;
	$_SESSION["message"]="Login Succesful";
 header("Location:doctorssession.php");
}
else{
$sms="password or username incorrect";
  echo "<script type='text/javascript'>alert('$sms');</script>";
 include("login.php");
}
}
else{
	$_SESSION["message"]="Please fill ALL fields to continue";
	 header("location:login.php");
 die();
}
}
?>
