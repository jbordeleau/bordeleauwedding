<?php
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	$pageTitle = "rsvp-list";
	$body = "";
	include(ROOT_URL . 'inc/header.php');
	$mysqli = connect_to_DB();
	$query = "SELECT * FROM rsvps";
	$result = $mysqli->query($query);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php if ($result->num_rows > 0) { ?>
				<table class="table table-striped table-hover table-bordered">
					<tr>
						<th>First Name 1</th>
						<th>Last Name 1</th>
						<th>Food 1</th>
						<th>First Name 2</th>
						<th>Last Name 2</th>
						<th>Food 2</th>
						<th>Accommodation</th>
						<th>Date</th>
					</tr>
					<?php while($row = $result->fetch_assoc()) { ?>
						<tr>
							<td><?php echo $row['firstName0']; ?></td>
							<td><?php echo $row['lastName0']; ?></td>
							<td><?php echo $row['foodChoice0']; ?></td>
							<td><?php echo $row['firstName1']; ?></td>
							<td><?php echo $row['lastName1']; ?></td>
							<td><?php echo $row['foodChoice1']; ?></td>
							<td><?php echo $row['accommodation0']; ?></td>
							<td><?php echo $row['date']; ?></td>
						</tr>
					<?php } ?>
				</table>
			<?php } else { ?>
				<p>There are no RSVPs at the moment.</p>
			<?php } ?>
		</div>	
	</div>
</div>

<?php include(ROOT_URL . 'inc/footer.php'); ?>
