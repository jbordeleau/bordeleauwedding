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
			header("Location: " . BASE_URL . "rsvp/thanks/");
			$mysqli->close();
			exit;
			
		} else {
			echo "Error: " . $query . "<br>" . $mysqli->error;
		}
	
	}
?>

<?php 
	$pageTitle = "rsvp";
	$body = "rsvp";
	include(ROOT_URL . 'inc/header.php');
?>

<div class="container">
	<!-- IF FORM WAS SUBMITTED AND INTERTION INTO DATABASE SUCCESSFULL -->
	<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks"){ ?>		
		<div class="row">
			<div class="col-md-4 shaded">
				<h1 class="typewriter">rsvp</h1>
				<p>Thanks for RSVPing! See you at the wedding.</p>
			</div>
		</div>
	<!-- ELSE DISPLAY THE FORM IF IT HASN'T BEEN SUBMITTED -->
	<?php } else { ?>
		<form id="rsvpForm" action="" method="post" role="form">
			<div class="row" id="guests">
				<div class="col-md-3 shaded">
					<h1 class="typewriter">rsvp</h1>
					<h4>Main Guest Info:</h4>
					<div class="form-group has-feedback">
						<label for="firstName0" class="control-label">First Name:</label>
						<input type="text" class="form-control" id="firstName0" placeholder="First Name" name="firstName0">
					</div>
					<div class="form-group has-feedback">
						<label for="lastName0" class="control-label">Last Name:</label>
						<input type="text" class="form-control" id="lastName0" placeholder="Last Name" name="lastName0">
					</div>
					<div class="form-group has-feedback">
						<label for="foodChoice0" class="control-label">Select Food:</label>
						<select class="form-control" id="foodChoice0" name="foodChoice0">
							<option value="">Select Food</option>
							<option value="Chicken">Chicken</option>
							<option value="Beef">Beef</option>
							<option value="Kids Meal">Kids Meal</option>
						</select>
					</div>
				</div>
				<div class="col-md-3 shaded">
					<h1 class="typewriter">&nbsp;</h1>
					<h4>Plus-one:</h4>
					<div class="form-group has-feedback">
						<label for="firstName1" class="control-label">First Name:</label>
						<input type="text" class="form-control" id="firstName1" placeholder="First Name" name="firstName1">
					</div>
					<div class="form-group has-feedback">
						<label for="lastName1" class="control-label">Last Name:</label>
						<input type="text" class="form-control" id="lastName1" placeholder="Last Name" name="lastName1">
					</div>
					<div class="form-group has-feedback">
						<label for="foodChoice1" class="control-label">Select Food:</label>
						<select class="form-control" id="foodChoice1" name="foodChoice1">
							<option value="">Select Food</option>
							<option value="chicken">Chicken</option>
							<option value="beef">Beef</option>
							<option value="vegetarian">Vegetarian</option>
						</select>
					</div>
				</div>
			</div>
			<div class="row">
				<div style="margin-top:20px;" class="col-md-3">
					<div class="btn-group">
						<button id="addGuest" type="button" class="btn btn-default">Add Guest</button>
						<button id="removeGuest" disabled="disabled" type="button" class="btn btn-default">Remove Guest</button>
					</div>
				</div>
			</div>
			<div class="row" id="accommodationForm">
				<div class="col-md-3 shaded">
					<h4>Accommodations:</h4>
					<div class="form-group">
						<label for="accommodation0" class="control-label">Accommodations:</label>
						<select class="form-control" id="accommodation0" name="accommodation0">
							<option value="">Select Accommodation</option>
							<option value="White Point">White Point</option>
							<option value="Best Western">Best Western</option>
							<option value="Not Spending the Night">Not Spending the Night</option>
						</select>
					</div>
				</div>
			</div>
			<div style="margin-top:20px;" class="row">
				<div class="col-md-3">
					<button id="submit" type="submit" class="btn btn-primary" disabled="disabled">Submit</button>
				</div>
			</div>
		</form>
	<?php } ?>
</disablediv>

<?php include(ROOT_URL . 'inc/footer.php'); ?>
