 <?php
    $dbconn = mysqli_connect('localhost','root','','police1');

    if ($dbconn) 
    {
        if (isset($_GET['submit']))
         {
          
          $username = $_GET['Username'];
          $password = md5($_GET['Password']);
		  
		 
          
          $sql = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
          $result = mysqli_query($dbconn, $sql);
     
    if (mysqli_fetch_array($result)) 
    {	
    	if ($password && $username)
    	{
		echo "<b><center>Welcome $username To Traffic Department O.B System</b> <br><br><br><br> <i>MOTTO:Utumishi Kwa Wote!</i></center>";
		header("refresh:3;url=OCS.php");
    	}

    }else
    { 
        echo "<center><b><i>Error</i> <br> <br> Invalid Login Details. Try Again</b></center>";
		header("refresh:3;url=teee.html");
    }
         }
    }
    else
    {
        echo "Error..!";
    }
	
?>
