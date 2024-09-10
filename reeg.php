<?php 

if(isset($_GET['Register']))
{
	$username = $_GET['Username'];
	$password = $_GET['Password'];
	$password2 = $_GET['Password2'];

	$dbconn = mysqli_connect('localhost','root','','police1');

	if ($dbconn)
	{
		if($password==$password2)
		{
			
			$password = md5($password);
			$password2 = md5($password2);
			
$sql = "INSERT INTO users1 (Username, Password, Password2) VALUES ('$username','$password', '$password2')";
			if(mysqli_query($dbconn,$sql))
		{
				echo("<i><center><b>New Officer successfully registerd</b></center></i>");
		} 
		else
		{
				echo("<b>Please fill in valid credentials</b>");
		}
		}
	}
	header("refresh:2;url=OCS.php");
}	
	
?>








