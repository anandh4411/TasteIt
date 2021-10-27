<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Taste.it</title>
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
								data-cfemail="6a0f070b0306190b071a060f2a0f070b030644090507">tasteit@gmail.com</span></a>
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
				<span class="oi oi-menu"></span> Food
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item"><a href="../index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>
					<li class="nav-item active"><a href="food.php" class="nav-link">Food</a></li>
					<li class="nav-item"><a href="sell.php" class="nav-link">Sell</a></li>
					<li class="nav-item"><a href="cart.php" class="nav-link">Cart</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<section class="hero-wrap hero-wrap-2" style="background-image:url(../images/deliver3.jpg)"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-end justify-content-center">
				<div class="col-md-9 ftco-animate text-center mb-5">
					<h1 class="mb-2 bread">Order delicious food right now!</h1>
					<p class="breadcrumbs"><span class="mr-2"><a href="../index.html">Home <i
									class="fa fa-chevron-right"></i></a></span> <span>Food <i
								class="fa fa-chevron-right"></i></span></p>
				</div>
			</div>
		</div>
	</section>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-2">
				<div class="col-md-7 text-center heading-section ftco-animate">
					<span class="subheading">Specialties</span>
					<h2 class="mb-4">Our Food Items</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Breakfast</h3>
						</div>

						<?php 
							include '../php/db.php';
							$query = "SELECT * FROM food_item WHERE category = 'breakfast'";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="menus d-flex ftco-animate">
											<div class="menu-img img"
												style="background-image:url(../uploads/'.$row["image"].')">
											</div>
											<div class="text">
												<div class="d-flex">
													<div class="one-half">
														<h3>'.$row["name"].'</h3>
													</div>
													<div class="one-forth">
														<span class="price">₹'.$row["price"].'</span>
													</div>
												</div>
												<p>'.$row["ingredients"].'</p>
												<small>sold by '.$row["restaurant"].' restaurant</small>
												<form action="../php/user/cart.php" method="post">
													<input name="id" hidden value="'.$row["id"].'" />
													<button type="submit" class="btn btn-primary">Add to Cart</button>
												</form>
											</div>
										</div>';
							}
						?>

						<span class="flat flaticon-bread" style="left: 0;"></span>
						<span class="flat flaticon-breakfast" style="right: 0;"></span>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Lunch</h3>
						</div>
						<?php 
							include '../php/db.php';
							$query = "SELECT * FROM food_item WHERE category = 'lunch'";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="menus d-flex ftco-animate">
											<div class="menu-img img"
												style="background-image:url(../uploads/'.$row["image"].')">
											</div>
											<div class="text">
												<div class="d-flex">
													<div class="one-half">
														<h3>'.$row["name"].'</h3>
													</div>
													<div class="one-forth">
														<span class="price">₹'.$row["price"].'</span>
													</div>
												</div>
												<p>'.$row["ingredients"].'</p>
												<small>sold by '.$row["restaurant"].' restaurant</small>
												<form action="../php/user/cart.php" method="post">
													<input name="id" hidden value="'.$row["id"].'" />
													<button type="submit" class="btn btn-primary">Add to Cart</button>
												</form>
											</div>
										</div>';
							}
						?>
						<span class="flat flaticon-pizza" style="left: 0;"></span>
						<span class="flat flaticon-chicken" style="right: 0;"></span>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Dinner</h3>
						</div>
						<?php 
							include '../php/db.php';
							$query = "SELECT * FROM food_item WHERE category = 'dinner'";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="menus d-flex ftco-animate">
											<div class="menu-img img"
												style="background-image:url(../uploads/'.$row["image"].')">
											</div>
											<div class="text">
												<div class="d-flex">
													<div class="one-half">
														<h3>'.$row["name"].'</h3>
													</div>
													<div class="one-forth">
														<span class="price">₹'.$row["price"].'</span>
													</div>
												</div>
												<p>'.$row["ingredients"].'</p>
												<small>sold by '.$row["restaurant"].' restaurant</small>
												<form action="../php/user/cart.php" method="post">
													<input name="id" hidden value="'.$row["id"].'" />
													<button type="submit" class="btn btn-primary">Add to Cart</button>
												</form>
											</div>
										</div>';
							}
						?>
						<span class="flat flaticon-omelette" style="left: 0;"></span>
						<span class="flat flaticon-burger" style="right: 0;"></span>
					</div>
				</div>

				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Desserts</h3>
						</div>
						<?php 
							include '../php/db.php';
							$query = "SELECT * FROM food_item WHERE category = 'desserts'";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="menus d-flex ftco-animate">
											<div class="menu-img img"
												style="background-image:url(../uploads/'.$row["image"].')">
											</div>
											<div class="text">
												<div class="d-flex">
													<div class="one-half">
														<h3>'.$row["name"].'</h3>
													</div>
													<div class="one-forth">
														<span class="price">₹'.$row["price"].'</span>
													</div>
												</div>
												<p>'.$row["ingredients"].'</p>
												<small>sold by '.$row["restaurant"].' restaurant</small>
												<form action="../php/user/cart.php" method="post">
													<input name="id" hidden value="'.$row["id"].'" />
													<button type="submit" class="btn btn-primary">Add to Cart</button>
												</form>
											</div>
										</div>';
							}
						?>
						<span class="flat flaticon-cupcake" style="left: 0;"></span>
						<span class="flat flaticon-ice-cream" style="right: 0;"></span>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Wine Card</h3>
						</div>
						<?php 
							include '../php/db.php';
							$query = "SELECT * FROM food_item WHERE category = 'wine_card'";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="menus d-flex ftco-animate">
											<div class="menu-img img"
												style="background-image:url(../uploads/'.$row["image"].')">
											</div>
											<div class="text">
												<div class="d-flex">
													<div class="one-half">
														<h3>'.$row["name"].'</h3>
													</div>
													<div class="one-forth">
														<span class="price">₹'.$row["price"].'</span>
													</div>
												</div>
												<p>'.$row["ingredients"].'</p>
												<small>sold by '.$row["restaurant"].' restaurant</small>
												<form action="../php/user/cart.php" method="post">
													<input name="id" hidden value="'.$row["id"].'" />
													<button type="submit" class="btn btn-primary">Add to Cart</button>
												</form>
											</div>
										</div>';
							}
						?>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
					</div>
				</div>
				<div class="col-md-6 col-lg-4">
					<div class="menu-wrap">
						<div class="heading-menu text-center ftco-animate">
							<h3>Drinks &amp; Tea</h3>
						</div>
						<?php 
							include '../php/db.php';
							$query = "SELECT * FROM food_item WHERE category='drinks' AND category='tea'";
							$result = mysqli_query($connect, $query);
							while($row = mysqli_fetch_array($result)){
								echo '<div class="menus d-flex ftco-animate">
											<div class="menu-img img"
												style="background-image:url(../uploads/'.$row["image"].')">
											</div>
											<div class="text">
												<div class="d-flex">
													<div class="one-half">
														<h3>'.$row["name"].'</h3>
													</div>
													<div class="one-forth">
														<span class="price">₹'.$row["price"].'</span>
													</div>
												</div>
												<p>'.$row["ingredients"].'</p>
												<small>sold by '.$row["restaurant"].' restaurant</small>
												<form action="../php/user/cart.php" method="post">
													<input name="id" hidden value="'.$row["id"].'" />
													<button type="submit" class="btn btn-primary">Add to Cart</button>
												</form>
											</div>
										</div>';
							}
						?>
						<span class="flat flaticon-wine" style="left: 0;"></span>
						<span class="flat flaticon-wine-1" style="right: 0;"></span>
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
							<a href="#" class="thumb-menu img" style="background-image: url(../images/insta-1.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../images/insta-2.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../images/insta-3.jpg);">
							</a>
						</div>
						<div class="thumb d-flex">
							<a href="#" class="thumb-menu img" style="background-image: url(../images/insta-4.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../images/insta-5.jpg);">
							</a>
							<a href="#" class="thumb-menu img" style="background-image: url(../images/insta-6.jpg);">
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
		data-cf-beacon='{"rayId":"668dcb319e271744","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
</body>
</body>
</html>
