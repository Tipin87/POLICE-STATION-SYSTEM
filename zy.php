<html>
<body>
<?php
$con = mysql_connect('localhost','root','');
$db = mysql_select_db('police1');

if($con){
echo 'Successfully connected to the database.';
} else{
die('Error.');
}
?>
</body>
</html>