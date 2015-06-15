<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		// Create connection
		$mysqli = connect_to_DB();
		
		$mysqli->query("SET time_zone = '-04:00'");

		$firstName0 = $mysqli->real_escape_string($_POST["firstName0"]);
		$lastName0 = $mysqli->real_escape_string($_POST["lastName0"]);
		$foodChoice0 = $mysqli->real_escape_string($_POST["foodChoice0"]);
		$firstName1 = $mysqli->real_escape_string($_POST["firstName1"]);
		$lastName1 = $mysqli->real_escape_string($_POST["lastName1"]);
		$foodChoice1 = $mysqli->real_escape_string($_POST["foodChoice1"]);
		$accommodation0 = $mysqli->real_escape_string($_POST["accommodation0"]);
		
		$query = "INSERT INTO rsvps (firstName0, lastName0, foodChoice0, firstName1, lastName1, foodChoice1, accommodation0, date) VALUES ('$firstName0', '$lastName0', '$foodChoice0','$firstName1', '$lastName1', '$foodChoice1','$accommodation0', now())";
		if ($mysqli->query($query) === TRUE) {
			// header("Location: " . BASE_URL . "rsvp/thanks/");
			$mysqli->close();
			exit;
			
		} else {
			echo "Error: " . $query . "<br>" . $mysqli->error;
		}
	
	}
?>