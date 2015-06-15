<?php 
	// phpinfo(); exit;
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	$pageTitle = "song-list";
	$body = "";
	include(ROOT_URL . 'inc/header.php');
	$mysqli = connect_to_DB();
	$query = "SELECT * FROM songs";
	$result = $mysqli->query($query);
?>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php if ($result->num_rows > 0) { ?>
				<table class="table table-striped table-hover table-bordered">
				<tr>
					<th>Request Name</th>
					<th>Artist Name</th>
					<th>Song Name</th>
				</tr>
				<?php
					while($row = $result->fetch_assoc()) {
						echo "<tr><td>" . $row['requestName'] . "</td><td>" . $row['artistName'] . "</td><td>" . $row['songName'] . "</td></tr>";
					}
				?>
				</table>
			<?php } else { 
				echo "<p>No songs requests submitted yet.</p>";
			}?>
		</div>	
	</div>
</div>

<?php include(ROOT_URL . 'inc/footer.php'); ?>
