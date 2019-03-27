<?php
$pid="";
$name="";
$fee="";

$db=new PDO("mysql:host=localhost;dbname=group_project","root","");

if(isset($_POST["search"])){
$pid=$_POST['pid'];
 	if($db==true){
 		$sql="SELECT pat_details.*,diagnosis_prescription.* FROM pat_details INNER JOIN diagnosis_prescription ON pat_details.pid=diagnosis_prescription.patid WHERE `pid`=$pid";
 		$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
 			foreach ($result as $key => $value){
 				$pid=$value['pid'];
 				$name=$value['name'];
 				$fee=$value['fee'];
 	}
 }
}
if (isset($_POST["submit"])) {
	$pid=$_POST['pid'];
	$other=$_POST['others'];
	$fee=$_POST['fee'];

	$sum=$other+$fee;
	$amount=0;
	$sql="SELECT * FROM billing WHERE patid=$pid";
	$result=$db->query($sql)->fetchAll(PDO::FETCH_NAMED);
	foreach ($result as $key => $value){
 				$pid=$value['patid'];
 				$amount=$value['amount'];
 			}
 			$newamount=$amount-$sum;
 			$sql="UPDATE billing SET amount='$newamount' where patid='$pid'";
 			$result=$db->query($sql);
}
?>
<html>
<head>
	<title>Hosi</title>
		<script type="text/javascript">
		function fetchPresc(){
			var request=new XMLHttpRequest();
			request.open("GET","viewpresc.php",true);
			request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			request.onreadystatechange=function(){
				var div=document.getElementById('display');
				if(this.readyState==4 && this.status==200){
					div.innerHTML=this.responseText;
				}
			}
			request.send();
		}

	</script>
</head>
<header><h3>Pay Bills</h3>
<div>
	<div class="header">
</div>
<button onclick="fetchPresc()">View prescriptions</button><br><br>
<div id="display"></div>
</header>
<body style="background-color:lightgrey;">
<fieldset><br>
<form action="hosi.php" method="post">
	Patient's ID:<input name="pid" type="text" value="<?php echo $pid;?>">
	<input type="submit" name="search" value="SEARCH"><br><br>
	Patient's Name:<input name="name" type="text" value="<?php echo $name;?>"><br><br>
	Doctors Fee:<input name="fee" type="text" value="<?php echo $fee;?>"><br><br>
	Other Charges:<input name="others" type="text"><br><br>
	<input type="submit" name="submit" value="SUBMIT">
	</form>
</fieldset>	
</body>
</html>