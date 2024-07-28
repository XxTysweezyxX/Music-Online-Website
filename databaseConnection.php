<?php
// Database connection parameters
$servername = "localhost";
$username_db = "root";
$password_db = "";
$database = "musiconlinedb";

// Create connection
$conn = new mysqli($servername, $username_db, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
