<?php
session_start();
$id = $_POST["id"];
require_once '../db.php';

$name = $_POST["name"];
$ingredients = $_POST["ingredients"];
$category = $_POST["category"];
$restaurant = $_POST["id"];
$price = $_POST["price"];
$availability = $_POST["availability"];
$image = $_FILES["image"];
$image_name = $_FILES["image"]["name"];
$imagetmp_name = $_FILES["image"]["tmp_name"];
// Path to store uploaded images
$destination = "../../uploads/".basename($image_name);
$query = "UPDATE food_item SET name = '$name', ingredients = '$ingredients', category = '$category', restaurant = '$restaurant', price = '$price', availability = '$availability', image = '$image_name'
WHERE id = $id";
mysqli_query($connect, $query);

// move uploaded image into uploads folder
if (move_uploaded_file($imagetmp_name, $destination)){
    header("Location: ../../pages/sell.php");
}
else echo 'Cannot upload image! Please check uploads folder permissions. Make it read, write possible.';

?>