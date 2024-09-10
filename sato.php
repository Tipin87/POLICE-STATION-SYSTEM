<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "police1";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$ree =$_POST['Reporter'];
$id =$_POST['ID_number'];
$Date =$_POST['Date'];
$Occurrence =$_POST['Occurrence'];

$sql = "INSERT INTO Occurrence (Reporter, ID_number, Date, Occurrence)
VALUES ('$ree ', '$id', '$Date', '$Occurrence')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

