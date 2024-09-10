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
$db_selected = mysql_select_db(DB_NAME, $link);
if (!$db_selected){
die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}


$ID = $_GET['ID'];

$dbconn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

 $sql = "DELETE FROM users1 WHERE ID = $ID"; 

$result = mysqli_query($dbconn, $sql);

if($result)
{
echo '<center><i><b> Officer Successfully Removed From The Database </b></i></center>';
}
else
{
echo '<center><i><b> Data Not Deleted! <br> Try again!</b></i></center>';
}

header("refresh:3;url=removal.html");

mysqli_close($dbconn);

?>