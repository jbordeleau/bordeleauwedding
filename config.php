<?php

	define("BASE_URL","/bordeleauwedding/");
	define("ROOT_URL", $_SERVER["DOCUMENT_ROOT"] . "/");

	function connect_to_DB(){
		$servername = "eventshare.ca";
		$username = "eventsha_jbordel";
		$password = "Jp021123";
		$dbname = "eventsha_wedding";

		// Create connection
		$mysqli = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($mysqli->connect_error) {
			die("Connection failed: " . $mysqli->connect_error);
		}
	}
?>