<?php
session_start();
include '../db.php';

$id = $_POST["id"];
if(empty($_SESSION["cart"])){
    $_SESSION["cart"] = array();
}
array_push($_SESSION["cart"], $id);
header("Location: ../../pages/cart.php");
?>