<?php

include('connect.php');
include ('signup.php');

$value = $_GET['username'];
$value2 = $_GET['password'];
$value3 = $_GET['password2'];

$value2 = md5($value2);
$value3 = md5($value3);

$sql = "INSERT INTO users1 (username, password, password2 ) VALUES ('$value', '$value2', '$value3')";
if (!mysql_query($sql)){
	echo 'Successful'; 
die('Error: ' . mysql_error());
}
 
 
header('Location:mmainpage.html');

mysql_close();
?>