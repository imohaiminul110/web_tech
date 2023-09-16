<?php 
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		$username = $_POST['username'];
		$password = $_POST['password'];

		if (empty($username) or empty($password)) {
			echo "please fill up the form properly";
		}
		else {
			echo "Login Successful";
		}

	}

	else {

		echo "Request Rejected";
	}
?>