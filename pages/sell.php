<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Taste.it - Order food Online</title>
    <link href="images/favicon.png" rel="icon" type="image/png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet"
        href="../css/A.animate.css+owl.carousel.min.css+owl.theme.default.min.css+magnific-popup.css+bootstrap-datepicker.css+jquery.timepicker.css+flaticon.css+style.css,Mcc.RuFz_k4bhO.css.pagespeed.cf.ESm1BFElw-.css" />
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <div class="wrap">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 col-md d-flex align-items-center">
                    <p class="mb-0 phone"><span class="mailus">Phone no:</span> <a href="#">+91 8921168386</a> or <span
                            class="mailus">email us:</span> <a href="#"><span class="__cf_email__"
                                data-cfemail="eb8e868a8287988a869b878eab8e868a8287c5888486">tasteit@gmail.com</span></a>
                    </p>
                </div>
                <div class="col-12 col-md d-flex justify-content-md-end">
                    <p class="mb-0">Mon - Fri / 6:00-23:00, Sat / 7:00-22:00</p>
                    <div class="social-media">
                        <p class="mb-0 d-flex">
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
                            <a href="#" class="d-flex align-items-center justify-content-center"><span
                                    class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="../index.php">Taste.<span>it</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="food.php" class="nav-link">Food</a></li>
                    <li class="nav-item active"><a href="sell.php" class="nav-link">Sell</a></li>
                    <li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
                    <?php 
                        if(isset($_SESSION["restaurant-name"])){
                            echo '<li class="nav-item"><a href="" class="nav-link">'.$_SESSION["restaurant-name"].'</a></li>';
                            echo '<li class="nav-item"><a href="../php/restaurant/logout.php" class="nav-link">Logout</a></li>';
                        }
                        else echo '<li class="nav-item"><a href="restaurant-login.php" class="nav-link">Login</a></li>';
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-wrap">
        <div class="home-slider owl-carousel js-fullheight">
            <div class="slider-item js-fullheight" style="background-image:url(../images/sell-food.jpeg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 mt-5 text-center">
                                <span class="subheading">Taste.it Online Food Delivery</h2></span>
                                <h1>Sell your food</h1>
                                <a href="#account-ftco-section" class="btn btn-red py-3 px-4">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item js-fullheight" style="background-image:url(../images/make-money.jpeg)">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                        <div class="col-md-12 ftco-animate">
                            <div class="text w-100 mt-5 text-center">
                                <span class="subheading">Taste.it Online Food Delivery</h2></span>
                                <h1>And make money!</h1>
                                <a href="#account-ftco-section" class="btn btn-red py-3 px-4">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Create Account -->
    <?php 
        if(!isset($_SESSION["restaurant-name"])){
            echo '<section id="account-ftco-section" class="sell-ftco-section ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
                    <div class="container">
                        <div class="row no-gutters">
                            <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                                <form action="../php/restaurant/add-restaurant.php" method="post" class="appointment-form">
                                    <h3 class="mb-3">Create your account now</h3>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="name" type="name" class="form-control" placeholder="Restaurant Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="location" type="text" class="form-control" placeholder="Location">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="category" class="form-control" aria-label="Default select example">
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
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="owner_name" type="text" class="form-control" placeholder="Owner Name">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input name="phone" type="text" class="form-control" placeholder="Phone">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Create" class="btn btn-white py-3 px-4">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-8 wrap-about py-5 ftco-animate img"
                                style="background-image:url(images/xabout.jpg.pagespeed.ic.1t7Mz0zawr.jpg)">
                                <div class="row pb-5 pb-md-0">
                                    <div class="col-md-12 col-lg-7">
                                        <div class="heading-section mt-5 mb-4">
                                            <div class="pl-lg-3 ml-md-5">
                                                <span class="subheading">Register</span>
                                                <h2 class="mb-4">Register your restaurant with us.</h2>
                                            </div>
                                        </div>
                                        <div class="pl-lg-3 ml-md-5">
                                            <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came
                                                from it would have been rewritten a thousand times and everything that was left from
                                                its origin would be the word "and" and the Little Blind Text should turn around and
                                                return to its own, safe country. A small river named Duden flows by their place and
                                                supplies it with the necessary regelialia. It is a paradisematic country, in which
                                                roasted parts of sentences fly into your mouth.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </section>';
        }
    ?>
    <!-- Create Account End -->

    <section id="food-ftco-section" class="sell-ftco-section ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-8 wrap-about py-5 ftco-animate img"
                    style="background-image:url(images/xabout.jpg.pagespeed.ic.1t7Mz0zawr.jpg)">
                    <div class="row pb-5 pb-md-0">
                        <div class="col-md-12 col-lg-7">
                            <div class="heading-section mt-5 mb-4">
                                <div class="pl-lg-3 ml-md-5">
                                    <span class="subheading">About</span>
                                    <h2 class="mb-4">Tell us about your product.</h2>
                                </div>
                            </div>
                            <div class="pl-lg-3 ml-md-5">
                                <p>On her way she met a copy. The copy warned the Little Blind Text, that where it came
                                    from it would have been rewritten a thousand times and everything that was left from
                                    its origin would be the word "and" and the Little Blind Text should turn around and
                                    return to its own, safe country. A small river named Duden flows by their place and
                                    supplies it with the necessary regelialia. It is a paradisematic country, in which
                                    roasted parts of sentences fly into your mouth.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <form action="../php/food/add-food.php" method="post" class="appointment-form" enctype="multipart/form-data">
                        <h3 class="mb-3">Enter Item Details</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="image" style="display: none;" class="form-control input-image" type="file" id="files" />
                                    <label class="for-files" for="files">Select Image</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="name" type="name" class="form-control" placeholder="Product Name">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="ingredients" type="text" class="form-control" placeholder="Ingredients">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="category" class="form-control form-select" aria-label="Default select example">
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
                            </div>
                            <?php echo '<input name="id" hidden value="'.$_SESSION["restaurant-id"].'" type="number">'; ?>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input name="price" type="number" class="form-control" placeholder="Price">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <select name="availability" class="form-control form-select" aria-label="Default select example">
                                        <option selected>Available or Not</option>
                                        <option value="available">Available</option>
                                        <option value="not_available">Not available</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input type="submit" value="Sell" class="btn btn-white py-3 px-4">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section id="food-ftco-section" class="sell-ftco-section ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-8 wrap-about py-5 ftco-animate img"
                    style="background-image:url(images/xabout.jpg.pagespeed.ic.1t7Mz0zawr.jpg)">
                    <div class="row pb-5 pb-md-0">
                        <div class="col-md-12 col-lg-7">
                            <div class="heading-section mt-5 mb-4">
                                <div class="pl-lg-3 ml-md-5">
                                    <span class="subheading">Items</span>
                                    <h2 class="mb-4">List Of Products You Have.</h2>
                                </div>
                            </div>
                            <div class="pl-lg-3 ml-md-5">
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
                                    $id = $_SESSION["restaurant-id"];
                                    $query = "SELECT * FROM food_item WHERE restaurant=$id";
                                    $result = mysqli_query($connect, $query);
                                    while($row = mysqli_fetch_array($result)){
                                            $restaurant = "";
                                            $id2 = $row["restaurant"];
                                            $query2 = "SELECT * FROM restaurant WHERE id=$id2";
                                            $result2 = mysqli_query($connect, $query2);
                                            while($row2 = mysqli_fetch_array($result2)){
                                                $restaurant = $row2["name"];
                                            }
                                            echo '<tr>
                                                    <th scope="row">'.$row["id"].'</th>
                                                    <td><img id="img-preview" src="../uploads/'.$row["image"].'"/></td>
                                                    <td>'.$row["name"].'</td>
                                                    <td>'.$row["ingredients"].'</td>
                                                    <td>'.$row["category"].'</td>
                                                    <td>'.$restaurant.'</td>
                                                    <td>'.$row["price"].'</td>
                                                    <td>'.$row["availability"].'</td>
                                                    <td><a href="update-food.php?id='.$row["id"].'" class="btn btn-blue">Update</a></td>
                                                    <td><a href="../php/food/delete-food.php?id='.$row["id"].'" class="btn btn-primary">Delete</a></td>
                                                </tr>';
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="ftco-footer ftco-no-pb ftco-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Taste.it</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts. Separated they live in Bookmarksgrove</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                            <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Available Hours</h2>
                        <ul class="list-unstyled open-hours">
                            <li class="d-flex"><span>Monday</span><span>6:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Tuesday</span><span>6:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Wednesday</span><span>6:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Thursday</span><span>6:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Friday</span><span>6:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Saturday</span><span>6:00am - 11:00pm</span></li>
                            <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Instagram</h2>
                        <div class="thumb d-sm-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
                            </a>
                        </div>
                        <div class="thumb d-flex">
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
                            </a>
                            <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0 bg-primary py-3">
            <div class="row no-gutters">
                <div class="col-md-12 text-center">
                    <p class="mb-0">
                        Copyright &copy;
                        <script data-cfasync="false"
                            src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
                        <script>document.write(new Date().getFullYear());</script> All rights reserved | This website
                        is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://anandh.xyz/"
                            target="_blank">Anandh</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg></div>
    <script src="../js/main.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/jquery-migrate-3.0.1.min.js+popper.min.js+bootstrap.min.js.pagespeed.jc.-6w41TTlbS.js"></script>
    <script>eval(mod_pagespeed_q49oLQo$KZ);</script>
    <script>eval(mod_pagespeed_pZqbG0Jgl8);</script>
    <script>eval(mod_pagespeed_dSDBfobq1n);</script>
    <script
        src="../js/jquery.easing.1.3.js+jquery.waypoints.min.js+jquery.stellar.min.js+owl.carousel.min.js.pagespeed.jc.NEztLSF23K.js"></script>
    <script>eval(mod_pagespeed_nbt4woDM4f);</script>
    <script>eval(mod_pagespeed_JcmOf4OhXl);</script>
    <script>eval(mod_pagespeed_CSbekBKKDr);</script>
    <script>eval(mod_pagespeed_zaYVYd4vD3);</script>
    <script
        src="../js/jquery.magnific-popup.min.js+jquery.animateNumber.min.js+bootstrap-datepicker.js+jquery.timepicker.min.js+scrollax.min.js.pagespeed.jc.qQbLibHtsz.js"></script>
    <script>eval(mod_pagespeed_iN8ddZFfbE);</script>
    <script>eval(mod_pagespeed_W28HQ1ieBw);</script>
    <script>eval(mod_pagespeed_Ec93DSl8lT);</script>
    <script>eval(mod_pagespeed_QGfnxj6Smx);</script>
    <script>eval(mod_pagespeed_Swzj03gqso);</script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="../js/google-map.js+main.js.pagespeed.jc.lZfh61_23-.js"></script>
    <script>eval(mod_pagespeed_xdKY0GKK5P);</script>
    <script>eval(mod_pagespeed_PpqPkiEwoF);</script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js"
        data-cf-beacon='{"rayId":"668dcb23ee0d1744","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
</body>

</html>