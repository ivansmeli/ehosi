<html>
<head>
	<meta name="viewpoint" content="width=device-width,initial-scale=1">

	<style type="text/css">
#navMenu {
	margin: 0;
	padding: 0;
}
#body{
background-color: grey;
}
#navMenu ul {
	margin: 0;
	padding: 1;
	line-height: 30px;
}
#navMenu li {
	margin: 0px;
	padding: 0;
	list-style:none;
	float: left;
	position: relative;
    display: inline-block;
}
#navMenu ul li a{
	text-align: center;
	font-family: "Comic Sans Ms",cursive;
	text-decoration:none;
	height: 30px;
	width: 150px;
	display: block;
	color: yellow; 
}
#navMenu ul ul {
	position: absolute;
	visibility: hidden;
	top: 30px;
}
#navMenu ul li:hover ul{
	visibility: visible;
}
#navMenu ul li{
padding: 5px;
border-radius: 10px;
background-color: grey;
width: 200px;
height: 50px;
list-style-type:none;
margin: 0;

}

#navMenu ul li a:hover{

	color:blue;
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
<li><a href="pat_details.php">PATIENTS</a></li>
<li><a href="bil.php">BILLING</a></li>
<li><a href="#">CONTACT US</a></li>
<li><a href="#">ABOUT US</a></li>
<li><a href="#">ADMIN</a></li>
</ul>
<ul>
	<li><a href="#">DOCTORS PORTAL</a>
<ul>
	<Li><a href="login.php">LOGIN</a></LI>
	<ul>
	</Li>
	</ul>
	</div>
</div>

<body>
<div class="w3-content w3-section" style="max_width:500px">
	 <img class="myslides" src="3.png" style="width:100%">   
      <img class="myslides" src="2.jpg" style="width:100%">
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
</html>