<?php
@session_start();
session_id();
?>
<html>
<head>
<title> mylogin</title>
<style type="text/css">
	

#frm{
border:solid gray 1px;
width:20%;
border-radius:5px;
margin:100px auto;
background:green;
padding:5px;
text-align: center;
}
#btn1{
color:#fff;
background:#337ab7;
padding:1px;
margin-right:10%;
}
#btn2{
color:#fff;
background:#337ab7;
padding:1px;
margin-left:70%;
}
</style>
</head>
<body>
<div id="frm">
<form method="POST" action="process.php">
<p>
<label>Username:</label>
<input type="text"  id="user" name="user"/>
</p>
<p>
<label>Password:</label>
<input type="password"  id="pass" name="pass"/>
</p>
<p>
<input type="submit"  id="btn1" value="LOGIN" name="login"/>
</p>
Not registered? Click <a href="reg.php">Here</a>

</form>
<?php
if(isset($_SESSION["message"])){
	echo $_SESSION["message"];

}
?>
</div>

</body>
</html>