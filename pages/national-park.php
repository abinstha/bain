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
		<title>National Parks in Nepal - Rainbow Nepal Airlines</title>
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
		<div class="national-park-container place-to-visit">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="../images/places-to-visit/national-parks.jpeg" title="National Parks of Nepal" alt="National Parks of Nepal">
			            <div class="carousel-caption">
							<h2>National Parks of Nepal</h2>
							<h4>Discover Nepal through refreshing tropical &amp;  subtropical forests in the lap of the Himalayas.</h4>
						</div>	
					</div>
				</div>
			</div>
			<div class="product container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1 class="title">
							National Parks <span class="base-color">of Nepal</span>
						</h1>
						<p>
							Trek through refreshing lush green tropical and subtropical forests in the lap of the Himalayas, where, you leave behind modern-day-life and venture off walking along trails that offer extreme geographic features and exotic flora and fauna.
						</p>
						<p>
							The jungles in the southern and south-western parts of Nepal are only a half hour to an hour’s flight away. The Chitwan National Park, Bardia National Park, Parsa Wildlife Reserve and Shuklaphanta National Park&nbsp;are home to incredible variety of mammals, reptiles and birds.
						</p>
						<p><img alt="" src="../images/places-to-visit/nationalparks2.jpg"></p>
						<p>
							The former is recognized as the best preserved area in all Asia with a fascinating range of wildlife roaming free. With their natural habitat well preserved the animals are thriving. Among these are the endangered species: the Greater one-horned rhinoceros and the most sought-after Royal Bengal tiger.
						</p>
						<p>
							Koshi Tappu Wildlife Reserve is one of the best places to visit for novice birdwatchers. Ornithologists have recorded 440 bird species in Nepal, ranging from eagles and other raptors to white-necked storks and brilliant-colored sunbirds.
						</p>
						<p><img alt="" src="../images/places-to-visit/bardiya_ss_lt4.jpg"></p>
						<p>&nbsp;</p>
						<p>
							Head far west to Khaptad National Park, which is a whole new topography with rolling hills amidst vast expanse of green pastures.
						</p>
						<p>
							Visit Sagarmatha National Park, Annapurna Conservation Area, Langtang National Park, Makalu Barun National Park, Kanchenjunga Conservation Area, Rara National Park, and Shey Phoksundo National Park, for an encounter with the mighty Himalayas along undiscovered trails and exotic flora and fauna.
						</p>
						<p><img alt="" src="../images/places-to-visit/nationalparks5.jpg"></p>
						<p>
							Follow jungle trails with experienced guides, who have the&nbsp;forest at the back of their hand. Each trip is unique as one never knows what will show up: a bear, a herd of deer, a flock of peacocks, Langur monkeys on treetops, a pair of rhinos and someone lucky gets to see the elusive tiger prowling among the tall grass.
						</p>
						<p>
							In the mountains you could be greeted by flocks of Himalayan tahr or a musk deer peeping at you from a safe distance, and if you are lucky and diligent you could even spot the elusive but very much present snow leopard.
						</p>
						<p><img alt="" src="../images/places-to-visit/nationalparks3.jpg"></p>
						<p>
							Away from the noise and distractions of city life, there is unbelievable peace in the middle of a jungle listening to bird calls and animal sounds. Surrounded by greenery and filled with natural sounds, the mind relaxes and one finds peace in the wilderness. It’s an experience of a lifetime.&nbsp;&nbsp;
						</p>
					</div>
				</div>
			</div>			
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