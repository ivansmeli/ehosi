<?php
if(isset($_POST['delete'])){
	header("location:adminpat.php");
$id=$_POST['pid'];
$db=new PDO("mysql:host=localhost;dbname=group_project","root","",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,INFO_GENERAL));
 	if($db==true){
$sql=$db->query("DELETE FROM  pat_details WHERE pid='$id'" or die("failed".mysql_error()));
}
}
?>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="delete.php" method="post"><br>

	PID:<br><input type="text" name="pid"><br>
    
   <br> <input type="submit" name="delete" value="DELETE">
</form>
</body>
</html>
