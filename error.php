<?php


if (ISSET ($_GET["register_btn"])){$SESSION_start();

$value=mysql_real_escape_string($_GET["username"]);
$value2=mysql_real_escape_string($_GET["password"]);
$value3=mysql_real_escape_string($_GET["password2"]);
   //create user
if($password == $password2){
	$password = md5($password);

	$sql="INSERT INTO users (username,password,password2) VALUES ('$username', '$password', '$password2')";
	mysql_query($db, $sql);
	$_SESSION['message']="You are now logged in";
	$_SESSION['username']=$username;
}
else{
	$SESSION['message']= "The Two Passwords don't match";
}
}

?>