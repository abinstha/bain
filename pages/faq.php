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
		<title>FAQs - Rainbow Nepal Airlines</title>
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/mdb.min.css">
		<link rel="stylesheet" type="text/css" href="../css/style.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Heebo">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Old-Standard-TT">
	</head>
	<body>
		<div class="main-container faq-page">
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
			<div class="container faq-questions">
				<h1 class="title">Frequently <span class="base-color">Asked Questions</span></h1>
				<div id="accordion">
					<div class="card">
						<div class="card-header" id="headingOne">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq1" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>How do i get to Nepal?
								</button>
							</h5>
						</div>
						<div id="faq1" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								In order to fly directly to Nepal from your home country, Tribhuvan International Airport (TIA) in Kathmandu is the only international airport in Nepal. Thai Airways, Gulf Air, Qatar, Indian Airlines, Jet Airways, Korean Air, Etihad Air, Silk Air, Air Arabia, Druk Air, Jet lite, Dragon Air, Air China and Cathay Pacific carry most of the foreign travelers to Kathmandu. If you buy tickets from any other airlines, you will probably connect with one of these airlines for the final leg of your flight. Alternatively, if you have valid visa, you can also travel to Nepal via India and Tibet (China).
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq2" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Do I need visa to enter Nepal?
								</button>
							</h5>
						</div>
						<div id="faq2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								All foreign nationals, except Indian citizens, need visa to enter Nepal.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq3" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Can you help arrange my travel visas?
								</button>
							</h5>
						</div>
						<div id="faq3" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								Requirements for travel visas vary widely depending on your nationality and your destination. If you do require a visa you can arrange them yourself or use the services of a travel agent or visa processing company.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq4" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>How many people can join a tour?
								</button>
							</h5>
						</div>
						<div id="faq4" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
								We keep our group sizes low so you have the freedom to move around and get involved with your surroundings, as well as more personal attention from our local guides. This intimate size ensures that your group will not crowd your experience. You can expect up to 15 travelers on a trip but the average is 10. Check individual trip pages for maximum group sizes.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq5" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>What are the age restrictions on your tours?
								</button>
							</h5>
						</div>
						<div id="faq5" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body">
								To travel independently you must be at least 18 years of age. There are no upper age limits for most of our tours (although 18-to-Thirty somethings tours are restricted exclusively to 18-to-39-year-olds). Also, travellers with pre-existing medical conditions are required to complete a medical questionnaire. Our Family Adventures are open to families with children aged between 6 and 17 years of age. Our standard (non-family) adventures are open to children aged 12 years or older when accompanied by a parent (max. two children per adult). The two-children-per-adult restriction does not apply to our Family adventures.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSix">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq6" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>I'm a single traveller, will I be charged a single supplement?
								</button>
							</h5>
						</div>
						<div id="faq6" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
							<div class="card-body">
								<p>
									Most of our trips do not have a single supplement. This means that the accommodation is on a twin share basis and, if you are travelling on your own, you will be sharing a room with another G Adventures traveller of the same sex. Some tours have an optional single supplement or rarely a mandatory single supplement.
								</p>
								<p>
									An optional service that may be available is called "My Own Room". This service allows solo travellers to request their own private room while on tour. The cost and the details vary by trip, so please refer to each trip summary page for details.
								</p>
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingSeven">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq7" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Can I join a tour late or leave it early?
								</button>
							</h5>
						</div>
						<div id="faq7" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
							<div class="card-body">
								It's extremely difficult if not impossible to join a tour after it has begun. It is possible to leave a tour early however you will be responsible for your own arrangements from the moment you decide to leave the tour. You would also be responsible for all costs associated with joining a tour late or leaving one early. If you feel this may be necessary please consult a G Adventures Specialist before you book your adventure.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingEight">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq8" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Are airport transfers included in the trip price? If not, how much will a taxi cost from the airport? If not, how do I get to and from airports?
								</button>
							</h5>
						</div>
						<div id="faq8" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
							<div class="card-body">
								Generally airport transfers are not included in your trip price unless you're travelling on a Comfort or Independent Journey style trip where an arrival transfer is included. You can normally add an arrival and/or departure transfer to most of our trips when you are booking your trip (or by contacting us if you have already booked). For more information on your arrival, refer to the  ‘Joining Point instructions’ in your Essential Trip Information. Here, we often indicate the price you can expect to pay for a taxi from the airport to the hotel. The cost of the transfer will inevitably be more expensive than a taxi, but it is important to remember that you are paying for a private service and a trusted driver who will offer the security travellers often desire when they arrive into a foreign country. 
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingNine">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq9" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Can I join a tour late or leave it early?
								</button>
							</h5>
						</div>
						<div id="faq9" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
							<div class="card-body">
								Trip specific information on transportation can be found on the trip summary page however in most cases we use public transportation. We've found that how you get there significantly influences the tone of your journey and public transportation allows face-to-face interaction with the local people. Some of our adventures, including our “Superior”, "Comfort Class".
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTen">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq10" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>How is your company able to offer such competitive prices?
								</button>
							</h5>
						</div>
						<div id="faq10" class="collapse" aria-labelledby="headingTen" data-parent="#accordion">
							<div class="card-body">
								Our unique style of off the beaten track, face-to-face travel is the only way to really experience a destination, but it also serves to keep the costs down. We spend your money providing an authentic experience, instead of on lavish hotels and expensive western-style meals. We pass these savings on to you with our low prices. Another thing you'll notice are the inclusions. While we don't include everything, we do throw in the major highlights of a destination, the things that everyone goes to see. On every trip page we show you the 'Included Highlights' of your trip, things that many other companies charge locally for. We leave many other activities as options, to provide you the freedom and flexibility to choose what you want to do on a daily basis.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingEleven">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq11" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Can I book extra nights of hotel accommodation before or after my tour?
								</button>
							</h5>
						</div>
						<div id="faq11" class="collapse" aria-labelledby="headingEleven" data-parent="#accordion">
							<div class="card-body">
								Yes, in most cases we can arrange additional accommodation at our starting or ending hotels, excluding European tours. Please contact a G Adventure Specialist for price information or check under “Hotels, Transfers & City Breaks” on the tour page of our website for prices. If we are unable to provide you with the extra nights we will give you the name of a hotel you can contact directly. Please also note that extra accommodations must be booked outside of 30 days of departure.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading12">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq12" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Do I need travel insurance?
								</button>
							</h5>
						</div>
						<div id="faq12" class="collapse" aria-labelledby="heading12" data-parent="#accordion">
							<div class="card-body">
								Travel insurance is compulsory for all  travellers and should be taken out at the time of booking. You must provide proof of your travel insurance on the first day of your trip; you will not be able to join the trip without it.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headin13n">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq13" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>What does my policy need to cover?
								</button>
							</h5>
						</div>
						<div id="faq13" class="collapse" aria-labelledby="heading13" data-parent="#accordion">
							<div class="card-body">
								At a minimum, your travel insurance should be 'comprehensive', providing cover against personal accident, death, medical expenses, emergency repatriation and personal liability, with a minimum coverage of US$200,000. We also strongly recommend it covers cancellation, curtailment and loss of luggage and personal effects.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading14">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq14" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Do I need to bring a sleeping bag?
								</button>
							</h5>
						</div>
						<div id="faq14" class="collapse" aria-labelledby="heading14" data-parent="#accordion">
							<div class="card-body">
								We only have a handful of itineraries where sleeping bags are required and these are generally trips that involve camping. When we use homestays, blankets are provided but some travellers feel more comfortable with their own sleeping bag or sleep sheet. This decision is a personal preference. Refer to your Essential Trip Information if you are unsure whether a sleeping bag is required.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading15">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq15" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>What clothes and footwear should I take on treks?
								</button>
							</h5>
						</div>
						<div id="faq15" class="collapse" aria-labelledby="heading15" data-parent="#accordion">
							<div class="card-body">
								On a more physical trip, hiking boots are definitely recommended. If the physical rating is under 3, hiking boots or sneakers/runners will be adequate. Many Intrepid treks will be hiking in near freezing environments so please be sure to research the climate and weather conditions at the time of year you will be trekking and pack accordingly. There is also a packing 'checklist' in your Essential Trip Information.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading16">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq16" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>What time can I check in at my arrival hotel?
								</button>
							</h5>
						</div>
						<div id="faq16" class="collapse" aria-labelledby="heading16" data-parent="#accordion">
							<div class="card-body">
								Check-in times can vary from hotel to hotel and region to region. Generally, they are between midday and 2pm. If you do arrive earlier, you’ll be able to store your luggage with the hotel and head out to explore for a couple of hours.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading17">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq18" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>What communication facilities will be available?
								</button>
							</h5>
						</div>
						<div id="faq18" class="collapse" aria-labelledby="heading17" data-parent="#accordion">
							<div class="card-body">
								Communication facilities are always improving globally. Many hotels and public places have Wi-Fi so it’s usually possible to keep in touch with home every couple of days, if you so desire. In remote places (think Mali, Serengeti or the Sahara) or on treks or homestays, you will not be able to communicate as readily. Your leader will usually give you the heads up before you leave a place so you can send a quick email or two. Phone cards are easy to get your hands on; just make sure your phone is unlocked before you travel. Or in many countries, the cheapest way to make a phone call is at an internet cafe.
							</div>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="heading19">
							<h5 class="mb-0">
								<button class="btn btn-link" data-toggle="collapse" data-target="#faq19" aria-expanded="true" aria-controls="collapseOne" >
									<i class="fas fa-caret-right"></i>Will I be able to charge my electrical appliances?
								</button>
							</h5>
						</div>
						<div id="faq19" class="collapse" aria-labelledby="heading19" data-parent="#accordion">
							<div class="card-body">
								In most places you’ll be able to recharge your appliances at the hotel. We recommend you bring a travel adapter with you. On our Overland trips, most vehicles come with their own power supply and you should be able to recharge onboard. Be sure to bring an extra camera battery just in case.
							</div>
						</div>
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