<?php

require_once '../db.php';

$name = $_POST["name"];
$phone = $_POST["phone"];
$location = $_POST["location"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];

if ($password == $cpassword) {
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO user (name, phone, location, password) VALUES ('$name', '$phone', '$location', '$hashed_password')";
    mysqli_query($connect, $query);
    header("Location: ../../index.php");
}
else{
    echo 'Passwords Doesnt Match!';
}
?>