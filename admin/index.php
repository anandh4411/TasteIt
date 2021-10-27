<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tasteit Admin Login</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<body>
    <?php
        if(isset($_SESSION["username"])){
            header("Location: pages/home.php");
        }
        else{
            echo '<div class="container">
                    <div class="card" style="width: 25rem;">
                        <form action="php/login.php" method="post">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <style>
                        .card {
                            margin: 0 auto; 
                            float: none; 
                            margin-bottom: 10px; 
                            background-color: rgb(230, 230, 230);
                            padding: 20px;
                            border-radius: 10px;
                            margin-top: 15%;
                        }
                    </style>
                </div>';
        }
    ?>
</body>
</html>