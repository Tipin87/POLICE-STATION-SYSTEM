<!DOCTYPE HTML>
<html><!-- This is the begining of the main page that houses the necessary forms that are to be filled when 
recording an Occurrence in the Occurrence Database system -->
<title> Kenya Police Service </title>
<link rel="stylesheet" href="css/main.css" /><!-- a link that links the HTML file with the CSS file -->
<link rel="icon" href="images/icon.gif"/><!-- Icon of the page -->
<style type="text/css">
	table{
	border: 2px solid green;
	background-color:#FFC;
	align:center;
	}
	
	th{
	border-bottom:5px solid #000;
	}
	td{
	border-bottom:2px solid #666;
	}
	body{
		background-color:#0000e6;
		
	}
	h2 a:hover{
		color:#00ccff;
	}
	input:hover{
		color:#00b300;
	}
	p{
		text-align:center;
	}
	
</style>
<body>
<div>
<img src="images/logo.png"/><hr><!-- Police logo -->
<h1><u><head> Traffic Department </head></u></h1><!-- Name of department -->
</div>
<center><a href="OCS.php"><img class="circle" src="images/cc1.gif"/></a></center><!-- A link redirecting back to the main page -->
<hr>
<h1><u>Officer's Details</u></h1>
<p><a titlt="print screen" alt="print screen" onclick="window.print();" target="_blank"  > <input type="button" value="Print Report" style="cursor:pointer;" align="center"></a></p>


<?php
define('DB_NAME', 'police1');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST','localhost');

$dbconn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME);

$sqlget = "SELECT * FROM users1";
$sqldata = mysqli_query($dbconn, $sqlget) or die('error');

echo "<table>";
echo "<tr><th>ID</th><th>Username</th><th>Password</th><th>Password2</th></tr>";

while($row = mysqli_fetch_array($sqldata,MYSQLI_ASSOC)){
echo "<tr><td>";
echo $row['ID'];
echo "</td><td>";
echo $row['Username'];
echo "</td><td>";
echo $row['Password'];
echo "</td><td>";
echo $row['Password2'];
echo "</td><tr>";
}

echo "</table>";

?>
</body>
</html>