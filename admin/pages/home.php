<?php session_start();
if (!isset($_SESSION["admin-username"])){
  header("Location: ../index.php");
}
?>
<!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tasteit Admin</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link rel="stylesheet" href="../css/style.css">
  </head>
  <body>
  
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a style="margin-left: 10px;" class="navbar-brand" href="#">Tasteit Admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="home.html">Home</a>
              </li>
              <?php
                echo '<li class="nav-item">
                        <a class="nav-link" href="#">'.$_SESSION["admin-username"].'</a>
                      </li>';
              ?>
              <li class="nav-item">
                <a class="nav-link" href="../php/logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      <!-- Navbar End -->
  
      <div class="container">
        <div class="row">

            <!-- New Restaurent -->
            <div class="card" style="width: 25rem;">
              <h4>Add a new Restaurant</h4>
              <form action="../php/restaurant/add-restaurant.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Restaurant Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Location</label>
                    <input name="location" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Location"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-select" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="ethnic">Ethnic</option>
                      <option value="fast_food">Fast food</option>
                      <option value="fast_casual">Fast casual</option>
                      <option value="casual_dining">Casual dining</option>
                      <option value="premium_casual">Premium casual</option>
                      <option value="family_style">Family style</option>
                      <option value="fine_dining">Fine dining</option>
                      <option value="brasserie_and_bistro">Brasserie and bistro</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Owner Name</label>
                    <input name="owner_name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Owner Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input name="phone" type="tel" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- New Restaurent End -->

            <!-- New Food -->
            <div class="card" style="width: 25rem;">
              <h4>Add a new Food Item</h4>
              <form action="../php/food/add-food.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Item Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Ingredients</label>
                    <input name="ingredients" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Ingredients"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-select" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="breakfast">Breakfast</option>
                      <option value="lunch">Lunch</option>
                      <option value="dinner">Dinner</option>
                      <option value="desserts">Desserts</option>
                      <option value="wine_card">Wine Card</option>
                      <option value="drinks">Drinks</option>
                      <option value="tea">Tea</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Restaurant</label>
                    <select name="restaurant" class="form-select" aria-label="Default select example">
                      <option selected>Select Restaurant</option>
                      <?php
                      include '../php/db.php';
                      $query = "SELECT * FROM restaurant";
                      $result = mysqli_query($connect, $query);
                      while($row = mysqli_fetch_array($result)){
                        echo '<option value="'.$row["name"].'">'.$row["name"].'</option>';
                      }
                      ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input name="price" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Price"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Availability</label>
                    <select name="availability" class="form-select" aria-label="Default select example">
                      <option selected>Available or Not</option>
                      <option value="available">Available</option>
                      <option value="not_available">Not Available</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input name="image" type="file" class="form-control" id="exampleInputEmail1" placeholder="Upload Image"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- New Food End -->
  
        </div>

        <!-- All Restaurents List -->
        <div style="margin-top: 100px;" class="container">
          <h2 style="margin-bottom: 60px;" class="text-center">List of Restaurents we have</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Location</th>
                <th scope="col">Category</th>
                <th scope="col">Owner Name</th>
                <th scope="col">Phone</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../php/db.php';
              $query = "SELECT * FROM restaurant";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                            <th scope="row">'.$row["id"].'</th>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["location"].'</td>
                            <td>'.$row["category"].'</td>
                            <td>'.$row["owner_name"].'</td>
                            <td>'.$row["phone"].'</td>
                            <td><a href="../php/restaurant/update-restaurant.php?id='.$row["id"].'" class="btn btn-primary">Update</a></td>
                            <td><a href="../php/restaurant/delete-restaurant.php?id='.$row["id"].'" class="btn btn-danger">Delete</a></td>
                          </tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- All Restaurents List End -->

        <!-- All Food Item List -->
        <div style="margin-top: 100px;" class="container">
          <h2 style="margin-bottom: 60px;" class="text-center">List of Food Items we have</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Ingredients</th>
                <th scope="col">Category</th>
                <th scope="col">Restaurant</th>
                <th scope="col">Price</th>
                <th scope="col">Availability</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../php/db.php';
              $query = "SELECT * FROM food_item";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                            <th scope="row">'.$row["id"].'</th>
                            <td><img id="img-preview" src="../../uploads/'.$row["image"].'"/></td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["ingredients"].'</td>
                            <td>'.$row["category"].'</td>
                            <td>'.$row["restaurant"].'</td>
                            <td>'.$row["price"].'</td>
                            <td>'.$row["availability"].'</td>
                            <td><a href="../php/food/update-food.php?id='.$row["id"].'" class="btn btn-primary">Update</a></td>
                            <td><a href="../php/food/delete-food.php?id='.$row["id"].'" class="btn btn-danger">Delete</a></td>
                          </tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- All Food Item List -->

      </div>
  </body>
</html>