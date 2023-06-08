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
			$result = mysqli_query($mysqli, "SELECT image FROM photogallery WHERE type != 'menu' ORDER BY RAND() LIMIT 1;");
			$res = mysqli_fetch_array($result);
			echo "<div class=\"slider-item\" style=\"background-image: url(".$res["image"].");\" data-stellar-background-ratio=\"0.5\">";
		?>
      	<div class="overlay"></div>
        <div class="container">
          <div class="row slider-text justify-content-center align-items-center">

            <div class="col-md-7 col-sm-12 text-center ftco-animate">
            	<h1 class="mb-3 mt-5 bread">Our Menu</h1>
	            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Menu</span></p>
            </div>

          </div>
        </div>
      </div>
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

    <section class="ftco-section">
    	<div class="container">
        <div class="row">
			<?php
        	echo "<div class=\"col-md-6 mb-5 pb-3\">
        		<h3 class=\"mb-5 heading-pricing ftco-animate\">Drinks</h3>";
	
			$result = mysqli_query($mysqli, "SELECT name, SUBSTRING(DESCRIPTION, 1, 55) AS description, price, image FROM product
			WHERE categoryID BETWEEN 1 and 7 AND CHAR_LENGTH(name) < 35
			ORDER BY RAND() LIMIT 4;");

			while($res = mysqli_fetch_array($result)) {         
				echo "<div class=\"pricing-entry d-flex ftco-animate\">
						<div class=\"img\" style=\"background-image: url(".$res["image"].");\"></div>
						<div class=\"desc pl-3\">
							<div class=\"d-flex text align-items-center\">
								<h3><span>".$res["name"]."</span></h3>
								<span class=\"price\">".$res["price"]."</span>
							</div>
							<div class=\"d-block\">
								<p>".$res["description"]."</p>
							</div>
						</div>
					</div> ";
			}
			echo "</div>";

			$result = mysqli_query($mysqli, "SELECT name FROM category WHERE categoryID = 8;");
			$res = mysqli_fetch_array($result);
        	echo "<div class=\"col-md-6 mb-5 pb-3\">
        		<h3 class=\"mb-5 heading-pricing ftco-animate\">".$res["name"]."</h3>";
	
			$result = mysqli_query($mysqli, "SELECT name, SUBSTRING(DESCRIPTION, 1, 55) AS description, price, image FROM product
			WHERE categoryID = 8 AND CHAR_LENGTH(name) < 35
			ORDER BY RAND() LIMIT 4;");

			while($res = mysqli_fetch_array($result)) {         
				echo "<div class=\"pricing-entry d-flex ftco-animate\">
						<div class=\"img\" style=\"background-image: url(".$res["image"].");\"></div>
						<div class=\"desc pl-3\">
							<div class=\"d-flex text align-items-center\">
								<h3><span>".$res["name"]."</span></h3>
								<span class=\"price\">".$res["price"]."</span>
							</div>
							<div class=\"d-block\">
								<p>".$res["description"]."</p>
							</div>
						</div>
					</div> ";
			}
			echo "</div>";
			
			$result = mysqli_query($mysqli, "SELECT name FROM category WHERE categoryID = 9;");
			$res = mysqli_fetch_array($result);
			echo "<div class=\"col-md-6\">
				<h3 class=\"mb-5 heading-pricing ftco-animate\">".$res["name"]."</h3>";
	
			$result = mysqli_query($mysqli, "SELECT name, SUBSTRING(DESCRIPTION, 1, 55) AS description, price, image FROM product
			WHERE categoryID = 9 AND CHAR_LENGTH(name) < 35
			ORDER BY RAND() LIMIT 4;");

			while($res = mysqli_fetch_array($result)) {         
				echo "<div class=\"pricing-entry d-flex ftco-animate\">
						<div class=\"img\" style=\"background-image: url(".$res["image"].");\"></div>
						<div class=\"desc pl-3\">
							<div class=\"d-flex text align-items-center\">
								<h3><span>".$res["name"]."</span></h3>
								<span class=\"price\">".$res["price"]."</span>
							</div>
							<div class=\"d-block\">
								<p>".$res["description"]."</p>
							</div>
						</div>
					</div> ";
			}
			echo "</div>";

			$result = mysqli_query($mysqli, "SELECT name FROM category WHERE categoryID = 10;");
			$res = mysqli_fetch_array($result);
			echo "<div class=\"col-md-6\">
				<h3 class=\"mb-5 heading-pricing ftco-animate\">".$res["name"]."</h3>";
	
			$result = mysqli_query($mysqli, "SELECT name, SUBSTRING(DESCRIPTION, 1, 55) AS description, price, image FROM product
			WHERE categoryID = 10 AND CHAR_LENGTH(name) < 35
			ORDER BY RAND() LIMIT 4;");

			while($res = mysqli_fetch_array($result)) {         
				echo "<div class=\"pricing-entry d-flex ftco-animate\">
						<div class=\"img\" style=\"background-image: url(".$res["image"].");\"></div>
						<div class=\"desc pl-3\">
							<div class=\"d-flex text align-items-center\">
								<h3><span>".$res["name"]."</span></h3>
								<span class=\"price\">".$res["price"]."</span>
							</div>
							<div class=\"d-block\">
								<p>".$res["description"]."</p>
							</div>
						</div>
					</div> ";
			}
			echo "</div>";

			$result = mysqli_query($mysqli, "SELECT name FROM category WHERE categoryID = 11;");
			$res = mysqli_fetch_array($result);
			echo "<div class=\"col-md-6\">
				<h3 class=\"mb-5 heading-pricing ftco-animate\">".$res["name"]."</h3>";
	
			$result = mysqli_query($mysqli, "SELECT name, SUBSTRING(DESCRIPTION, 1, 55) AS description, price, image FROM product
			WHERE categoryID = 11 AND CHAR_LENGTH(name) < 35
			ORDER BY RAND() LIMIT 4;");

			while($res = mysqli_fetch_array($result)) {         
				echo "<div class=\"pricing-entry d-flex ftco-animate\">
						<div class=\"img\" style=\"background-image: url(".$res["image"].");\"></div>
						<div class=\"desc pl-3\">
							<div class=\"d-flex text align-items-center\">
								<h3><span>".$res["name"]."</span></h3>
								<span class=\"price\">".$res["price"]."</span>
							</div>
							<div class=\"d-block\">
								<p>".$res["description"]."</p>
							</div>
						</div>
					</div> ";
			}
			echo "</div>";

			$result = mysqli_query($mysqli, "SELECT name FROM category WHERE categoryID = 12;");
			$res = mysqli_fetch_array($result);
			echo "<div class=\"col-md-6\">
				<h3 class=\"mb-5 heading-pricing ftco-animate\">".$res["name"]."</h3>";
	
			$result = mysqli_query($mysqli, "SELECT name, SUBSTRING(DESCRIPTION, 1, 55) AS description, price, image FROM product
			WHERE categoryID = 12 AND CHAR_LENGTH(name) < 35;");

			while($res = mysqli_fetch_array($result)) {         
				echo "<div class=\"pricing-entry d-flex ftco-animate\">
						<div class=\"img\" style=\"background-image: url(".$res["image"].");\"></div>
						<div class=\"desc pl-3\">
							<div class=\"d-flex text align-items-center\">
								<h3><span>".$res["name"]."</span></h3>
								<span class=\"price\">".$res["price"]."</span>
							</div>
							<div class=\"d-block\">
								<p>".$res["description"]."</p>
							</div>
						</div>
					</div> ";
			}
			echo "</div>";
			?>
        
		</div>
    	</div>
    </section>

    <section class="ftco-menu mb-5 pb-5">
    	<div class="container">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<span class="subheading">Discover</span>
            <h2 class="mb-4">Our Products</h2>
            <p>Whether you're seeking the best brew method for your favorite blend or exploring our rarest offerings, you’ve come to the
							right place.</p>
          </div>
        </div>
    		<div class="row d-md-flex">
	    		<div class="col-lg-12 ftco-animate p-md-5">
		    	<div class="row">
		          <div class="col-md-12 nav-link-wrap mb-5">
		            <div class="nav ftco-animate nav-pills justify-content-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
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
							WHERE categoryID BETWEEN 1 and 7 AND CHAR_LENGTH(name) < 20;");

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
								WHERE categoryID = '$id' AND CHAR_LENGTH(name) < 30;");
	
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
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>