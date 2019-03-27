<?php
if(isset($_POST['update'])){
	header("location:adminpat.php");
$location=$_POST['location'];
$id=$_POST['pid'];
$name=$_POST['name'];
$date=$_POST['date'];
$dob=$_POST['dob'];
mysql_connect("localhost","root","");
mysql_select_db("group_project");
$update="UPDATE pat_details SET name='$name',dob='$dob',location='$location',todays_date='$date' WHERE pid='$id'" or die("failed".mysql_error());
$sql=mysql_query($update);
}
?>
<html>
<head>
	<title></title>
</head>

<body>
	<form action="update.php" method="post"><br>
	NAMES:<br><input type="text" name="name"><br>
	PID:<br><input type="text" name="pid"><br>
    DOB:<br><input type="text" name="dob"><br>
    LOCATION:<br><input type="text" name="location"><br>
    DATE:<br><input type="text" name="date"><br>
    <br><input type="submit" value="UPDATE" name="update">
</form>
</body>
</html>


