<?php
require_once '../db.php';

$name = $_POST["name"];
$location = $_POST["location"];
$category = $_POST["category"];
$owner_name = $_POST["owner_name"];
$phone = $_POST["phone"];

if($connect){
    $query = "INSERT INTO restaurant (name, location, category, owner_name, phone)
    VALUES ('$name', '$location', '$category', '$owner_name', '$phone')";
    mysqli_query($connect, $query);
    $query2 = "SELECT * FROM restaurant ORDER BY id DESC LIMIT 0, 1";
    $result = mysqli_query($connect, $query2);
    $id = 0;
    while($row = mysqli_fetch_array($result)){
        $id = $row["id"];
    }
    echo $id;
    session_start();
    $_SESSION["restaurant-name"] = $name;
    $_SESSION["restaurant-id"] = $row["id"];
    header("Location: ../../pages/home.php");
}
else{
    echo 'Connection with database is not successful!';
}

?>