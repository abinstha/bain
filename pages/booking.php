<?php
	include "../mvc_controller/controller/travel_controller.php";
	include "../mvc_controller/config/DBConfig.php";
	session_start();
	$travel_controller_obj = new travelController($db_conn);
	if (isset($_POST['book-flight'])) {
		$travel_controller_obj->registerFlightDetails($_POST);
	}
	// print_r($_SESSION);
	// $departure_location = $_SESSION['from-location'];
	// $destination_location = $_SESSION['destination-location'];
	// $departure_date = $_SESSION['date-of-depart'];
	// $return_date = $_SESSION['date-of-return'];
	// $class = $_SESSION['type-of-class'];
	// $no_of_adult = $_SESSION['no-of-adults'];
	// $no_of_child = $_SESSION['no-of-child'];
	// $no_of_infant = $_SESSION['no-of-infant'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale=1">
		<title>Booking - Rainbow Nepal Airlines</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/mdb.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
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
		<!--navigation ends here-->
		<div class="container">
			<!--table-->
			<table class="table table-bordered table-hover">
			    <thead>
			        <tr>
			            <th>Departure Location</th>
			            <th>Destination Location</th>
			            <th>Departure Date</th>
			            <th>Departure Time</th>
			            <th>Return Date</th>
			            <th>Return Time</th>
			            <th>Class</th>
			            <th>Book</th>
			        </tr>
			    </thead>
			    <tbody>
			        <?php for($i=1; $i<10; $i++){ ?>
			        <tr>
			            <td>Kathmandu</td>
			            <td>Pokhara</td>
			            <td>2019-05-21</td>
			            <td><?php $d_time = strtotime("+$i Hours"); echo date("h:ia", $d_time); ?></td>
			            <td>2019-05-23</td>
			            <td><?php $t = $i+3; echo date("h:ia",strtotime("+$t Hours")); ?></td>
			            <td>Premium Business</td>
			            <td><button class="btn btn-primary flight-book">Book</button></td>
			        </tr>
			 		<?php }?>
			    </tbody>
			</table>
			<!--Table Ends Here-->
		</div>
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
					<div class="col-lg-6 col-sm-12">
						&copy; Rainbow Nepal Airlines
					</div>
					<div class="navigation col-lg-6 col-sm-12">
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
		<!--signup pop-up-->
			<div class="flight-book-form">
				<div id="modal-wrapper" class="modal book-modal">				  					    
					<form action="#" method="post" class="modal-content animate book-form" style="overflow: scroll; padding: 20px; background: #f5f0f0;">
						<?php for($i=0;$i<1;$i++){?>
							<h1 style="text-align: center;" class="title">Book Flight</h1>
						<div class="form-group">
							<label for="firstname">First Name</label>
							<input type="text" class="form-control" id="firstname" name="firstname">
							<label for="lastname">Last Name</label>
							<input type="text" class="form-control" name="lastname">
						</div>
						<div class="form-group">
							<label for="email">Email Address</label>
							<input type="email" id="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="departure-location">Departure Location</label>
							<input type="text" id="departure-location" class="form-control" name="departure-location" value="<?= $departure_location ?>">
						</div>
						<div class="form-group">
							<label for="destination-location">Destination Location</label>
							<input type="text" id="destination-location" class="form-control" name="destination-location" value="<?= $destination_location ?>">
						</div>
						<div class="form-group">
							<label for="d-date">Departure Date</label>
							<input type="text" id="d-date" class="form-control" name="d-date" value="<?= $departure_date?>">
						</div>
						<div class="form-group">
							<label for="r-date">Return Date</label>
							<input type="text" id="r-date" class="form-control" name="r-date" value="<?= $return_date?>">
						</div>
						<div class="form-group">
							<label for="class">Class</label>
							<input type="text" id="class" class="form-control" name="class" value="<?= $class?>">
						</div>
						<div class="form-group">
							<label for="no-of-adult">Adults</label>
							<input type="text" id="no-of-adult" class="form-control" name="no-of-adult" value="<?= $no_of_adult?>">
							<label for="no-of-child">Child</label>
							<input type="text" id="no-of-child" class="form-control" name="no-of-child" value="<?= $no_of_child?>">
							<label for="no-of-infant">Infant</label>
							<input type="text" id="no-of-infant" class="form-control" name="no-of-infant" value="<?= $no_of_infant?>">
						</div>
						<div class="form-group">
							<button class="btn btn-primary" name="book-flight">Book Flight</button>
						</div>
					<?php } ?>
					</form>
				</div>
			</div>
			<!--signup popup ends here-->


	</body>
	<script src="../js/jquery.min.js"></script>
	<script src="../js/jquery.waypoints.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/parallax.min.js"></script>
	<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
	<script src="../js/infiniteslidev2.min.js"></script>
	<script type='text/javascript' src="../js/bootstrap-datepicker.js"></script>
	<script type='text/javascript' src="../js/owl.carousel.min.js"></script>
	<script src="../js/app.js"></script>
</html>