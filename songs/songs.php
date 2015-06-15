<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	if ($_SERVER["REQUEST_METHOD"] == "POST") {


		// Create connection
		$mysqli = connect_to_DB();

		$requestName = $mysqli->real_escape_string($_POST["requestName"]);
		$artistName = $mysqli->real_escape_string($_POST["artistName"]);
		$songName = $mysqli->real_escape_string($_POST["songName"]);
		
		$query = "INSERT INTO songs (requestName, artistName, songName) VALUES ('{$requestName}', '{$artistName}', '{$songName}')";
		if ($mysqli->query($query) === TRUE) {
			header("Location: " . BASE_URL . "songs/thanks/");
			$mysqli->close();
			exit;
			
		} else {
			echo "Error: " . $query . "<br>" . $mysqli->error;
		}
	
	}
?>

<!-- IF FORM HAS NOT BEEN SUBMITTED -->
	<?php

		$pageTitle = "request a song";
		$body = "songs";

		include(ROOT_URL . 'inc/header.php');

	?>

	<div class="container">	
		<!-- IF STATUS IS SET TO THANKS -->
			<?php if(isset($_GET["status"]) AND $_GET["status"] == "thanks") { ?>		
				<div class="row">
					<div class="col-md-5 shaded">
						<h1 class="typewriter">request a song</h1>
						<p>Thanks for requesting a song! We can't wait to dance to it.</p>
					</div>
				</div>
			<?php } else { ?>
			<!-- IF THE FORM HAS NOT BEEN SUBMITTED AND STATUS IS NOT SET TO THANKS -->
				<div class="row">
					<div class="col-md-5 shaded">
						<h1 class="typewriter">request a song</h1>
						<p>If you would like a song to be played during the reception, you can request it here. We will be giving the list of songs requested to the DJ beforehand. Please leave your name along with the artist and song name you want to hear.</p>
					</div>
				</div>
				<form id="songForm" action="songs.php" method="post" role="form">
					<div class="row">
						<div class="col-md-5 shaded">
								<div class="form-group has-feedback">
									<label for="requestName" class="control-label">Your Name:</label>
									<input type="text" class="form-control" id="requestName" placeholder="Your Name" name="requestName">
								</div>
								<div class="form-group has-feedback">
									<label for="artistName" class="control-label">Artist Name:</label>
									<input type="text" class="form-control" id="artistName" placeholder="Artist Name" name="artistName">
								</div>
								<div class="form-group has-feedback">
									<label for="songName" class="control-label">Song Name:</label>
									<input type="text" class="form-control" id="songName" placeholder="Song Name" name="songName">
								</div>
						</div>
					</div>
					<div style="margin-top:20px;" class="row">
						<div class="col-md-5">
							<button id="submitSong" type="submit" class="btn btn-primary" disabled="disabled">Submit</button>
						</div>
					</div>
				</form>
			<?php } ?>
	</div>
<?php include(ROOT_URL . 'inc/footer.php'); ?>
