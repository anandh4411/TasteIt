<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Cart - Taste.it - Order food Online</title>
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
            <a class="navbar-brand" href="../index.html">Taste.<span>it</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="food.php" class="nav-link">Food</a></li>
                    <li class="nav-item"><a href="sell.php" class="nav-link">Sell</a></li>
                    <li class="nav-item active"><a href="cart.php" class="nav-link">Cart</a></li>
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
                                <h1>Review your Cart</h1>
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
                                <h1>And Checkout!</h1>
                                <a href="#account-ftco-section" class="btn btn-red py-3 px-4">Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="food-ftco-section" class="sell-ftco-section ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-sm-8 wrap-about py-5 ftco-animate img"
                    style="background-image:url(images/xabout.jpg.pagespeed.ic.1t7Mz0zawr.jpg)">
                    <div class="col">
                        <div class="row">
                            <?php
                                $total_items = 0;
                                $total_price = 0;
                                if(!empty($_SESSION["cart"])){
                                    include '../php/db.php';
                                    $whereIn = implode(',', $_SESSION["cart"]);
                                    $query = "SELECT * FROM food_item WHERE id IN ($whereIn)";
                                    $result = mysqli_query($connect, $query);
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<div class="food-card" style="width: 40rem;">
                                                <div class="row">
                                                <img id="img-preview" class="card-img-top" src="../uploads/'.$row["image"].'" alt="Food Item">
                                                <div class="space card-body">
                                                    <h5 class="card-title">'.$row["name"].'</h5>
                                                    <h5 style="color: red; font-weight: 600;" class="card-title">???'.$row["price"].'</h5>
                                                    <small>'.$row["availability"].'</small>
                                                    <div class="row">
                                                        <form action="">
                                                            <input hidden name="option" value="decrement"/>
                                                            <input hidden name="quantity" value=""/>
                                                            <button type="submit" class="space btn btn-primary">-</button>
                                                        </form>
                                                        <span style="margin-left: 10px;">1</span>
                                                        <form action="">
                                                            <input hidden name="option" value="increment"/>
                                                            <input hidden name="quantity" value=""/>
                                                            <button type="submit" class="space btn btn-primary">+</button>
                                                        </form>
                                                        <form method="post" action="../php/user/delete-from-cart.php">
                                                            <input hidden name="option" value="delete"/>
                                                            <input hidden name="id" value="'.$row["id"].'"/>
                                                            <button type="submit" class="space btn btn-primary">Delete</button>
                                                        </form>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>';
                                        $total_items++;
                                        $total_price += $row["price"];
                                    }
                                }
                                else{
                                    echo '<h4>Your cart is empty!</h4>';
                                }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 p-4 p-md-5 d-flex align-items-center justify-content-center bg-primary">
                    <?php
                        echo '<form action="#" class="appointment-form">
                                <h3 class="mb-3">Subtotal ('.$total_items.' items):</h3>
                                <h3>???'.$total_price.'</h3>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <span style="color: white;">Eligible for free delivery</span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="submit" value="Checkout" class="btn btn-white py-3 px-4">
                                        </div>
                                    </div>
                                </div>
                            </form>';     
                    ?>
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