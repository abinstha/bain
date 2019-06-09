<?php
	include "../mvc_controller/controller/travel_controller.php";
	include "../mvc_controller/config/DBConfig.php";
	$student_controller_obj = new travelController($db_conn);
  	if(!empty($_POST['newsletter-subscription'])){
  		$student_controller_obj->subscriptionEmail($_POST);
  	}
  	if(!empty($_POST['username'])){
  		$student_controller_obj->validateUser($_POST);
  	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale=1">
		<title>Gallery - Rainbow Nepal Airlines</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/mdb.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old-Standard-TT">
	</head>
	<body>
		<!--PRELOADER-->
		<div class="preloader">
			<div class="status">&nbsp;</div>
		</div>
		<!--navigation section starts here-->
		<nav class="navbar navbar-expand-lg w-100">
			<div class="container">
					<a class="navbar-brand" href="../index.php">
						<img src="../images/company-logo.png" alt="Company Logo">
					</a>
					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-dropdown" aria-controls="nav-dropdown" aria-expanded = "false">
						   <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
					 </button>
					<div class="navbar-collapse collapse" id="nav-dropdown">
						<ul class="nav navbar-nav ml-auto">
							<li class="nav-item  active"><a href="../index.php" class="nav-link">Home</a></li>
							<li class="nav-item ">
								<div class="dropdown places-to-see-dropdown">
									<button class="dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								    	Places To See
									</button>
									<div class="dropdown-menu container-fluid" aria-labelledby="dropdownMenu">
										<div class="row">
											<div class="r1c1 col-lg-4 col-sm-12 col-md-12">								
									    		<a class="dropdown-item" href="lumbini.php"><img src="../images/lumbini.jpeg">Lumbini</a>
									    	</div>
									    	<div class="r1c2 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="upper-mustang.php"><img src="https://www.welcomenepal.com/uploads/destination/mustang-tk-adventure.jpeg">Upper Mustang</a>
									    	</div>
									    	<div class="r1c3 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="janakpur.php">
									    			<img src="../images/places-to-visit/Janakpur3_lt.jpg" alt="">Janakpur
									    		</a>
									    	</div>
								    	</div>
								    	<div class="row">
								    		<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="gokyo.php">
									    			<img src="../images/gokyo.jpeg">
									    		Gokyo</a>
									    	</div>
									    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="pokhara.php">
									    			<img src="../images/places-to-visit/pkr-ss-leisure.jpeg">
									    		Pokhara</a>
									    	</div>
									    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="dolpa.php">
									    			<img src="../images/places-to-visit/dolpa2.jpg">
									    		Dolpa</a>
									    	</div>
									    </div>
									    <div class="row">
									    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="chitwan.php">
									    			<img src="../images/places-to-visit/chitwan3.jpg">
									    		Chitwan</a>
									    	</div>
									    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="kumari-goddess.php">
									    			<img src="../images/kumari.jpeg">
									    		Living Goddess</a>
									    	</div>
									    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    		<a class="dropdown-item" href="pashupatinath.php">
									    			<img src="../images/places-to-visit/pashupatinath-sm-pilgrims.jpeg">
									    		Pashnupatinath</a>
									    	</div>
									    </div>
									    <div class="row">
									    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
								    			<a class="dropdown-item" href="national-park.php">
								    				<img src="../images/places-to-visit/national-parks.jpeg">
								    			National Parks</a>
								    		</div>
								    	</div>
								  	</div>
								</div>
							</li>
							<li class="nav-item "><a href="gallery.php" class="nav-link active">Gallery</a></li>
							<li class="nav-item "><a href="contact.php" class="nav-link">Contact Us</a></li>
							<li class="nav-item "><a href="faq.php" class="nav-link">FAQs</a></li>
							<li class="nav-item ">
								<button class="login-btn">Login</button>
							</li>
						</ul>
					</div>
			</div>
		</nav>
		<!--navigation section ends here-->
		<!--gallery-section starts here-->
		<div class="container gallery-section">
			<h2 class="title">Gallery<span class="base-color"> #</span></h2>
			<div class="image-section">
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/1.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Woman Cooking While Cuddling a Child</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/2.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Mountains During DayTime</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/3.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">River Between Mountains</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/4.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Person Holding Black Framed Clubmaster-Style Sunglasses</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/5.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Hanging Bridge Selective Focus Photography</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/6.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Four Persons Riding Elephant During Daytime</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/7.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Man Standing on the top of Mountain</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/8.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Cliff near the Village </p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/9.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Person Holding Umbrella</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/10.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">White Mosque Under Cloudy Blue Sky During Daytime</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/11.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Person Paragliding over the Mountains</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/12.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Toddler Wearing Gray and Multicolored Dress Bend Down White Holding his Knee on the Floor</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/13.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Two Boy's Sitting on a Log</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/14.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Four Holy Men on Ruins</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/15.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">People Wearing Masks Standing Between Buildings at Day-time in Boudhanath</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/16.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Lime-lapse Photography of Man Jumping</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/17.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Person Walking on Concrete Busy Road</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/18.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Shallow Focus Photo of Man Sitting on The Side of a Street</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/19.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Brown Statue Near the Mountains</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/20.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Hello</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/21.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Three Toddler's in Red Clothes</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/22.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Houses Overlooking Mountain Range</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/23.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Monkey on Gray Metal temple</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/24.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Mountain Ranges</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/25.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Aerial Photo of Mountain at Day-time</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/26.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Gray Steel Bell near Door</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/27.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Smiling Woman on Canoe</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/28.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Concrete Buildings During Day-time</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/29.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">Woman standing near Syambhunath</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12 view overlay zoom">
						<img class="img-fluid" src="../images/gallery-page/30.webp" alt="">
						<div class="mask flex-center">
							<p class="white-text">People Standing NNear Brown Temple During Day-time</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--gallery-section ends here-->
		<!--FOOTER starts here-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-12 col-md-12">
						<img src="images/company-logo.png" alt="Company Logo">
						<quote>
							“Your true traveler finds boredom rather agreeable than painful. It is the symbol of his liberty-his excessive freedom. He accepts his boredom, when it comes, not merely philosophically, but almost with pleasure.”
						</quote>
						<p class="writer">- Mark Twain</p>
					</div>
					<div class="col-lg-4 col-sm-12 col-md-6">
						<h2>Contact</h2>
						<ul class="contact-info-list">
						    <li><i class="fas fa-home"></i> Location : New Road, Kathmandu 44600, Nepal</li>
						    <li><i class="fas fa-phone"></i> Phone : +977-1-4220757</li>
						    <li><i class="fas fa-fax"></i> Fax : +977-1-4225348</li>
						    <li><i class="fas fa-envelope"></i> Email: <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@example.com&body=my-text">info@example.com</a></li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-12 col-md-6">
						<h2>Follow us:</h2>
						<p class="social-contact">
							<i class="fab fa-facebook-f"></i>
							<i class="fab fa-twitter"></i>
							<i class="fab fa-instagram"></i>
							<i class="fab fa-pinterest"></i>
							<i class="fab fa-linkedin-in"></i>
							<i class="fab fa-youtube"></i>
						</p>
						<form action="" method="post">
							<input type="text" name="newsletter-subscription" placeholder="Enter an E-mail Address">
							<button type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row">
					<div class="col-6">
						&copy; Rainbow Nepal Airlines
					</div>
					<div class="navigation col-6">
						<ul>
							<li><a href="">Top</a></li>
							<li><a href="../index.php">Home</a></li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="contact.php">Contact Us</a></li>
							<li><a href="faq.php">FAQs</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!--FOOTER ends here-->
	</body>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/mdb.min.js"></script>
	<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
	<script src="../js/app.js"></script>
</html>