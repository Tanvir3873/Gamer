<?php
$servername = "localhost"; // Corrected the case
$username = "root";
$password = ""; 
$dbname = "gamer"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
