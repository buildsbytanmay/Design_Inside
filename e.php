<?php
/* ---------- DATABASE CONNECTION ---------- */
$conn = new mysqli("localhost", "root", "", "Design_inside");

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

/* ---------- FETCH FORM DATA ---------- */
$first_name = trim($_POST['first_name']);
$last_name  = trim($_POST['last_name']);
$name       = $first_name . " " . $last_name;

$email      = trim($_POST['email']);
$phone_num  = trim($_POST['phone_num']);
$phone_num2 = trim($_POST['phone_num2']);

$address    = trim($_POST['address']);
$place      = trim($_POST['place']);
$service    = trim($_POST['service']);

$price_range = $_POST['price_range'];
$start_date  = $_POST['start_date'];
$message     = trim($_POST['message']);


if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    die("<h3>Invalid Email Format</h3>");
}


?>