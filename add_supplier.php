<?php
require 'user_configure_1.php';
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ramzan_traders";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// User registration
// if (isset($_POST['username']) && isset($_POST['password'])) {
    $supplierName = $_POST['supplier_name'];
    $supplierContact= $_POST['supplier_contact'];
    $supplierAddress = $_POST['supplier_address'];
    
    $sql = "INSERT INTO supplier (supplier_name, supplier_contact, supplier_address) VALUES ('$supplierName', '$supplierContact', '$supplierAddress')";
    if (mysqli_query($conn, $sql)) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
// }

mysqli_close($conn);
?>
