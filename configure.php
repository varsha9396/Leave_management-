<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "leave_management_system";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?> 
