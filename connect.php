<?php
//creating connection
define('DB_NAME', 'police1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST','localhost');

$dbconn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$link = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);

if (!$link){
die('Connection error' . mysql_error());
}
$db_selected = mysql_select_db(DB_NAME, $link);
if (!$db_selected){
die('Can\'t use ' . DB_NAME . ': ' . mysql_error());
}

echo 'Successfully Connected';
?>