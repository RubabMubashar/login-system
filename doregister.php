<?php
session_start();

$username = $_POST["username"];
$password  = $_POST["password"];
$email  = $_POST["email"];

$_SESSION["username"] = $username;
$_SESSION["email"] = $email;
$_SESSION["password"] = $password;

header("location:login.php");

?>