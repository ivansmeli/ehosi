<html>
<head>
	<meta name="viewpoint" content="width=device-width,initial-scale=1">

	<style type="text/css">
#navMenu {
	margin: 0;
	padding: 0;
}
#body{
background-color: gray;
}
#navMenu ul {
	margin: 0;
	padding: 0;
	list-style-type: none;
}
#navMenu ul li{
float: left;
background-color: black;
opacity: .8;
line-height: 40px;
text-align: center;
font-size: 20px;
}
#navMenu ul li a{
	text-decoration:none;
	display: block;
	color: white; 
}
#navMenu ul li a:hover{

	background-color:green;
}
#navmenu ul li ul li{
	display: none;
}
#navMenu ul li:hover ul li{
	display: block;
}


.myslides{
display: none;
}
	</style>
<title> doctor</title>
</head>
<div id="wrapper">
	<div id="navMenu">
	<div id="body">
	<ul>
<li><a href="#">PATIENTS</a>
<ul>
<li>  <a href="insertpatient.php">Add patients</li>
</ul>
</li>
<li><a href="#">BILLING</a>
<ul>
<li> <a href="hosi.php">Pharmacist</li>
</ul>
</li>
<li><a href="#">CONTACT US</a>
<ul>
<li><a href="#">Find Us</li>
<li><a href="nav4.php">Quick Links</li>
</ul>
</li>
<li><a href="#">ABOUT US</a>
<ul>
<li><a href="aboutus.php">About</li>
<li><a href="#">Refferrals</li>
<li><a href="#">Partnership</li>
<li><a href="#"> Image Gallery</li>
</ul>
</li>
<li><a href="#">ADMIN</a>
<ul>
<li><a href="adminlogin.php">Login</li>
</ul>
</li>
<li><a href="#">DOCTORS PORTAL</a>
<ul>
	<li><a href="login.php">Login</a></li>
	
</ul>
</li>
	</ul>
	</div>
</div>

<body>
<div class="w3-content w3-section" style="max_width:500px">
	 <img class="myslides" src="3.png" style="width:100%" height="80%">   
      <img class="myslides" src="2.jpg" style="width:100%" height="80%">
</div>
<script >
var myIndex=0;
kimeli();
function kimeli(){

var i;
var x=document.getElementsByClassName("myslides");
for(i=0;i<x.length;i++){

	x[i].style.display="none";
}
myIndex++;
if(myIndex>x.length){myIndex=1}
	x[myIndex-1].style.display="block";
setTimeout(kimeli,4000);//change image every 4seconds
}
</script>

</body>

<h1 bgcolor="green" text-align="center"><i>Follow us</i></h1>
<a href="https://web.whatsapp.com"><img src="whatsapp.png" height="70px"> </a> 
<a href="https://www.fb.com"><img src="fb.png" height="70px"></a> 
<a href="https://www.twitter.com"><img src="twitter.png" height="70px"></a>
</html>