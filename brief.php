<?php
require("dbconn.php");
if(isset($_POST['login'])){
$user=$_POST['username'];
$pass=$_POST['password'];
if(empty($user) || empty($pass)) {
$message = 'All field are required';
} else {
$query = $conn->prepare("SELECT * FROM `users` WHERE 
`email`='$user' AND `password`='$pass'");
$query->execute();
$row = $query->FetchAll(PDO::FETCH_ASSOC);
if($row['email']==$user && $row['password']==$pass && $row['type']=='buyer') {
  $_SESSION['username'] = $user;
  header('location:buyer.php');
} else if($username==$user&& $password==$pass && $type=='seller') {
  $_SESSION['username'] = $user;
  header('location:selleruploads.php');
}
  else{
  $message = "Username/Password is wrong";
}
}
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>briefing</title>
</head>
<body>
<p><font size=4 color=maroon align="justified">The automated hospital management systems is a relatively simple management system to use considering the fact that the navigation has been made ease to the users.Further more the links and sessions are all visible and brief to the users therefore making the system both efficient to the users and the evironment.The system is further under development to make it more adaptive to the changing world.But in such a case,users will be notified of the changes when ever they will be happening. </p>
</body>
</html>