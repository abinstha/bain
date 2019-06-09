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
<html>
	<head>
		<meta charset="utf-8">
		<meta name = "viewport" content = "width = device-width, initial-scale=1">
		<title>Pashupatinath - Rainbow Nepal Airlines</title>
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
		<div class="pashupatinath-container place-to-visit">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="https://www.welcomenepal.com/uploads/destination/pashupatinath-sm-pilgrims.jpeg" title="Pashupatinath" alt="Pashupatinath">
			            <div class="carousel-caption">
							<h2>Pashupatinath</h2>
							<h4>Visit the holy Pashupatinath Temple this Maha Shivaratri for an out-of-this-world experience.</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="product container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1 class="title">
							Pashupatinath <span class="base-color">Temple</span>
						</h1>
						<p>
							Dedicated to Lord Shiva, Pashupatinath is one of the four most important religious sites in Asia for devotees of Shiva. Built in the 5th century and later renovated by Malla kings, the site itself is said to have existed from the beginning of the millennium when a Shiva <em>lingam </em>was discovered here.
						</p>
						<p>
							The largest temple complex in Nepal, it stretches on both sides of the Bagmati River which is considered holy by Hindus.&nbsp; The main pagoda style temple has a gilded roof, four sides covered in silver, and wood carvings of the finest quality. Temples dedicated to several other Hindu and Buddhist deities surround the temple of Pashupatinath.
						</p>
						<p>
							<img alt="Devotees at the evening Aarati by the Bagmati River at Pashupatinath Temple, Kathmandu, Nepal. " src="../images/places-to-visit/Pashupatinath2_sm_pilgrims1.jpg">
						</p>
						<p>
							Nearby is the temple of Guheshwori dedicated to Shiva's consort Sati Devi. Cremation of Hindus take&nbsp;place on raised platforms along the river. Only Hindus are allowed inside the gates of the main temple. The inner sanctum has a Shiva <em>lingam </em>and outside sits the largest statue of Nandi the bull, the vehicle of Shiva. There are hundreds of Shiva <em>lingam&nbsp;</em>within the compound. The big Maha Shivaratri festival in spring attracts hundreds of thousands of devotees from within Nepal and from India.
						</p>
						<p>
							Experience this highly recommended religious hub for a mix of religious, cultural&nbsp;and spiritual experiences. Located 3 km northwest of Kathmandu on the banks of the Bagmati River, the temple area also includes&nbsp;Deupatan, Jaya Bageshori, Gaurighat (Holy&nbsp;Bath), Kutumbahal, Gaushala, Pingalasthan&nbsp;and Sleshmantak forest. There are around&nbsp;492 temples, 15 <em>Shivalayas </em>(shrines of Lord Shiva) and 12 <em>Jyotirlinga</em> (phallic shrines) to explore.
						</p>
						<p>
							<img alt="Devotees bathing by the Bagmati River on the banks of the Pashupatinath Temple in Kathmandu, Nepal. " src="../images/places-to-visit/Pashupatinath_tk_pilgrims.jpg">
						</p>

						<p>
							Pashupatinath Temple is one of the 8 UNESCO Cultural Heritage Sites of the Kathmandu Valley. &nbsp;It is also a cremation site where the last rites of Hindus are performed. The site and events at&nbsp;cremation is&nbsp;not for the faint hearted; still visitors are seen watching curiously from across the river from the hill. Visit Pashupatinath Temple for an out-of-this-world experience.
						</p>
						<h4 class="base-color"><strong>Daily Rituals at Pashupatinath Temple</strong></h4>
						<p>
							Pashupatinath is also one of the very few living cultural heritage sites in the world. Unlike other cultural sites or museums, Pashupatinath is centre of energy with active participation of people all times of the day, every day. The daily rituals of Pashupatinath Temple are as follows:
						</p>
						<ul>
							<li>4:00 am: West gate opens for visitors.</li>
							<li>8:30 am: After arrival of Pujaris, the idols of the Lord are bathed and cleaned, clothes and jewelry are changed for the day.</li>
							<li>9:30 am: Baal Bhog or breakfast is offered to the Lord.</li>
							<li>10:00 am: Then people who want to do Puja are welcomed to do so. It is also called Farmayishi Puja, whereby people tell the Pujari to carry out a special Puja for their specified reasons. The Puja continues till 1:45 pm in the afternoon.</li>
							<li>1:50 pm: Lunch is offered to the Lord in the main Pashupati Temple.</li>
							<li>2:00 pm: Morning prayers end.</li>
							<li>5:15 pm: The evening Aarati at the main Pashupati Temple begins.</li>
							<li>6:00 pm onward: Recently the Bagmati Ganga Aarati; done by the shores of Bagmati, has been gaining lots of popularity. We can see the shores of Bagmati crowded mostly on Saturdays, Mondays and on special occasions. Ganga Aarati along with Shiva’s Tandava Bhajan, written by Ravana, is carried out on evening Ganga Aarati.</li>
							<li>7:00 pm: Door is closed.</li>
						</ul>
						<p>Apart from the daily rituals, special observed are plotted&nbsp; during&nbsp; special dates of the lunar calendar.</p>
					</div>
				</div>
			</div>	
		</div>
		<!--FOOTER starts here-->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-sm-12 col-md-12">
						<img src="../images/company-logo.png" alt="Company Logo">
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