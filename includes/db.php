<?php
// 1. Database Credentials
$servername = "localhost";
$username   = "root"; 
$password   = ""; 
$dbname     = "naturewise_db";   
// 2. Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// 3. Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Optional: specific character set for handling special characters
$conn->set_charset("utf8mb4");
?>