<!DOCTYPE HTML>
<html><!-- This is the begining of the main page that houses the necessary forms that are to be filled when 
recording an Occurrence in the Occurrence Database system -->
<title> Kenya Police Service </title>
<link rel="stylesheet" href="css/main.css" /><!-- a link that links the HTML file with the CSS file -->
<link rel="icon" href="images/icon.gif"/><!-- Icon of the page -->
<?php
{
newPassword = Request["newPassword"];
confirmPassword = Request["confirmPassword"];
token = Request["token"];
if IsPost
{
    // input testing is ommitted here to save space
    retunValue = ResetPassword(token, newPassword); 
}
}
?>
<body>
<div>
<img src="images/logo.png"/><hr><!-- Police logo -->
<h1><u><head> Traffic Department </head></u></h1><!-- Name of department -->
</div>
<center><a href="OCS.php"><img class="circle" src="images/cc1.gif"/></a></center><!-- A link redirecting back to the main page -->
<hr>

<h1>Change Password</h1>

<form method="post" action="">

<label for="newPassword">New Password:</label> 
<input type="password" id="newPassword" name="newPassword" title="New password" />

<label for="confirmPassword">Confirm Password:</label> 
<input type="password" id="confirmPassword" name="confirmPassword" title="Confirm new password" />

<label for="token">Pasword Token:</label> 
<input type="text" id="token" name="token" title="Password Token" />

<p class="form-actions">
<input type="submit" value="Change Password" title="Change password" />
</p>

</form>
</body>

