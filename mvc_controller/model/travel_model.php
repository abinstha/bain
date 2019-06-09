<?php
	class travelModel{
		public function __construct($db_conn){
			$this->db = $db_conn;
		}
		public function insertFlightDetails($data){
			$firstname = $data['firstname'];
			$lastname = $data['lastname'];
			$email = $data['email'];
			$departure_location = $data['departure-location'];
			$arrival_location = $data['destination-location'];
			$depart_date = $data['d-date'];
			$return_date = $data['r-date'];
			$class = $data['class'];
			$no_of_adults = $data['no-of-adult'];
			$no_of_child = $data['no-of-child'];
			$no_of_infant = $data['no-of-infant'];
			$sql = "INSERT INTO flights_information(firstname, lastname, email, departure_city,arrival_city, depart_date, arrive_date, adults, children, infant, class) VALUES ('$firstname', '$lastname', '$email','$departure_location','$arrival_location', '$depart_date','$return_date','$no_of_adults', '$no_of_child', '$no_of_infant', '$class')";
			$this->db->query($sql);
		}
		public function addContactDetails($contactData){
			$contact_name = $contactData['contact-name'];
			$contact_email = $contactData['contact-email'];
			$contact_message = $contactData['contact-message'];
			$sql_contact = "INSERT INTO contactform(name, email, message)
							VALUES ('$contact_name', '$contact_email', '$contact_message')";
			$this->db->query($sql_contact);
		}
		public function addSubscriptionUser($subscriptionData){
			$subscripton_email = $subscriptionData['newsletter-subscription'];
			$sql_subscribe = "INSERT INTO subscription_users(email)
								VALUES('$subscripton_email')";
			$this->db->query($sql_subscribe);
		}
		public function verifyUser($loginDetails){
			$username = $loginDetails['username'];
			$password = $loginDetails['password'];
			$sql_select = "SELECT username, password from users where username='$username' and password='$password'";
			$accounts = [];
			$res = $this->db->query($sql_select);
			while($row = $res->fetch_assoc()){
				$accounts[]=$row;
			}
			if(sizeof($accounts)==1){
				 echo '<script language="javascript">';
				 echo 'alert("Login Successfull!!!")';
				 echo '</script>';
			}
			else{
				echo '<script language="javascript">';
				echo 'alert("Login Failed!!! Please check username and password.")';
				echo '</script>';
			}
		}
		public function InsertNewUser($signUpDetails){
			$name = $signUpDetails['name'];
			$username = $signUpDetails['username'];
			$password = $signUpDetails['password'];
			$email = $signUpDetails['email'];
			$sql = "INSERT INTO users(username, password, name, email) VALUES ('$username', '$password', '$name', '$email')";
			if($this->db->query($sql)){
				echo "success";
			}
			else{
				die("fail".mysqli_error($this->db));
			}
		}
	}
?>