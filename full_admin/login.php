<?php

session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "Design_inside");
if($conn->connect_error){
    die("Database connection failed: " . $conn->connect_error);
}

?>