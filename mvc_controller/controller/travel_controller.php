<?php
	include ('C:\xampp\htdocs\Travel_and_Tourism_website\mvc_controller\model\travel_model.php');
	class travelController{
		public function __construct($db_conn){
			$this->travel_model = new travelModel($db_conn);
		}
		public function registerFlightDetails($data){
			return $this->travel_model->insertFlightDetails($data);
		}
		public function insertContactDetails($contactData){
			$this->travel_model->addContactDetails($contactData);
		}
		public function subscriptionEmail($subscriptionData){
			$this->travel_model->addSubscriptionUser($subscriptionData);
		}
		public function validateUser($loginDetails){
			return $this->travel_model->verifyUser($loginDetails);
		}
		public function RegisterNewUser($signUpDetails) {
			return $this->travel_model->InsertNewUser($signUpDetails);
		}
	}
?>