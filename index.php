<?php
	session_start();
	include "mvc_controller/controller/travel_controller.php";
	include "mvc_controller/config/DBConfig.php";
	$travel_controller_obj = new travelController($db_conn);
	if(isset($_POST['search-flight'])){
		$_SESSION['from-location'] = $_POST['from-location'];
		$_SESSION['destination-location'] = $_POST['destination-location'];
		$_SESSION['date-of-depart'] = $_POST['date_of_depart'];
		$_SESSION['date-of-return'] = $_POST['date_of_return'];
		$_SESSION['type-of-class'] = $_POST['type_of_class'];
		$_SESSION['no-of-adults'] = $_POST['no-of-adults'];
		$_SESSION['no-of-child'] = $_POST['no-of-child'];
		$_SESSION['no-of-infant'] = $_POST['no-of-infant'];
  		// $travel_controller_obj->registerFlightDetails($_POST);
  	}
  	if(!empty($_POST['contact-name'])){
  		$travel_controller_obj->insertContactDetails($_POST);
  	}
  	if(!empty($_POST['newsletter-subscription'])){
  		$travel_controller_obj->subscriptionEmail($_POST);
  	}
  	if(isset($_POST['login'])){
  		$travel_controller_obj->validateUser($_POST);
  	}
  	if (isset($_POST['signup'])) {
  		$travel_controller_obj->RegisterNewUser($_POST);
  	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale=1">
		<title>Travel and Tourism</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker3.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old-Standard-TT">
	</head>
	<body>
		<!--PRELOADER-->
		<!-- <div class="preloader">
			<div class="status">&nbsp;</div>
		</div> -->
		<!--main-container starts here-->
		<div class="main-container">
			<!--navigation section starts here-->
				<nav class="navbar navbar-expand-lg w-100">
					<div class="container">
						<a class="navbar-brand" href="index.php">
							<img src="images/company-logo.png" alt="Company Logo">
						</a>
						<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-dropdown" aria-controls="nav-dropdown" aria-expanded = "false">
							   <span class="navbar-toggler-icon"><i class="fas fa-bars"></i></span>
						 </button>
						<div class="navbar-collapse collapse" id="nav-dropdown">
							<ul class="nav navbar-nav ml-auto">
								<li class="nav-item  active"><a href="#" class="nav-link active">Home</a></li>
								<li class="nav-item ">
									<div class="dropdown places-to-see-dropdown">
										<button class="dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									    	Places To See
										</button>
										<div class="dropdown-menu container-fluid" aria-labelledby="dropdownMenu">
											<div class="row">
												<div class="r1c1 col-lg-4 col-sm-12 col-md-12">								
										    		<a class="dropdown-item" href="pages/lumbini.php"><img src="images/lumbini.jpeg">Lumbini</a>
										    	</div>
										    	<div class="r1c2 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/upper-mustang.php"><img src="https://www.welcomenepal.com/uploads/destination/mustang-tk-adventure.jpeg">Upper Mustang</a>
										    	</div>
										    	<div class="r1c3 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/janakpur.php">
										    			<img src="images/places-to-visit/Janakpur3_lt.jpg" alt="">Janakpur
										    		</a>
										    	</div>
									    	</div>
									    	<div class="row">
									    		<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/gokyo.php">
										    			<img src="images/gokyo.jpeg">
										    		Gokyo</a>
										    	</div>
										    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/pokhara.php">
										    			<img src="images/places-to-visit/pkr-ss-leisure.jpeg">
										    		Pokhara</a>
										    	</div>
										    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/dolpa.php">
										    			<img src="images/places-to-visit/dolpa2.jpg">
										    		Dolpa</a>
										    	</div>
										    </div>
										    <div class="row">
										    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/chitwan.php">
										    			<img src="images/places-to-visit/chitwan3.jpg">
										    		Chitwan</a>
										    	</div>
										    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/kumari-goddess.php">
										    			<img src="images/kumari.jpeg">
										    		Living Goddess</a>
										    	</div>
										    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
										    		<a class="dropdown-item" href="pages/pashupatinath.php">
										    			<img src="images/places-to-visit/pashupatinath-sm-pilgrims.jpeg">
										    		Pashnupatinath</a>
										    	</div>
										    </div>
										    <div class="row">
										    	<div class="r1c1 col-lg-4 col-sm-12 col-md-12">
									    			<a class="dropdown-item" href="pages/national-park.php">
									    				<img src="images/places-to-visit/national-parks.jpeg">
									    			National Parks</a>
									    		</div>
									    	</div>
									  	</div>
									</div>
								</li>
								<li class="nav-item "><a href="pages/gallery.php" class="nav-link">Gallery</a></li>
								<li class="nav-item "><a href="pages/contact.php" class="nav-link">Contact Us</a></li>
								<li class="nav-item "><a href="pages/faq.php" class="nav-link">FAQs</a></li>
								<li class="nav-item ">
									<button class="login-btn">Login</button>
								</li>
							</ul>
						</div>
					</div>
				</nav>
				<!--navigation section ends here-->
			<header>
				<div id="header-slider" class="carousel slide carousel-fade" data-ride="carousel">
					<ol class="carousel-indicators">
					    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#header-slider" data-slide-to="1"></li>
					    <li data-target="#header-slider" data-slide-to="2"></li>
					    <li data-target="#header-slider" data-slide-to="3"></li>
					    <li data-target="#header-slider" data-slide-to="4"></li>
					    <li data-target="#header-slider" data-slide-to="5"></li>
					    <li data-target="#header-slider" data-slide-to="6"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="images/trek.jpeg" class="d-block w-100" alt="Person trekking to reach mountain">
							<div class="carousel-caption image-text">
								<h2>
									<strong>Welcome to<span class="small-screen"> Rainbow Nepal Airlines</span></strong> 
									Travel to see the World
								</h2>
								<a href="" target="_blank" class="link-1">> Find out more</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/paragliding.jpeg" class="d-block w-100" alt="Man Paragliding">
							<div class="carousel-caption image-text">
								<h2>
									<strong>Adventure</strong> 
									Go where you feel alive
								</h2>
								<a href="" target="_blank" class="link-2">> Find out more</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/NewSuites.jpg" class="d-block w-100" alt="New Suites">
							<div class="carousel-caption image-text">
								<h2>
									<strong>New Suites</strong>
									Experience the Difference
								</h2>
								<a class="link-3" href="http://A380.singaporeair.com" target="_blank"tabindex="-1">> Find out more</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/FirstClass.jpg" class="d-block w-100" alt="Flat Beds">
							<div class="carousel-caption image-text">
								<h2>
									<strong>Full Flat Beds</strong>
									Even on Our Shortest Flights
								</h2>
								<a class="link-4" href="http://www.singaporeair.com/en_UK/flying-withus/cabins/business-class/new-regional-business-class/" target="_blank"tabindex="-1">> Find out more</a>
							</div>
						</div>
						<div class="carousel-item hidden-sm">
							<img src="images/PlaneWindow.jpg" class="d-block w-100" alt="Lady holding wine glass">
							<div class="carousel-caption image-text">
								<h2>
									<strong>Travel</strong>
									Experiences are Miles Better
								</h2>
								<a class="link-5" href="https://www.singaporeair.com/en_UK/sg/ppsclub-krisflyer/krisflyer/" target="_blank"tabindex="-1">> Find out more</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/village.jpeg" class="d-block w-100" alt="Green village under snow covered mountains">
							<div class="carousel-caption image-text">
								<h2>
									<strong>Nature</strong>
									Travel to get lost in Nature
								</h2>
								<a class="link-6" href="https://www.singaporeair.com/en_UK/sg/ppsclub-krisflyer/krisflyer/" target="_blank"tabindex="-1">> Find out more</a>
							</div>
						</div>
						<div class="carousel-item">
							<img src="images/airplane.jpg" class="d-block w-100" alt="Plane banner">
							<div class="carousel-caption image-text">
								<h2>
									<strong>Rainbow Nepal Airlines</strong>
									Fly in Reputed Airline of Nepal
								</h2>
								<a class="link-7" href="https://www.singaporeair.com/en_UK/sg/ppsclub-krisflyer/krisflyer/" target="_blank"tabindex="-1">> Find out more</a>
							</div>
						</div>
					</div>
				</div>
				<!--booking-section class starts here-->
				<div class="booking-section container-fluid">
					<div class="tab-section">
						<ul class="tab" role="application">
							<li class="tab-item active" id="bookATripdiv" role="tab">								
								<a href="#" title="Book a trip">Book a trip</a>
						    </li>
							<li class="tab-item" id="retrieveBookingdiv" role="tab">									 
								<a href="#" title="Manage Booking">Manage booking</a>
						    </li>
							<li class="tab-item" id="onlineCheckIndiv" role="tab">
								<a href="#" title="Check in">Check in</a> 
						    </li>
							<li class="tab-item" id="flightStatusdiv" role="tab">				                
						    <a href="#" title="Flight status">Flight status</a>
						    </li>
						</ul>
					</div>
					<div class="tab-wrapper">
						<div data-bookatrip = "true" class="tab-heading">
							<ul role="application" class="tab-nav">
								<li role="tab" class="tab-nav-item active">
									<a href="#" class="flights-booking-tab">
										<span class="text">Flights</span>
									</a>
								</li><li role="tab" class="tab-nav-item">
									<a href="#" class="hotel-booking-tab">
										<span class="text">Hotels</span>
									</a>
								</li><li role="tab" class="tab-nav-item">
									<a href="#" class="cars-booking-tab">
										<span class="text">Cars</span>
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-content">
							<!--flights-section class starts here-->
							<div class="flights-section show" id="flight-book">
								<form action="" method="post" id="flight-booking" name="bookFlight" class="active form-book-travel form-book-flight">
									<div class="tab-nav-content active">
										<div class="form-group form-search-type">
											<input type="radio" name="search-type" checked="checked" id="flight-search" value>
											<label for="flight-search">Book Flights</label>
										</div>
									</div>
									<fieldset>
										<div class="form-group location-section">
											<div class="from-location">
												<label for="">From</label>
												<fieldset>
													<input type="text" name="from-location" placeholder="Search by city">
												</fieldset>
											</div><div class="destination-location">
												<label for="">To</label>
												<fieldset>
													<input type="text" name="destination-location" placeholder="Search by city">
												</fieldset>
											</div>
										</div>
										<div class="flight-information">
											<div class="form-group flight-type">
												<div class="input-radio two-way" data-option="true">
													<fieldset>
												        <input name="tripType" id="trip-type-1" type="radio" checked="checked" value="return">
												        <label for="trip-type-1">Return</label>
													</fieldset>
												</div>
												<div class="input-radio one-way" data-option="true">
													<fieldset>
												        <input name="tripType" data-recent-search="oneWay" id="trip-type-2" type="radio" value="one_way">
												        <label for="trip-type-2">One-way</label>
													</fieldset>
												</div>
											</div>
											<div class="flight-date form-group">
												<div class="depart-section">
													<label for="depart-date">Depart</label>
													<div class="input-group date">
														<input type="text" class="form-control depart-date" id="depart-date" name="date_of_depart">
														<span class="input-group-addon">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div>
												</div>
												<div class="return-section">
													<label for="return-date">Return</label>
													<div class="input-group date">
														<input type="text" class="form-control return-date" name="date_of_return">
														<span class="input-group-addon">
															<i class="far fa-calendar-alt"></i>
														</span>
													</div>
												</div>
											</div>
											<div class="form-group flight-option">
												<label>Class</label>
												<span>
													<select name="type_of_class" class="form-control select-data">
														<option value="Economy">Economy</option>
														<option value="Premium Business">Premium Business</option>
														<option value="Business">Business</option>
														<option value="First/Suites">First/Suites</option>
													</select>
												</span>
											</div>
											<div class="form-group number-of-passengers">
												<div class="adults">
													<label>Adult</label>
													<span>
														<select name="no-of-adults" class="form-control select-data">
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
															<option value="5">5</option>
															<option value="6">6</option>
															<option value="7">7</option>
															<option value="8">8</option>
															<option value="9">9</option>
															<option value="10">10</option>
														</select>
													</span>
												</div>
												<div class="child">
													<label>Child</label>
													<span>
														<select name="no-of-child" class="form-control select-data">
															<option value="0">0</option>
															<option value="1">1</option>
															<option value="2">2</option>
															<option value="3">3</option>
															<option value="4">4</option>
														</select>
													</span>
												</div>
												<div class="infant">
													<label>Infant</label>
													<span>
														<select name="no-of-infant" class="form-control select-data">
															<option value="0">0</option>
															<option value="1">1</option>
														</select>
													</span>
												</div>
											</div>
										</div>
										<button class="btn search-btn" name="search-flight" type="submit" formaction="pages/booking.php"><!-- <a href="pages/booking.php" class="search-flights"> -->Search Flights<!-- </a> --></button>
									
									</fieldset>
								</form>
							</div>
							<!--flights-section class ends here-->
							<!--hotel-section class starts here-->
							<div class="hotel-section" id="hotel-book">
								<form action="" method="post" id="hotel-booking" class="form-book-travel form-book-hotel">
									<fieldset>
										<div class="form-group destination-location">
											<label for="">Destination</label>
											<fieldset>
												<input type="text" name="destination-location" placeholder="City">
											</fieldset>
										</div>
										<div class="checkinout-section form-group">
											<div class="check-in-section form-group">
												<label>Check-in</label>
												<div class="input-group date">
													<input type="text" class="form-control check-in-date" name="date_of_checkIn">
													<span class="input-group-addon">
														<i class="far fa-calendar-alt"></i>
													</span>
												</div>
											</div>
											<div class="check-out-section form-group">
												<label>Check-out</label>
												<div class="input-group date">
													<input type="text" class="form-control check-out-date" name="date_of_checkOut">
													<span class="input-group-addon">
														<i class="far fa-calendar-alt"></i>
													</span>
												</div>
											</div>
										</div>
										<div class="room-details-section form-group">
											<div class="room">
												<label>Room</label>
												<div class="btn-group dropdown">
													<button class="btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">1</button>
													<ul class="dropdown-menu no-of-room">
													    <li><a class="dropdown-item" href="#">0</a></li>
													    <li><a class="dropdown-item active" href="#">1</a></li>
													    <li><a class="dropdown-item" href="#">2</a></li>
													    <li><a class="dropdown-item" href="#">3</a></li>
													    <li><a class="dropdown-item" href="#">4</a></li>
													</ul>
												</div>
											</div>
											<div class="adults">
												<label>Adults</label>
												<div class="btn-group dropdown">
													<button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												    2
													</button>
													<ul class="dropdown-menu scrollable-menu no-of-adults">
													    <li><a class="dropdown-item" href="#">1</a></li>
													    <li><a class="dropdown-item" href="#">2</a></li>
													    <li><a class="dropdown-item" href="#">3</a></li>
													    <li><a class="dropdown-item" href="#">4</a></li>
													    <li><a class="dropdown-item" href="#">5</a></li>
													    <li><a class="dropdown-item" href="#">6</a></li>
													    <li><a class="dropdown-item" href="#">7</a></li>
													    <li><a class="dropdown-item" href="#">8</a></li>
													    <li><a class="dropdown-item" href="#">9</a></li>
													    <li><a class="dropdown-item" href="#">10</a></li>
													    <li><a class="dropdown-item" href="#">11</a></li>
													    <li><a class="dropdown-item" href="#">12</a></li>
													    <li><a class="dropdown-item" href="#">13</a></li>
													    <li><a class="dropdown-item" href="#">14</a></li>
													    <li><a class="dropdown-item" href="#">15+</a></li>
													    
													</ul>
												</div>
											</div>
											<div class="child">
												<label>Child</label>
												<div class="btn-group dropdown">
													<button class="btn dropdown-toggle" type="button"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">0</button>
													<ul class="dropdown-menu scrollable-menu no-of-child">
													    <li><a class="dropdown-item" href="#">0</a></li>
													    <li><a class="dropdown-item" href="#">1</a></li>
													    <li><a class="dropdown-item" href="#">2</a></li>
													    <li><a class="dropdown-item" href="#">3</a></li>
													    <li><a class="dropdown-item" href="#">4</a></li>
													    <li><a class="dropdown-item" href="#">5</a></li>
													    <li><a class="dropdown-item" href="#">6</a></li>
													    <li><a class="dropdown-item" href="#">7</a></li>
													    <li><a class="dropdown-item" href="#">8</a></li>
													    <li><a class="dropdown-item" href="#">9</a></li>
													    <li><a class="dropdown-item" href="#">10</a></li>
													    <li><a class="dropdown-item" href="#">10+</a></li>
													</ul>
												</div>
											</div>
										</div>
										<button class="btn search-btn" type="submit">Search Hotels</button>
									</fieldset>
								</form>
							</div>
							<!--hotel-section class ends here-->
						</div>
				</div>
				<!--booking-section class ends here-->
			</header>
			<!--why-us-section starts here-->
			<div class="why-us-section">
				<div class="container">
					<h2 class="title">Why <span class="base-color">Choose</span> Us</h2>
					<div class="block-underline"></div>
					<div class="row">
						<div class="col-lg-12">
							<div class="why-us-section-carousel owl-carousel">
								<div class="item">
									<div class="shadow-effect">
										<i class="fas fa-plane img-circle"></i>
										<h2>Most Reliable Airlines</h2>
										<p>
											We provide flights in domestic as well as in international routes with less percentage of flight delay and cancelled.
										</p>
									</div>
								</div>
								<div class="item">
									<div class="shadow-effect">
										<i class="fas fa-calendar-check img-circle"></i>
										<h2>Fast and Reliable Ticket Booking</h2>
										<p>
											We provide a reliable and easy ticket booking system which is compatiable to different types of travellers.
										</p>
									</div>
								</div>
								<div class="item">
									<div class="shadow-effect">
										<i class="fas fa-user-shield img-circle"></i>
										<h2>Safety Parameters</h2>
										<p>
											We maintain masssive range of safety parameters as safety of our customers is our first priority
										</p>
									</div>
								</div>
								<div class="item">
									<div class="shadow-effect">
										<i class="fas fa-luggage-cart img-circle"></i>
										<h2>Great hospitality</h2>
										<p>
											We are engaged continuously on making customer stay comfortable and user-friendly with healthier food and entertainment
										</p>
									</div>
								</div>
								<div class="item">
									<div class="shadow-effect">
										<i class="fas fa-globe-asia img-circle"></i></i>
										<h2>Tour Packages</h2>
										<p>
											We offer different tour packages of different location inside Nepal with most reasonable price and discount
										</p>
									</div>
								</div>
								<div class="item">
									<div class="shadow-effect">
										<i class="fas fa-search img-circle"></i>
										<h2>User-Friendly Search System</h2>
										<p>
											Convenient and dest search for flights, airline tickets, tour packages, and hotels
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--why-us-section ends here-->
			<!--.company-services-section starts here-->
			<div class="company-services-section">
				<div class="container">
					<h2 class="title">Our <span class="base-color">Services</span></h2>
					<div class="block-underline"></div>
					<div class="row">
						<div class="col-lg-5 col-md-5 c1r1">
							<h2 class="">Flight Services</h2>
							<p class="">
								Leading Airline companies of Nepal with an objective of providing quality and modern services to customers
							</p>
							<a href="#">
								<button type="button" name="flight_book" class="book-btn">Book now</button>
							</a>
						</div>
						<div class="col-lg-5 col-md-5">
							<video autoplay loop muted>
								<source src="images/flight-service.mp4" type="video/mp4">
							</video>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-5 col-md-5">
							<div class="carousel slide" data-ride = "carousel">
								<div class="carousel-inner">
									<div class="carousel-item active">
										<img src="images/boudhanath.jpeg" alt="">
									</div>
									<div class="carousel-item">
										<img src="images/pokhara.jpeg" alt="">
									</div>
									<div class="carousel-item">
										<img src="images/kathmandu-durbar-square.jpeg" alt="">
									</div>
									<div class="carousel-item">
										<img src="images/bicycle-tour.jpeg" alt="">
									</div>
									<div class="carousel-item">
										<img src="images/abc.jpg" alt="">
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 c2r2">
							<h2 class="">Tour Services</h2>
							<p class="">
								Join a ride to experience a country that is rich in its nature &amp; cultural diversity by selecting  range of tour packages
							</p>
							<a href="#">
								<button type="button" name="flight_book" class="book-btn">Book now</button>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--.company-services-section ends here-->
			<!--gallery-section starts here-->
			<div class="gallery-section container">
				<h2 class="title"><span class="base-color">Photo</span> Gallery</h2>
				<div class="block-underline"></div>
				<div class="continuous-slider">
					<ul class="">
						<li>
							<img src="images/gallery-slider/1.jpg">
							<div class="hover">
                                        <ul>
                                            <li><i class="far fa-eye"></i> 1000+ Views</li>
                                            <li><i class="far fa-comments"></i> 236 Comments</li>
                                        </ul>
                            </div>
						</li>
						<li><img src="images/gallery-slider/2.jpg"></li>
						<li><img src="images/gallery-slider/3.jpg"></li>
						<li><img src="images/gallery-slider/4.jpg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/6.jpg"></li>
						<li><img src="images/gallery-slider/7.jpg"></li>
						<li><img src="images/gallery-slider/8.jpg"></li>
						<li><img src="images/gallery-slider/9.jpg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/11.jpg"></li>
						<li><img src="images/gallery-slider/12.jpg"></li>
						<li><img src="images/gallery-slider/13.jpg"></li>
						<li><img src="images/gallery-slider/14.jpeg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/16.jpeg"></li>
						<li><img src="images/gallery-slider/17.jpeg"></li>
						<li><img src="images/gallery-slider/18.jpeg"></li>
						<li><img src="images/gallery-slider/19.jpeg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/21.jpeg"></li>
						<li><img src="images/gallery-slider/22.jpeg"></li>
						<li><img src="images/gallery-slider/23.jpeg"></li>
						<li><img src="images/gallery-slider/24.jpeg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/26.jpeg"></li>
						<li><img src="images/gallery-slider/27.jpeg"></li>
						<li><img src="images/gallery-slider/28.jpeg"></li>
						<li><img src="images/gallery-slider/29.jpeg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/31.jpeg"></li>
						<li><img src="images/gallery-slider/32.jpeg"></li>
						<li><img src="images/gallery-slider/33.jpeg"></li>
						<li><img src="images/gallery-slider/34.jpg"></li>
						
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/5.jpg"></li>
						<li><img src="images/gallery-slider/10.jpg"></li>
						<li><img src="images/gallery-slider/15.jpeg"></li>
						<li><img src="images/gallery-slider/20.jpeg"></li>
					</ul>
					<ul class="">
						<li><img src="images/gallery-slider/25.jpeg"></li>
						<li><img src="images/gallery-slider/30.jpeg"></li>
						<li><img src="images/gallery-slider/35.jpeg"></li>
						<li><img src="images/gallery-slider/36.jpeg"></li>
					</ul>
				</div>
			</div>
			<!--gallery-section ends here-->
			<!--.parallax-window starts here-->
			<div class="parallax-window" data-parallax="scroll" data-image-src="images/annapurna-base-camp.jpg" data-speed="0.75" data-position="center" data-ios-fix = "true" data-andriod-fix = "true">
				<div class="container">
					<div class="row">
						<div class="happy-customers col-lg-3 col-sm-6">
							<i class="far fa-smile"></i>
							<span class="countnum">2000+</span>
							<h4>Happy Tourist</h4>
						</div>
						<div class="destinations col-lg-3 col-sm-6">
							<i class="fas fa-globe-asia"></i>
							<span class="countnum">80+</span>
							<h4>Destinations</h4>
						</div>
						<div class="flight-hours col-lg-3 col-sm-6">
							<i class="fas fa-plane"></i>
							<span class="countnum">5000+</span>
							<h4>Flight Hours</h4>
						</div>
						<div class="tour-packages col-lg-3 col-sm-6">
							<i class="fas fa-suitcase-rolling"></i>
							<span class="countnum">50+</span>
							<h4>Tour Packages</h4>
						</div>
					</div>
				</div>
			</div>
			<!--.parallax-window ends here-->
			<!--discover-nepal-section starts here-->
			<div class="discover-nepal-section">
				<h2 class="title"><span class="base-color">Discover</span> Nepal</h2>
				<div class="block-underline"></div>
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 col-sm-12 image-block">
							<div class="row">
								<div class="grid col-12">
									<figure class="col-md-12 col-lg-6 col-sm-12 col-xs-12 overlay-effect">
											<img src="images/dolpa.jpeg" class = "img-responsive" alt="Dolpa" title="Dolpa">
											<figcaption>
												<h2 class="caption-overlay-title">Dolpa
													<i class="fas fa-long-arrow-alt-right"></i>
												</h2>
												<p class="caption-overlay-content">
													Trek through hidden valleys, visit ancient Shey Gompa, touch icy waters of  Phoksundo Lake.
												</p>
												<a href=""></a>
											</figcaption>
									</figure>
									<figure class="col-md-12 col-lg-6 col-sm-12 col-xs-12 overlay-effect">
											<img src="images/lumbini.jpeg" class = "img-responsive" alt="Lumbini" title="Lumbini">
											<figcaption>
												<h2 class="caption-overlay-title">Lumbini
													<i class="fas fa-long-arrow-alt-right"></i>
												</h2>
												<p class="caption-overlay-content">
													Visit Buddha's birthplace or international Buddhist monasteries; study Buddhism or meditate!
												</p>
												<a href=""></a>
											</figcaption>
									</figure>
								</div>
								<div class="grid col-12">
									<figure class="col-md-12 col-lg-6 col-sm-12 col-xs-12 overlay-effect">
											<img src="images/gokyo.jpeg" class = "img-responsive" alt="Gokyo" title="Gokyo">
											<figcaption>
												<h2 class="caption-overlay-title">Gokyo
													<i class="fas fa-long-arrow-alt-right"></i>
												</h2>
												<p class="caption-overlay-content">
													Take the alternative route to the serene & rocky Gokyo valley with pristine turquoise glacial lakes
												</p>
												<a href=""></a>
											</figcaption>
									</figure>
									<figure class="col-md-12 col-lg-6 col-sm-12 col-xs-12 overlay-effect">
											<img src="images/kumari.jpeg" class = "img-responsive" alt="The Living Goddess" title="The Living Goddess">
											<figcaption>
												<h2 class="caption-overlay-title">The Living Goddess
													<i class="fas fa-long-arrow-alt-right"></i>
												</h2>
												<p class="caption-overlay-content">
													Get a glimpse of Kumari, the little Goddess, at Kumari Ghar in Basantapur, Ktm Durbar Square.
												</p>
												<a href=""></a>
											</figcaption>
									</figure>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-12 image-block">
							<div class="grid col-12">
									<figure class="col-md-12 col-lg-12 col-sm-12 col-xs-12 overlay-effect">
											<img src="images/places-to-visit/pashupatinath-sm-pilgrims.jpeg" class = "img-responsive" alt="Gokyo" title="Gokyo">
											<figcaption>
												<h2 class="caption-overlay-title">Pashupatinath
													<i class="fas fa-long-arrow-alt-right"></i>
												</h2>
												<p class="caption-overlay-content">
													Visit the holy Pashupatinath Temple this Maha Shivaratri for an out-of-this-world experience.
												</p>
												<a href="pages/pashupatinath.php"></a>
											</figcaption>
									</figure>
								</div>
						</div>
					</div>
				</div>
			</div>
			<!--discover-nepal-section ends here-->
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
			                    <form action="" method="post" class="contact-form" name="contactForm" id="contact-form-id">
			                        <div class="form-group">
			                            <input type="text" name="contact-name" class="form-control" placeholder="Name">
			                        </div>
			                        <div class="form-group">
			                            <input type="email" name="contact-email" class="form-control" placeholder="Email">
			                        </div>
			                        <div class="form-group textarea">
			                            <textarea cols="30" rows="5" name="contact-message" class="form-control" placeholder="Message"></textarea>
			                        </div>
			                        <button type="submit" class="feedback-submit">Submit</button>
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
						<div class="col-lg-6 col-sm-12">
							&copy; Rainbow Nepal Airlines
						</div>
						<div class="navigation col-lg-6 col-sm-12">
							<ul>
								<li><a href="">Top</a></li>
								<li><a href="index.php">Home</a></li>
								<li><a href="pages/gallery.php">Gallery</a></li>
								<li><a href="pages/contact.php">Contact Us</a></li>
								<li><a href="pages/faq.php">FAQs</a></li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
			<!--FOOTER ends here-->
			<!--login pop-up-->
			<div class="login-form">
				<div id="modal-wrapper" class="modal login-modal">				  
				  	<form class="modal-content animate" action="#" method="post">      
					    <div class="img-container">
					    	<img src="images/man.png">
					      	<span class="close" title="Close PopUp">&times;</span>
					      	<h1>Login</h1>
					    </div>
					    <div class="form-group">
					      	<input type="text" class="form-control" placeholder="Enter Username" name="username">
					    </div>
					    <div class="form-group">
					      	<input type="password" class="form-control" placeholder="Enter Password" name="password"> 
					    </div>
					      	<button type="submit" class="btn btn-primary" name="login">Login</button>
					    <a href="#" class="new-account">Create a new account?</a> 
					</form>	 

				</div>
			</div>
			<!--login popup ends here-->
			<!--signup pop-up-->
			<div class="signup-form">
				<div id="modal-wrapper" class="modal signup-modal">				  
				  	<form class="modal-content animate" action="" method="post">      
					    <div class="img-container">
					    	<img src="images/man.png">
					      	<span class="close" title="Close PopUp">&times;</span>
					      	<h1>Sign Up</h1>
					    </div>
					    <div class="form-group">
					      	<input type="text" class="form-control" placeholder="Enter Name" name="name">
					    </div>
					    <div class="form-group">
					      	<input type="email" class="form-control" placeholder="Enter Email Address" name="email">
					    </div>
					    <div class="form-group">
					      	<input type="text" class="form-control" placeholder="Enter Username" name="username">
					    </div>
					    <div class="form-group">
					      	<input type="password" class="form-control" placeholder="Enter Password" name="password"> 
					    </div>  
					    <button type="submit" class="btn btn-primary" name="signup">Sign Up</button>
					    <a href="#" class="old-account">Already have an account?</a> 
					</form>	 

				</div>
			</div>
			<!--signup popup ends here-->
		</div>
		<!--.main-container ends here-->
	</body>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script type='text/javascript' src='//code.jquery.com/jquery-1.8.3.js'></script>
	<script src="js/infiniteslidev2.min.js"></script>
	<script type='text/javascript' src="js/bootstrap-datepicker.js"></script>
	<script type='text/javascript' src="js/owl.carousel.min.js"></script>
	<script src="js/app.js"></script>
</html>