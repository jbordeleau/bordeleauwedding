<?php

	define("BASE_URL","/");
	define("ROOT_URL",$_SERVER["DOCUMENT_ROOT"] . BASE_URL);

	function connect_to_DB(){

		$servername = "eventshare.ca";
		$username = "eventsha_jbordel";
		$password = "Jp021123";
		$dbname = "eventsha_wedding";

		// Create connection
		$mysqli = new mysqli($servername, $username, $password, $dbname);
		// $mysqli = new PDO("mysql:host=" . $servername . ";dbname=" . $dbname . ";",$username, $password);

		// Check connection
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}
		return $mysqli;
	}
