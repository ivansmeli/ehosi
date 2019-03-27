<?php

$pid="";
$name="";
$dob="";
$location="";
$height="";
$bp="";
$weight="";
$temp="";
$date="";
$gender="";
$mchecked="";
$fchecked="";

if(isset($_POST["search"])){
$pid=$_POST['pid'];
$db=new PDO("mysql:host=localhost;dbname=group_project","root","");
 	if($db==true){
 			$sql="SELECT * FROM pat_details WHERE `pid`=$pid";
 			$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 	foreach ($result as $key => $value){
 		$pid=$value['pid'];
 		$name=$value['name'];
 		$dob=$value['dob'];
 		$location=$value['location'];
 		$height=$value['height'];
 		$bp=$value['bp'];
 		$weight=$value['weight'];
 		$temp=$value['temp'];
 		$date=$value['todays_date'];
 		$gender=$value['gender'];
 		if($gender=="male")
 		{
 			$mchecked="checked";
 		}
 			elseif($gender=="female")
 			{
 				$fchecked="checked";
 			}
 	}
 }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>details</title>
</head>
<body style="background-color:lightgrey;">
<form method="POST" action="pdetails.php">
	<label for="pid" name "pid"> ID</label><br>
	<input name="pid" type="text" value="<?php echo $pid;?>" />
	<input type="submit" name="search" value="search"><br>
	<label for="name" name "name"> Names</label><br>
	<input name="name" type="text" value="<?php echo $name;?>" disabled/><br>
	Date of Birth<br><input type="text" name="dob" value="<?php echo $dob;?>" disabled><br>
	Location<br><input type="text" name="location" value="<?php echo $location;?>" disabled><br>
	<label for="height" name "height"> Height</label><br>
	<input name="height" type="text" value="<?php echo $height;?>"/><br>
	<label for="bp" name "bp"> Blood Pressure</label><br>
	<input name="bp" type="text" value="<?php echo $bp;?>"/><br>
	<label for="weight" name "name"> Weight</label><br>
	<input name="weight" type="text" value="<?php echo $weight;?>"/><br>
	<label for="temp" name "temp"> Temperature</label><br>
	<input name="temp" type="text" value="<?php echo $temp;?>"/><br>
	Date<br><input type="text" name="tdate" value="<?php echo $date;?>"><br>
	<label for="gender" name "gender"> Gender</label><br>
	<input type="radio" name="gender" value= "male" <?php echo $mchecked;?>>MALE<br>
	<input type="radio" name="gender" value="female" <?php echo $fchecked;?>>FEMALE<br>
</form>
</body>
</html>