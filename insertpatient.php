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

if(isset($_POST["submit"])){
$pid=$_POST['pid'];
$name=$_POST['name'];
$dob=$_POST['dob'];
$location=$_POST['location'];
$height=$_POST['height'];
$weight=$_POST['weight'];
$bp=$_POST['bp'];
$temp=$_POST['temp'];
$gender=$_POST['gender'];
$date=$_POST['tdate'];

$db=new PDO("mysql:host=localhost;dbname=group_project","root","",array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,INFO_GENERAL));
 	if($db==true){
 		try{
 		$table=$db->query("CREATE TABLE if not exists pat_details(pid INT PRIMARY KEY,name VARCHAR(254),dob varchar(10),location varchar(20),height INT,weight INT,bp VARCHAR(254),temp INT,gender VARCHAR(10),todays_date varchar(20))");
 		$insert=$db->query("INSERT INTO pat_details(pid,name,dob,location,height,weight,bp,temp,gender,todays_date) VALUES('$pid','$name','$dob','$location','$height','$weight','$bp','$temp','$gender','$date')");
 		
 		}catch(PDOException $e){
 			die($e->getMessage());
 		}
 	}else{
 		echo "Failed to enter details";
 	}
 }
 if (isset($_POST["update"])) {
 	# code...
 }
?>
<!DOCTYPE html>
<html>
<head>
	<title>details</title>
</head>
<h3>RECEPTION</h3>
<h5>PLEASE ENTER PATIENTS DETAILS</h5>
<body style="background-color:lightgrey;">
<form method="POST" action="insertpatient.php">
	<label for="pid" name "pid"> ID</label><br>
	<input name="pid" type="text" value="<?php echo $pid;?>" required/>
	<input type="submit" name="search" value="search"><br>
	<label for="name" name "name"> Names</label><br>
	<input name="name" type="text" value="<?php echo $name;?>" required/><br>
	Date of Birth<br><input type="text" name="dob" value="<?php echo $dob;?>" ><br>
	Location<br><input type="text" name="location" value="<?php echo $location;?>" ><br>
	<label for="height" name "height"> Height</label><br>
	<input name="height" type="text" value="<?php echo $height;?>"/><br>
	<label for="bp" name "bp"> Blood Pressure</label><br>
	<input name="bp" type="text" value="<?php echo $bp;?>"/><br>
	<label for="weight" name "name"> Weight</label><br>
	<input name="weight" type="text" value="<?php echo $weight;?>"/><br>
	<label for="temp" name "temp"> Temperature</label><br>
	<input name="temp" type="text" value="<?php echo $temp;?>"/><br>
	Date<br><input type="text" name="tdate" value="<?php echo $date;?>" required><br>
	<label for="gender" name "gender"> Gender</label><br>
	<input type="radio" name="gender" value= "male" <?php echo $mchecked;?>>MALE<br>
	<input type="radio" name="gender" value="female" <?php echo $fchecked;?>>FEMALE<br>
	<br><input type="submit" name="submit" value="SUBMIT">
	<input type="submit" name="UPDATE" value="UPDATE">
</form>
</body>
</html>