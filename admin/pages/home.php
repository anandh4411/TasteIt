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
              <h4>Add a new Restaurent</h4>
              <form action="../php/movie/new-movie.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Movie Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input name="year" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Year"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-select" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="recomended">Recomended</option>
                      <option value="popular">Popular</option>
                      <option value="romantic">Romantic</option>
                      <option value="action">Action</option>
                      <option value="drama">Drama</option>
                      <option value="funny">Funny</option>
                      <option value="tv_series">TV Series</option>
                      <option value="tv_episodes">TV Episodes</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Duration</label>
                    <input name="duration" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Duration"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input name="link" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Link"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input name="image" type="file" class="form-control" id="exampleInputEmail1" placeholder="Upload Image"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- New Restaurent End -->

            <!-- New Restaurent -->
            <div class="card" style="width: 25rem;">
              <h4>Add a new Food Item</h4>
              <form action="../php/movie/new-movie.php" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input name="name" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Movie Name"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Year</label>
                    <input name="year" type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Year"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-select" aria-label="Default select example">
                      <option selected>Category</option>
                      <option value="recomended">Recomended</option>
                      <option value="popular">Popular</option>
                      <option value="romantic">Romantic</option>
                      <option value="action">Action</option>
                      <option value="drama">Drama</option>
                      <option value="funny">Funny</option>
                      <option value="tv_series">TV Series</option>
                      <option value="tv_episodes">TV Episodes</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Duration</label>
                    <input name="duration" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Duration"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Link</label>
                    <input name="link" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Link"/>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input name="image" type="file" class="form-control" id="exampleInputEmail1" placeholder="Upload Image"/>
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
              </form>
            </div>
            <!-- New Restaurent End -->
  
        </div>

        <!-- All Restaurents List -->
        <div style="margin-top: 100px;" class="container">
          <h2 class="text-center">List of Restaurents we have</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Year</th>
                <th scope="col">Duration</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../php/db.php';
              $query = "SELECT * FROM movie";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                            <th scope="row">'.$row["id"].'</th>
                            <td><img id="img-preview" src="../../uploads/'.$row["image"].'"/></td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["year"].'</td>
                            <td>'.$row["duration"].'</td>
                            <td>'.$row["category"].'</td>
                            <td><a href="../php/movie/update-movie.php?id='.$row["id"].'" class="btn btn-primary">Update</a></td>
                            <td><a href="../php/movie/delete-movie.php?id='.$row["id"].'" class="btn btn-danger">Delete</a></td>
                          </tr>';
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- All Restaurents List End -->

        <!-- All Food Item List -->
        <div style="margin-top: 100px;" class="container">
          <h2 class="text-center">List of Food Items we have</h2>
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Image</th>
                <th scope="col">Name</th>
                <th scope="col">Year</th>
                <th scope="col">Duration</th>
                <th scope="col">Category</th>
              </tr>
            </thead>
            <tbody>
              <?php
              include '../php/db.php';
              $query = "SELECT * FROM movie";
              $result = mysqli_query($connect, $query);
              while($row = mysqli_fetch_array($result)){
                    echo '<tr>
                            <th scope="row">'.$row["id"].'</th>
                            <td><img id="img-preview" src="../../uploads/'.$row["image"].'"/></td>
                            <td>'.$row["name"].'</td>
                            <td>'.$row["year"].'</td>
                            <td>'.$row["duration"].'</td>
                            <td>'.$row["category"].'</td>
                            <td><a href="../php/movie/update-movie.php?id='.$row["id"].'" class="btn btn-primary">Update</a></td>
                            <td><a href="../php/movie/delete-movie.php?id='.$row["id"].'" class="btn btn-danger">Delete</a></td>
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