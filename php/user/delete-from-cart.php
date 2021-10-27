<?php
if ($_POST['option'] == "delete") {
    $id = $_POST["id"];
    session_start();
    $key = array_search($id, $_SESSION["cart"]);
    if($key!==false){
        unset($_SESSION["cart"][$key]);
        $_SESSION["cart"] = array_values($_SESSION["cart"]);
    }
    header("Location: ../../pages/cart.php");
} 
?>