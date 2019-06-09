<?php
	include "../mvc_controller/controller/travel_controller.php";
	include "../mvc_controller/config/DBConfig.php";
	$student_controller_obj = new travelController($db_conn);
  	if(!empty($_POST['contact-name'])){
  		$student_controller_obj->insertContactDetails($_POST);
  	}
  	if(!empty($_POST['newsletter-subscription'])){
  		$student_controller_obj->subscriptionEmail($_POST);
  	}
  	if(!empty($_POST['username'])){
  		$student_controller_obj->validateUser($_POST);
  	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale=1">
		<title>Contact Us - Rainbow Nepal Airlines</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old-Standard-TT">
	</head>
	<body>
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
		<!--.contact-area starts here-->
			<div class="contact-area contact-bg">
			    <div class="container">
			        <div class="row justify-content-center">
			            <div class="col-lg-8">
			                <div class="section-title">
			                    <h2 class="title"><span class="base-color">Get</span> In Touch</h2>
			                    <p>We see our customers as invited guests to a party, and we are the hosts. It’s our job every day to make every important aspect of the customer experience a little bit better.</p>
			                </div>
			            </div>
			        </div>
			        <div class="row">
			            <div class="col-lg-6">
			                <div class="contact-info-area">
			                    <h4 class="title">Rainbow <span class="base-color">Nepal</span> Airlines</h4>
			                    <p>From Kathmandu, Nepal to the World; The World Is Our Home, You Are Our Guest; Flying Reimagined; Choose Well!!!</p>
			                    <ul class="contact-info-list">
			                        <li><i class="fas fa-home"></i> Location : New Road, Kathmandu 44600, Nepal</li>
			                        <li><i class="fas fa-phone"></i> Phone : +977-1-4220757</li>
			                        <li><i class="fas fa-fax"></i> Fax : +977-1-4225348</li>
			                        <li><i class="fas fa-envelope"></i> Email: <a target="_blank" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@example.com&body=my-text">info@example.com</a></li>
			                    </ul>
			                    <ul class="social-icon">
			                        <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
			                        <li><a href="#" class="twitter"><i class="fab fa-twitter"></i></a></li>
			                        <li><a href="#" class="instagram"><i class="fab fa-instagram"></i></a></li>
			                        <li><a href="#" class="pinterest"><i class="fab fa-pinterest"></i></a></li>
			                        <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
			                        <li><a href="#" class="youtube"><i class="fab fa-youtube"></i></a></li>
			                    </ul>
			                </div>
			            </div>
			            <div class="col-lg-6">
			                <div class="contact-form-content-area">
			                    <form action="index.html" class="contact-form">
			                        <div class="form-group">
			                            <input type="text" class="form-control" placeholder="Name">
			                        </div>
			                        <div class="form-group">
			                            <input type="email" class="form-control" placeholder="Email">
			                        </div>
			                        <div class="form-group textarea">
			                            <textarea cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
			                        </div>
			                        <button type="submit" class="btn-submit">Submit</button>
			                    </form>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!--.contact-area ends here-->
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
	<script src="../js/app.js"></script>
</html>