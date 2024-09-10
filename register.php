<!DOCTYPE HTML>
<html><!-- This is the begining of the main page of the O.B system -->
<link rel="stylesheet" href="css/main.css" /><!-- a link that links the HTML file with the CSS file -->
<link rel="icon" href="images/icon.gif"/><!-- Icon of the page -->
<body>
<style>
	body{
		background-color:#0000e6;
		color:#e6e6e6;
	}
	input:hover{
		color:#00b300;
	}
	
</style>
<title> Kenya Police Service</title>
<div>
<img src="images/logo.png"/><hr>
<h1><u><head> Traffic Department </head></u></h1><!-- Name of department -->
</div>
<p><center><a href="OCS.php"><img class="circle" src="images/cc1.gif"></a></center></p><!-- A link redirecting back to the main page -->

<hr>
<!-- Registration of a New Police Officer -->
<h1><u> Officer Registration </u></h1>
<br>

<body>

<form action="reeg.php" method="GET" onsubmit="return Validate()" name="vform">
<div id="reg_form">
<h2>Username: <input type="text" class="textInput" name="Username" placeholder="Username"> </h2>
<div id="name_error" class="val_error"></div>
<h2>Password: <input type="password" class="textInput" name="Password" placeholder="Password" > </h2>
<h2>Password2:<input type="password" class="textInput" name="Password2" placeholder="Password2" > </h2>
<div id="password_error" class="val_error"></div>
<h2><input type="submit" value="Register" name="Register" class="textInput"  style="cursor:pointer;"></h2>
<h2><input type="reset" value="Reset" class="textInput"  style="cursor:pointer;"></h2>

</form>
</div>

<script type="text/JavaScript">

//getting all input objects
var Username = document.forms["vform"]["Username"];
var Password = document.forms["vform"]["Password"];
var Password2 = document.forms["vform"]["Password2"];

//getting all error objects
var name_error = document.getElementById("name_error");
var password_error= document.getElementById("password_error");

//setting all event listeners
Username.addEventListener("blur", UsernameVerify, true);
Password.addEventListener("blur", PasswordVerify, true);

//validate function
function Validate(){
	if (Username.value == ""){
		Username.style.border = "1px solid red";
		name_error.textContent = "Username is required";
		Username.focus();
		return false;
	}
	if (Password.value == ""){
		Password.style.border = "1px solid red";
		password_error.textContent = "Password is required";
		Password.focus();
		return false;
	}
	//checking if the two passwords don't match
	if(Password.value != Password2.value){
		Password.style.border = "1px solid red";
		Password2.style.border = "1px solid red";
		password_error.innerHTML ="The two passwords don't match";
		return false;
	}
}

//event handler functions
function UsernameVerify(){
	if(Username.value != ""){
		Username.style.border = "1px solid red";
		name_error.innerHTML = "";
		return true;
	}
}

function PasswordVerify(){
	if(Password.value != ""){
		Password.style.border = "1px solid red";
		password_error.innerHTML = "";
		return true;
	}
}
</script>
</body>
</html><!-- End of the code -->


