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
    $name = $_POST["name"];
    $cnic = $_POST["cnic"];
    $shopName = $_POST["shopName"];
    $contactNo = $_POST["contactNo"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postalCode = $_POST["postalCode"];
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirmPassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM sign_up WHERE userName = '$userName'");

    if (strlen($cnic)>13 || strlen($cnic)<13) {


        echo "CNIC is invalid!";
    
        // echo "<script> document.getElementById('ibox').style.dispaly = 'block' </script>";
        // echo "<script> document.getElementById('incorrect_cnic').innerHTML = 'CNIC is invalid!' </script>";
    }
    else{
    
        if (strlen($contactNo)>11 || strlen($contactNo)<11) {
    
    
            echo "Number is invalid!";
        
            // echo "<script> document.getElementById('ibox').style.dispaly = 'block' </script>";
            // echo "<script> document.getElementById('incorrect_cnic').innerHTML = 'CNIC is invalid!' </script>";
        }
        else{
    
    if (mysqli_num_rows($duplicate) > 0) {
        
            echo "This User Name is already taken";
            // "<script> alert('This User Name is already taken'); </script>";
        
    
    }
    else{
        if ($password == $confirmPassword) {
            $sql = "INSERT INTO sign_up (name,cnic,shopName,contactNo,address,city,postalCode,userName,password,confirmPassword) VALUES ('$name','$cnic','$shopName','$contactNo','$address','$city','$postalCode','$userName','$password','$confirmPassword')";
            mysqli_query($conn,$sql);
            // prompt message 
            // if ($conn->query($sql) ===  TRUE) {
            echo "WELCOME";
    //     }else {
            
    //         echo "Error".$sql;
    //     }
         }else{
        echo "Password did not match";
    }
    }
    }
    }
    
    
    // $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    // if (mysqli_query($conn, $sql)) {
    //     echo "Registration successful!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    // }
// }

mysqli_close($conn);
?>
