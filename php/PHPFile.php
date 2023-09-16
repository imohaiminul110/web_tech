<?php 
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {

		function test_input($data) {
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}

		$fname = test_input($_POST['firstname']);
		$lname = test_input($_POST['lastname']);

		if (empty($fname) or empty($lname)) {
			echo "Please fill up the form properly";
		}
		else {
			$arr1 = array('firstname' => $fname, 'lastname' => $lname);

			$f = fopen("data.json", "a");
			fwrite($f, json_encode($arr1));
			fclose($f);

			echo "Registration Successful";
		}
	}
?>