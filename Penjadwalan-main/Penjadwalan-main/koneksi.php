<?php
$servername = "localhost";  // Adjust as needed
$username = "root";         // Adjust as needed
$password = "";             // Adjust as needed
$dbname = "penjadwalan";  // Adjust as needed

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
