<?php

if(isset($_GET["submit1"]))
{

$link=mysqli_connect("localhost", "root","");
mysqli_select_db($link, "police1");
$count=0;
$sql="SELECT * FROM users1 where username='$_GET['username']' && password2='$_GET['password2']' ";
$count=mysqli_num_rows($sql);
}
?>