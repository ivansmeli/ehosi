<!DOCTYPE html>
<html>
	<head>

		<title> admlogin</title>
		<script type="text/javascript" src="adminverify.js">
		</script>
<style type="text/css">
#frm{
border:solid gray 1px;
width:20%;
height: inherit;
border-radius:5px;
margin:100px auto;
background:green;
padding:20px;
text-align: center;

}
#btn3{
color:#fff;
background:#337ab7;
padding:1px;
margin-left:70%;
}
body{
	background-color: #e5e4d7;
}
</style>	
	</head> 
	<body>
<script>
document.getElementById("myBtn").addEventListener("click", displayDate);
function displayDate() {
    document.getElementById("date").innerHTML = Date();
}
</script>
	<div id="frm">
	<form method="POST" action="admlogin.php">
		<label> Username</label>
		<input type="text" id="username" name="username" placeholder=Username><br><br>
		<label> Password</label>
		<input type="password" id="password" name="password" placeholder=********><br><br>
		<input type="button" id="btn3" onclick="verifyInput(document.getElementById('username').value,document.getElementById('password').value)" value="LOGIN" >
	</form>
	<div id="erroradmdiv"></div>
	</div>
	</body>
</html>