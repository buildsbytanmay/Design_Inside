<?php

session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "Design_inside");
if($conn->connect_error){
    die("Database connection failed: " . $conn->connect_error);
}

// LOGIN
if(isset($_POST['login'])){
    $user_input = trim($_POST['user_input']);
    $password = trim($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM Admins WHERE (email=? OR username=?) AND password=?");
    $stmt->bind_param("sss", $user_input, $user_input, $password);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if($user){
        $_SESSION['admin'] = $user['username'];
        header("Location: admin/dashboard.php");
        exit;
    }else{
        echo "<script>alert('❌ Wrong username/email or password'); window.location.href='index.php';</script>";
    }
}

?>