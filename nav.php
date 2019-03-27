<?php
/*@session_start();
if(isset($_SESSION["name"])&&isset($_SESSION["message"])){
	echo $_SESSION["message"]." ".$_SESSION["name"];
}
else{
	header("location:doctor.php");
}
*/
?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
	body{
		background-color: grey;
	}
	#navbar ul li a {
	display: inline;
	padding: 2em 1em;
	text-decoration: none;
	font-family: Arial;
	color:blue;
	background-color: #FF99CC;
	height: inherit;
	
}
#navbar ul  li {
	display: inline;
	height: auto;
}
#navbar ul li a:hover{
	color:#FFF;
	background-color: FF6600;
}
#navbar ul{
	padding: 5px;
	list-style-type: circle;
	text-align: center;
	background-color: #009933;
	margin: 0px;
	border-radius: 5px;
	height: 50px;
}
</style>
</head>
<body>
<a href="logout.php" target="primary">LOGOUT</a>
<div id="navbar">
<ul>
<li><a href="pdetails.php" target="frame3">Patient Details</a></li>
<li><a href="diagnosis.php" target="frame2">Diagnosis</a></li>
<li><a href="prescription.php" target="frame2">View</a></li>
<li><a href="assignment.php" target="frame3">Assignment</a></li>
</ul>
</div>
</body>
</html>