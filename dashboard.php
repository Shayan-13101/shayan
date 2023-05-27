<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['userName'])) {
    header("Location: login.html");
    exit;
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: login.html");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome </h2>
        
    </body>
    </html>
