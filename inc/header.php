<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/bootstrap.min.css">

	<!-- Optional theme -->
	<!-- <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"> -->

	<!-- Page styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo BASE_URL; ?>css/style.css">
	
	<!-- jQuery -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/bootstrap.min.js"></script>

	<!-- My java JavaScript code -->
	<script type="text/javascript" src="<?php echo BASE_URL; ?>js/js.js"></script>

</head>

<body id="<?php echo $body; ?>">
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top typewriter" id="" role="navigation">
			<div class="container">

				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo BASE_URL;?>">Bordeleau Wedding<span class="sr-only">(current)</span></a>
				</div>
					
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li><a href="<?php echo BASE_URL;?>party/">the party</a></li>
						<li><a href="<?php echo BASE_URL;?>rsvp/">rsvp</a></li>
						<li><a href="<?php echo BASE_URL;?>photos/">photos</a></li>
						<li><a href="<?php echo BASE_URL;?>songs/">request a song</a></li>
						<li><a href="<?php echo BASE_URL;?>menu/">menu</a></li>
						<li><a href="<?php echo BASE_URL;?>location/">location</a></li>
						<li><a href="<?php echo BASE_URL;?>accommodations/">accommodations</a></li>
						<li><a href="<?php echo BASE_URL;?>registry/">registry</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</div>