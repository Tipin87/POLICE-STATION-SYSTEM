<?php
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

echo 'connected';

?>

<?php
if (ISSET ($_GET['login_btn'])){
$Username = mysql_real_escape_string($_GET ["Username"] );
$Password = mysql_real_escape_string($_GET ["Password"] );
$Password = md5($Password);

$sql = "SELECT Username, Password FROM users WHERE Username = '$Username' AND Password='$Password'";
$result= mysql_query($db_selected, $sql);
if(mysqli_num_rows($result) == 1){
	$SESSION['message'] = "You are logged in";
	$SESSION['Username'] = $Username;
		
}
	else
	{
		$SESSION['message'] = "Username/Password incorrect";

			}
}

header('Location:report.html');
mysql_close();

?>