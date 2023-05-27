<?php
session_start();

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ramzan_traders";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// User login
if (isset($_POST['userName']) && isset($_POST['password'])) {

    $userName = $_POST['userName'];
    $password = $_POST['password'];
    
    $sql = "SELECT * FROM sign_up WHERE userName='$userName' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) == 1) {
        $_SESSION['userName'] = $userName;
        // header("Location: login.html");

        echo "hello";
    } else {
        echo "Invalid username or password";
    }
}

mysqli_close($conn);
?>
