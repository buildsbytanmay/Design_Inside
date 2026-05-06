<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: ../index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Completed Projects</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}
body{
    background:#f5f5f5;
}
</style>
</head>

<body>

<!-- <nav>
    <div class="logo">Design_Inside</div>
    <div>
        <a href="dashboard.php">Home</a>
        <a href="customer.php">Customer</a>
        <a href="completed.php">Completed</a>
        <a href="logout.php">Logout</a>
    </div>
</nav> -->
<nav>
    <a href="http://localhost/Design_Inside/">
        <div class="logo"></div>
    </a>

    <!-- Hamburger -->
    <div class="hamburger" onclick="toggleMenu()">☰</div>

    <div class="menus">
        <a class="submenus underline" href="dashboard.php">DASHBOARD</a>
        <a class="submenus underline" href="customer.php">CUSTOMER</a>
        <a class="submenus underline" href="completed.php">COMPLETED</a>
        <a class="submenus underline" href="logout.php">LOGOUT</a>
    </div>
</nav>