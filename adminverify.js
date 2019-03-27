function verifyInput(username,password){
	var request=new XMLHttpRequest();
	request.open("POST","admindb.php",true);
	request.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	request.onreadystatechange=function(){
		var div=document.getElementById('erroradmdiv');
		if(this.readyState==this.DONE && this.status==200){
			if(this.responseText=="true"){
				window.location="patsignup.php";
			}else{
				div.innerHTML=this.responseText;
			}
		}
	}
	request.send("username="+username+"&password="+password);
}