<?php
// Database connection settings
$servername = "localhost";  // Replace with your server if it's not localhost
$username = "root";         // Replace with your database username
$password = "";             // Replace with your database password
$dbname = "smm_database";   // Replace with your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
