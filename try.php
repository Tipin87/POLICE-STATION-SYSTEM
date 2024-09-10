<?php

session_start();

define('DB_NAME', 'police1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST','localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
die('Connection error' . mysql_error());
}
$db_selected = mysql_select_db($link, DB_NAME);
if (!$db_selected){

die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

$value = $_GET['Reporter'];
$value2 = $_GET['ID_number'];
$value3 = $_GET['Date'];
$value4 = $_GET['Occurrence'];


$sql = "INSERT INTO occurrence (Reporter, ID_number, Date, Occurrence ) VALUES ('$value', '$value2', '$value3', '$value4')";
if (!mysql_query ($sql)){
die('Error: ' . mysql_error() );
}
else{	 
	echo '<center><b>Record Successful Added To The Database</center></b>';

header("refresh:3;url=report.html");
}

mysql_close();
?>