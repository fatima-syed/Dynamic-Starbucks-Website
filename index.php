<!DOCTYPE html>

<?php
//including the database connection file
include_once("config.php");
?>

<html lang="en">
<head>
	<title>Starbucks Coffee Company</title>
	<link rel = "icon" href = "images/logo.jpg" type = "image/x-icon">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

	<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/aos.css">

	<link rel="stylesheet" href="css/ionicons.min.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php"><img class="logo" src="images/logo.jpg" alt="logo" height="65px" width="65px"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>
			<div class="collapse navbar-collapse" id="ftco-nav">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
					<li class="nav-item"><a href="menu.php" class="nav-link">Menu</a></li>
					<li class="nav-item"><a href="gift-cards.php" class="nav-link">Gift Cards</a></li>
					<li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown"
							aria-haspopup="true" aria-expanded="false">Shop</a>
						<div class="dropdown-menu" aria-labelledby="dropdown04">
							<a class="dropdown-item" href="cart.php">Cart</a>
							<a class="dropdown-item" href="checkout.php">Checkout</a>
						</div>
					</li>
					<li class="nav-item cart"><a href="cart.php" class="nav-link"><span
								class="icon icon-shopping_cart"></span><span
								class="bag d-flex justify-content-center align-items-center"><small>1</small></span></a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- END nav -->

	<section class="home-slider owl-carousel">
		<?php
		$result = mysqli_query($mysqli, "SELECT photoID, image FROM photogallery
		WHERE type LIKE 'carousel' ORDER BY RAND();");

		while($res = mysqli_fetch_array($result)) {         
			echo '
			<div class="slider-item" style="background-image: url('.$res['image'].');">
				<div class="overlay"></div>
				<div class="container">
					<div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

						<div class="col-md-8 col-sm-12 text-center ftco-animate">
							<span class="subheading">Welcome</span>
							<h1 class="mb-4">MAKE EVERY BUCK WORTH IT WITH STARBUCKS</h1>
							<p class="mb-4 mb-md-5">>We inspire and nurture the human spirit - one person, one cup and one
							neighborhood at a time.</p>
							<p><a href="#" class="btn btn-primary p-3 px-xl-4 py-xl-3">Order Now</a> <a href="#"
									class="btn btn-white btn-outline-white p-3 px-xl-4 py-xl-3">View Menu</a></p>
						</div>

					</div>
				</div>
			</div>';
		}
		?>
	
	</section>

	<section class="ftco-intro">
		<div class="container-wrap">
			<div class="wrap d-md-flex align-items-xl-end">
				<div class="info">
					<div class="row no-gutters">
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-phone"></span></div>
							<div class="text">
								<h3>800-Starbuc (800-782-7282)</h3>
								<p>Our customer service hours are Monday – Sunday, 5:00am to 8:00pm</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-my_location"></span></div>
							<div class="text">
								<h3>2401 Utah Avenue</h3>
								<p> South Seattle, Washington 98134, United States</p>
							</div>
						</div>
						<div class="col-md-4 d-flex ftco-animate">
							<div class="icon"><span class="icon-clock-o"></span></div>
							<div class="text">
								<h3>Open Monday - Sunday</h3>
								<p>5:00am to 9:00pm</p>
							</div>
						</div>
					</div>
				</div>
				<div class="book p-4">
					<h3>Book a Table</h3>
					<form action="#" class="appointment-form">
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Date">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<div class="input-wrap">
									<div class="icon"><span class="ion-ios-clock"></span></div>
									<input type="text" class="form-control appointment_time" placeholder="Time">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="2" class="form-control"
									placeholder="Message"></textarea>
							</div>
							<div class="form-group ml-md-4">
								<input type="submit" value="Appointment" class="btn btn-white py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-about d-md-flex">
		<div class="one-half img" style="background-image: url(images/about_1.jpg);"></div>
		<div class="one-half ftco-animate">
			<div class="overlap">
				<div class="heading-section ftco-animate ">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Story</h2>
				</div>
				<div>
					<p>Our story begins in 1971 along the cobblestone streets of Seattle’s historic Pike Place Market.
						It was here where Starbucks opened its first store, offering fresh-roasted coffee beans, tea and
						spices from around the world for our customers to take home. Our name was inspired by the
						classic tale, “Moby-Dick,” evoking the seafaring tradition of the early coffee traders. In
						everything we do, we are always dedicated to Our Mission: to inspire and nurture the human
						spirit – one person, one cup, and one neighborhood at a time.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-services">
		<div class="container">
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-choices"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Innovation</h3>
							<p>We aim at challenging the status quo and finding new ways to grow our company and each
								other while being present, connecting with transparency, dignity and respect.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-delivery-truck"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Ease of order</h3>
							<p>We continue to serve customer needs through safe and convenient methods, including
								drive-through service, dine-in, digital ordering and contactless pay. </p>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="media d-block text-center block-6 services">
						<div class="icon d-flex justify-content-center align-items-center mb-5">
							<span class="flaticon-coffee-bean"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Quality Coffee</h3>
							<p>It's our goal for all of our coffee to be grown under the highest standards of quality,
								using ethical sourcing practices. More than 30 blends of coffee available.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-6 pr-md-5">
					<div class="heading-section text-md-right ftco-animate">
						<span class="subheading">Discover</span>
						<h2 class="mb-4">Our Menu</h2>
						<p class="mb-4">Whether you're searching for something new to warm your mug, seeking the best
							brew method for your favorite blend or exploring our rarest offerings, you’ve come to the
							right place. We have all the tools you need to bring your brewing game to the next level.
						</p>
						<p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">View Full Menu</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
							<?php
								$result = mysqli_query($mysqli, "SELECT image FROM photogallery
								WHERE type LIKE 'menu' ORDER BY RAND() LIMIT 4;");
								$i = 0;
								while($res = mysqli_fetch_array($result)) {         
									
									echo '<div class="col-md-6"><div class="menu-entry';
									// check if i is even
									if($i % 2 == 0) {
										echo ' mt-lg-4';
									}
									echo '"><a href="#" class="img" style="background-image: url('.$res['image'].');"></a></div></div>';
									$i++;
								}
							?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Statictics Bar -->
	<section class="ftco-counter ftco-bg-dark img" id="section-counter" style="background-image: url(images/bg_10.jpg);"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10">
					<div class="row">
						<?php
							$result = mysqli_query($mysqli, "SELECT name, count FROM stat;");
							while($res = mysqli_fetch_array($result)) {         
								echo "<div class=\"col-md-6 col-lg-3 d-flex justify-content-center counter-wrap ftco-animate\">
								<div class=\"block-18 text-center\">
									<div class=\"text\">
										<div class=\"icon\"><span class=\"flaticon-coffee-cup\"></span></div>
										<strong class=\"number\" data-number=\"".$res["count"]."\">0</strong>
										<span>".$res["name"]."</span>
									</div>
								</div>
							</div>";
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Best Coffee Sellers</h2>
					<p>From familiar favorites to delicious discoveries, Starbucks offers unlimited ways to enjoy your
						everyday cup.</p>
				</div>
			</div>
			<div class="row">
				<?php
					$result = mysqli_query($mysqli, "SELECT productID AS id, name, SUBSTRING(description, 1, 80) AS description, price, image FROM product
					WHERE categoryID IN ('1', '4', '5') AND CHAR_LENGTH(name) < 20
					ORDER BY RAND() LIMIT 4;");
					while($res = mysqli_fetch_array($result)) {         
						echo "<div class=\"col-md-3\">
							<div class=\"menu-entry\">
								<a href=\"#\" class=\"img\" style=\"background-image: url(".$res["image"].");\"></a>
								<div class=\"text text-center pt-4\">
									<h3><a href=\"#\">".$res["name"]."</a></h3>
									<p>".$res["description"]."</p>
									<p class=\"price\"><span>".$res["price"]."</span></p>
									<p><a href=\"addToCart.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to add ".$res["name"]." to cart?')\" class=\"btn btn-primary btn-outline-primary\">Add to Cart</a></p>
								</div>
							</div>
						</div>";
					}
				?>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container-wrap">
			<div class="row no-gutters">
				<?php
					$result = mysqli_query($mysqli, "SELECT image FROM photogallery
					WHERE type LIKE 'gallery' ORDER BY RAND() LIMIT 4;");
					while($res = mysqli_fetch_array($result)) {         
						echo "<div class=\"col-md-3 ftco-animate\">
							<a href=\"index.php\" class=\"gallery img d-flex align-items-center\"
								style=\"background-image: url(".$res["image"].");\">
								<div class=\"icon mb-4 d-flex align-items-center justify-content-center\">
									<span class=\"icon-search\"></span>
								</div>
							</a>
						</div>";
					}
				?>
			</div>
		</div>
	</section>

	<section class="ftco-menu">
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Discover</span>
					<h2 class="mb-4">Our Products</h2>
					<p>Exceptional food from around the world. Sourced for the season, prepared at Starbucks Reserve®
						and crafted with care.</p>
				</div>
			</div>
			<div class="row d-md-flex">
				<div class="col-lg-12 ftco-animate p-md-5">
					<div class="row">
						<div class="col-md-12 nav-link-wrap mb-5">
							<div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab"
								role="tablist" aria-orientation="vertical">
								<a class="nav-link active" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Drinks</a>

								<?php
									$result = mysqli_query($mysqli, "SELECT categoryID, name FROM category WHERE categoryID > 7;");
						
									while($res = mysqli_fetch_array($result)) {         
										echo "<a class=\"nav-link\" id=\"v-pills-".$res["categoryID"]."-tab\" data-toggle=\"pill\" href=\"#v-pills-".$res["categoryID"]."\" role=\"tab\" aria-controls=\"v-pills-".$res["categoryID"]."\" aria-selected=\"false\">".$res["name"]."</a> ";
									}
								?>
							</div>
						</div>
						
						<div class="col-md-12 d-flex align-items-center">
		            <div class="tab-content ftco-animate" id="v-pills-tabContent">
		              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-1-tab">
		              	<div class="row">
						  	<?php
							$result = mysqli_query($mysqli, "SELECT productID AS id, name, SUBSTRING(DESCRIPTION, 1, 100) AS description, price, image FROM product
							WHERE categoryID BETWEEN 1 and 7 AND CHAR_LENGTH(name) < 15
							ORDER BY RAND() LIMIT 3;");

							while($res = mysqli_fetch_array($result)) {         
								echo "<div class=\"col-md-4 text-center\">
		              			<div class=\"menu-wrap\">
		              				<a href=\"#\" class=\"menu-img img mb-4\" style=\"background-image: url(".$res["image"].");\"></a>
		              				<div class=\"text\">
		              					<h3><a href=\"#\">".$res["name"]."</a></h3>
		              					<p>".$res["description"]."</p>
		              					<p class=\"price\"><span>".$res["price"]."</span></p>
		              					<p><a href=\"addToCart.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to add ".$res["name"]." to cart?')\" class=\"btn btn-primary btn-outline-primary\">Add to cart</a></p>
		              				</div>
		              			</div>
		              			</div>";
							}
							?>
		              	</div>
		              </div>

					  <?php
						$result1 = mysqli_query($mysqli, "SELECT categoryID FROM category WHERE categoryID > 7;");

						while($res1 = mysqli_fetch_array($result1)) { 
							echo "<div class=\"tab-pane fade\" id=\"v-pills-".$res1["categoryID"]."\" role=\"tabpanel\" aria-labelledby=\"v-pills-".$res1["categoryID"]."-tab\">
								<div class=\"row\">";

								$id = $res1["categoryID"];
								$result2 = mysqli_query($mysqli, "SELECT productID AS id, name, SUBSTRING(DESCRIPTION, 1, 100) AS description, price, image FROM product
								WHERE categoryID = '$id' AND CHAR_LENGTH(name) < 30
								ORDER BY RAND() LIMIT 3;");
	
								while($res2 = mysqli_fetch_array($result2)) {         
									echo "<div class=\"col-md-4 text-center\">
									  <div class=\"menu-wrap\">
										  <a href=\"#\" class=\"menu-img img mb-4\" style=\"background-image: url(".$res2["image"].");\"></a>
										  <div class=\"text\">
											  <h3><a href=\"#\">".$res2["name"]."</a></h3>
											  <p>".$res2["description"]."</p>
											  <p class=\"price\"><span>".$res2["price"]."</span></p>
											  <p><a href=\"addToCart.php?id=$res2[id]\" onClick=\"return confirm('Are you sure you want to add ".$res2["name"]." to cart?')\" class=\"btn btn-primary btn-outline-primary\">Add to cart</a></p>
										  </div>
									  </div>
									  </div>";
								}
									
								echo "</div>
							</div>";
						}
					  ?>
		          </div>
		        </div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section img" id="ftco-testimony" style="background-image: url(images/bg_1.jpg);"
		data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-md-7 heading-section text-center ftco-animate">
					<span class="subheading">Testimony</span>
					<h2 class="mb-4">Customers Says</h2>
					<p>With our partners, our coffee and our customers at our core, we live our values. Read what our
						customers have to say!</p>
				</div>
			</div>
		</div>
		<div class="container-wrap">
			<div class="row d-flex no-gutters">
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;A Place to Be. I am currently
								travelling and it has been a place that I have been frequently visiting to sit down and
								take care of my studies.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/person_1.jpg" alt="">
							</div>
							<div class="name align-self-center">Daddu Shahid <span class="position">Burger Town</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>&ldquo;I have been going to this store regularly for years. The last year has been almost
								daily. It is a very busy store but they move us through quickly. It seems like the
								employees all get along and do their jobs efficiently and curiously.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/person_2.jpg" alt="">
							</div>
							<div class="name align-self-center">Lukas Kelly <span class="position">Columbia City</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>
							<p>&ldquo;The first time after years I felt the “welcome to Starbucks” greeting at this
								place & I said in my heart “well Mr. first CEO returned with his principles”. Keep the
								warm tradition !!!
								&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/person_3.jpg" alt="">
							</div>
							<div class="name align-self-center">Denise Kelly <span class="position">Capitol Hill</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end">
					<div class="testimony overlay">
						<blockquote>
							<p>&ldquo;I would like to give a huge shoutout to Starbucks Kroger. Their employees are
								super friendly,
								efficient and always remember my drink combo. &rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/person_2.jpg" alt="">
							</div>
							<div class="name align-self-center">Abhinav Kelly <span class="position">Georgetown</span>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg align-self-sm-end ftco-animate">
					<div class="testimony">
						<blockquote>Had a wonderful Christmas at Starbucks.
							Mesmerizing taste and hospitality at its core. Delicious caramel frappe, turkey and cheese
							pretzel sandwich yet chasing my taste buds.&rdquo;</p>
						</blockquote>
						<div class="author d-flex mt-4">
							<div class="image mr-3 align-self-center">
								<img src="images/person_3.jpg" alt="">
							</div>
							<div class="name align-self-center">Susanne Kelly <span class="position">Las Vegas</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center mb-5 pb-3">
				<div class="col-md-7 heading-section ftco-animate text-center">
					<h2 class="mb-4">Recent from blog</h2>
					<p>Discover the enthralling world of Starbucks! Inspiring and nurturing the human spirit — one
						person, one cup and
						one neighborhood at a time.</p>
				</div>
			</div>
			<div class="row d-flex">
				<?php include 'getRecentBlogsTiles.php'; ?>
			</div>
		</div>
	</section>


	<section class="ftco-appointment">
		<div class="overlay"></div>
		<div class="container-wrap">
			<div class="row no-gutters d-md-flex align-items-center">
				<div class="col-md-6 d-flex align-self-stretch">
					<div id="map">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2689.8253793529043!2d-122.34708340545382!3d47.610085012816576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab2c538c70b%3A0x11ebfd9ae22719cf!2sStarbucks!5e0!3m2!1sen!2s!4v1667137203333!5m2!1sen!2s"
							style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="col-md-6 appointment ftco-animate">
					<h3 class="mb-3">Book a Table</h3>
					<form action="#" class="appointment-form">
						<div class="d-md-flex">
							<div class="form-group">
								<input type="text" class="form-control" placeholder="First Name">
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Last Name">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<div class="input-wrap">
									<div class="icon"><span class="ion-md-calendar"></span></div>
									<input type="text" class="form-control appointment_date" placeholder="Date">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<div class="input-wrap">
									<div class="icon"><span class="ion-ios-clock"></span></div>
									<input type="text" class="form-control appointment_time" placeholder="Time">
								</div>
							</div>
							<div class="form-group ml-md-4">
								<input type="text" class="form-control" placeholder="Phone">
							</div>
						</div>
						<div class="d-md-flex">
							<div class="form-group">
								<textarea name="" id="" cols="30" rows="2" class="form-control"
									placeholder="Message"></textarea>
							</div>
							<div class="form-group ml-md-4">
								<input type="submit" value="Appointment" class="btn btn-primary py-3 px-4">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer ftco-section img">
        <div class="overlay"></div>
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">About Us</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Our Company</a></li>
                            <li><a href="#" class="py-2 d-block">Our Coffee</a></li>
                            <li><a href="#" class="py-2 d-block">Stories and News</a></li>
                            <li><a href="#" class="py-2 d-block">Starbucks Archieve</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
					<h2 class="ftco-heading-2">Recent Blog</h2>
						<?php
						include "getRecentBlogs.php";
						?>
					</div>
                </div>
                <div class="col-lg-2 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4 ml-md-4">
                        <h2 class="ftco-heading-2">Explore</h2>
                        <ul class="list-unstyled">
                            <li><a href="#" class="py-2 d-block">Careers</a></li>
                            <li><a href="#" class="py-2 d-block">Social Impact</a></li>
                            <li><a href="#" class="py-2 d-block">Business Partner</a></li>
                            <li><a href="#" class="py-2 d-block">Order & Pickup</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-5 mb-md-5">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Have a Questions?</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">1912 Pike Pl, Seattle,
                                        WA 98101, United States</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">800-782-7282</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">info@starbucks.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
          

            <div class="group">
			  <form action="index.php" method="post" name="form1">
                  <div class="mb-3 vertical">
                    <h3 style="margin-bottom: 1rem;">FEEDBACK</h3>
                    <label style="position:relative; top: 1rem; color: white;" for="exampleFormControlInput1" class="form-label">Order ID</label>
                    <input type="text" class="form-control" name="orderID" placeholder="" required>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label" style="color: white; padding-top: 1rem;">Your Comments</label>
                        <textarea class="form-control" name="comment" rows="3" required></textarea>
                    </div>
					<div class="flex">
						<input type="submit" name="Submit" value="Add" id="addbtn"/>
					</div>
                  </div>
				<?php				
					if(isset($_POST['Submit'])) {
						$orderID = mysqli_real_escape_string($mysqli, $_POST['orderID']);
						$comment = mysqli_real_escape_string($mysqli, $_POST['comment']);
							
						// checking empty fields
						if(empty($orderID)) {
							echo "<font color='red'>ID field is empty.</font><br/>";
						}
						else if(empty($comment)) {
							echo "<font color='red'>Comment field is empty.</font><br/>";
						}
						else { 
							// if all the fields are filled (not empty) 
							//insert data to database	
							$result = mysqli_query($mysqli, "INSERT INTO feedback VALUES(NULL, '$orderID','$comment')");
							//display success message
							echo "<font color='#ffc107'>Feedback submitted successfully!";
							echo "<br/><a style=\"text-decoration:none;color:green;\" href='index.php'>Back to top of page</a>";
						}
						
						$mysqli->close();
					}
				?>
				</form>
    
				<ul class="ftco-footer-social list-unstyled mt-5">
					<li class="ftco-animate"><a href="https://open.spotify.com/user/starbucks"><span
								class="icon-spotify"></span></a></li>
					<li class="ftco-animate"><a href="https://www.facebook.com/Starbucks/"><span
								class="icon-facebook"></span></a></li>
					<li class="ftco-animate"><a href="https://www.pinterest.com/starbucks/"><span
								class="icon-pinterest"></span></a></li>
					<li class="ftco-animate"><a href="https://www.instagram.com/starbucks/"><span
								class="icon-instagram"></span></a></li>
					<li class="ftco-animate"><a href="https://www.youtube.com/starbucks"><span
								class="icon-youtube"></span></a></li>
					<li class="ftco-animate"><a href="https://twitter.com/starbucks/"><span class="icon-twitter"></span></a>
					</li>
				</ul>
			</div>
              
            <div class="row">
                <div class="col-md-12 text-center">

                    <ul class="help">
                        <li>Privacy Policy</li>
                        <li>|</li>
                        <li>Terms of Use</li>
                        <li>|</li>
                        <li>CA Supply Chain Act</li>
                        <li>|</li>
                        <li>Cookie Preferences</li>
                    </ul>
                    <p>
                        &copy;
                        <script>document.write(new Date().getFullYear());</script> Starbucks Coffee Company. All rights
                        reserved.
                    </p>
                </div>
            </div>
        </div>
    </footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
				stroke="#F96D00" />
		</svg></div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/aos.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/jquery.timepicker.min.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>
