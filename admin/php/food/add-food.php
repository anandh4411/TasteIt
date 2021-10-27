<?php
require_once '../db.php';

$name = $_POST["name"];
$ingredients = $_POST["ingredients"];
$category = $_POST["category"];
$restaurant = $_POST["restaurant"];
$price = $_POST["price"];
$availability = $_POST["availability"];
$image = $_FILES["image"];
$image_name = $_FILES["image"]["name"];
$imagetmp_name = $_FILES["image"]["tmp_name"];
// Path to store uploaded images
$destination = "../../../uploads/".basename($image_name);
$query = "INSERT INTO food_item (name, ingredients, category, restaurant, price, availability, image)
VALUES ('$name', '$ingredients', '$category', '$restaurant', '$price', '$availability', '$image_name')";
mysqli_query($connect, $query);

// move uploaded image into uploads folder
if (move_uploaded_file($imagetmp_name, $destination)){
    header("Location: ../../pages/home.php");
}
else echo 'Cannot upload image! Please check uploads folder permissions. Make it read, write possible.';

?>