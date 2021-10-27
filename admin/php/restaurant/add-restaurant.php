<?php
require_once '../db.php';

$name = $_POST["name"];
$location = $_POST["location"];
$category = $_POST["category"];
$owner_name = $_POST["owner_name"];
$phone = $_POST["phone"];

$query = "INSERT INTO restaurant (name, location, category, owner_name, phone)
VALUES ('$name', '$location', '$category', '$owner_name', '$phone')";
mysqli_query($connect, $query);
header("Location: ../../pages/home.php");

?>