<?php
$id = $_GET["id"];
require_once '../db.php';
$query = "DELETE FROM food_item WHERE id = '$id'";
mysqli_query($connect, $query);
header("Location: ../../pages/sell.php");
?>