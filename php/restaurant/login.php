<?php
require_once '../db.php';

$name = $_POST["name"];
$location = $_POST["location"];
$owner_name = $_POST["owner_name"];
$phone = $_POST["phone"];

$query = "SELECT * FROM restaurant";
$result = mysqli_query($connect, $query);
while($row = mysqli_fetch_array($result)){
    if($name == $row["name"] && $location == $row["location"] && $owner_name == $row["owner_name"] && $phone == $row["phone"]){
        session_start();
        $_SESSION["restaurant-name"] = $name;
        $_SESSION["restaurant-id"] = $row["id"];
        header("Location: ../../pages/sell.php");
    }
    else echo 'Credentials Doesnot Match!';
}

?>