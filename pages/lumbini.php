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
		<title>Lumbini - Rainbow Nepal Airlines</title>
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
		<div class="lumbini-container place-to-visit">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="../images/places-to-visit/lumbini-tk-buddhajayanti_1.jpeg" title="Lumbini, Nepal - Birthplace of Buddha " alt="Lumbini, Nepal - Birthplace of Buddha ">
			            <div class="carousel-caption">
							<h2>Lumbini, Nepal - Birthplace of Buddha </h2>
							<h4>Visit Buddha's birthplace or international Buddhist monasteries; study Buddhism or meditate!</h4>
						</div>			            	
					</div>
				</div>
			</div>
			<div class="product container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<h1 class="title">
							Lumbini <span class="base-color">Birthplace of Buddha</span>
						</h1>
						<p>
							One of the world's most important spiritual sites is home to the historic birthplace of the Buddha. Today you can visit over 25 international Buddhist monasteries, study Buddhism, meditation and visit Buddha's birthplace itself within the sacred Mayadevi Gardens!
						</p>
						<p>
							<img alt="Lumbini in Nepal" src="../images/places-to-visit/Lumbini5_tk_buddhajayanti.jpg">
						</p>
						<p>
							Mayadevi Temple is one of the important sites in the Lumbini Garden with many historians and archaeologists referring to it as&nbsp;the place of birth of Lord Buddha. Inscriptions on the Ashoka Pillar also refers&nbsp;the spot as his birthplace. It is said that here the newly born Prince took his first seven steps and gave a peace message to&nbsp;humanity.
						</p>
						<p>
							This happened in the beautiful Sal grove, which is now the focal point of the Lumbini Garden. Mayadevi, the Queen of Shakya King Suddhodhana of Kapilvastu, while passing through the Lumbini Garden, on the day of &nbsp;Baishakha Purnima&nbsp;(full moon day of May in 623 BC) took a bath in the Pushkarini (the Sacred Pond) and soon after she took support of a tree branch, and gave birth to the Prince Siddhartha, who became the Buddha. &nbsp;
						</p>
						<p><img alt="" src="../images/places-to-visit/lumbini8.jpg"></p>
						<p>
							Visit beautiful monasteries built by different Buddhist countries&nbsp;like China, Japan, Sri Lanka, Myanmar, Germany and observe the different architecture and prayer areas. Soak up the peaceful atmosphere and above all &nbsp;visit the Mayadevi Temple which dates back to 2,200 years, which archaeological evidence proclaim as&nbsp;the birthplace of Siddhartha Gautam or Lord Buddha in 623 BC.
						</p>
						<p>
							You can walk around the garden or find a peaceful meditative spot to contemplate. The focal point for pilgrims is a sandstone carving depicting the birth of the Buddha, reputedly left here by the Malla King&nbsp;Ripu Malla, in the 14th century, when Mayadevi was worshipped as an incarnation of the Hindu mother goddess.&nbsp;Another main attraction is the Ashokan Pillar, which was built by the great Indian Emperor&nbsp;Ashoka while visiting the birthplace of Buddha back in 249 BC.
						</p>
						<p><img alt="" src="../images/places-to-visit/lumbini3.jpg"></p>
						<p>
							One can visit the Panditarama Vipassana Center for some yoga and meditation and interact with the monks, who live in the vicinity of the monasteries, devoting their time to balancing the environment with religious worship.
						</p>
						<p>
							The Lumbini Garden covers an area of 2.56 sq km or 1 x 3 sq miles and encompasses three zones each covering one square mile connected with walkways and a canal. The area has&nbsp;sub tropical&nbsp;monsoon climate with warm wet season.
						</p>
						<p><img alt="" src="../images/places-to-visit/lumbini4_tk_buddhajayanti.jpg"></p>
						<p>
							If you are planning on traveling to exotic places in South Asia looking to find some Nirvana, then do not miss Lumbini in Nepal.
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