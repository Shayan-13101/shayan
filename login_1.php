
<?php

require 'user_configure.php';
if (isset($_POST["login"])) {


$userName = $_POST["userName"];
$password = $_POST["password"];
$result = mysqli_query($conn, "SELECT *FROM ramzan_traders WHERE username ='$userName'");
$row = mysqli_fetch_assco($result);
if(mysqli_num_rows($result) > 0){
    if($password == $row["password"]){
        $_SESSION["login"] = true;
        $_SESSION["id"] = $row["id"];
        header("Location: index.php");


    }else{
        echo"Wrong Password";
    }
}else{
    echo"User Not Register ";
}
echo"Register ";

}
?>