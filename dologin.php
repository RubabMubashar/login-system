<?php
session_start();

$email = $_POST["email"];
$password  = $_POST["password"];

if (isset($_POST["email"]) && $_SESSION["email"] == $email) {
    
    if (isset($_POST["password"]) && $_SESSION["password"] == $password) {
        header("location:welcome.php");
    } else {
        header("location:wrong.php?error=2");
    }
    

} else {
    header("location:wrong.php?error=1");
}



?>