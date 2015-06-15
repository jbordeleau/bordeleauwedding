<?php 
	require_once($_SERVER["DOCUMENT_ROOT"] . "/inc/config.php");
	$pageTitle = "location";
	$body = "location";
	include(ROOT_URL . 'inc/header.php');
?>

<div class="container shaded">	
	<div class="row">
		<div class="col-md-12">
			<h1 class="typewriter">location</h1>
			<p>Below you can find directions from the two locations that most of the wedding guests will be coming from to White Point Beach Resort.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<h4>Directions from Halifax</h4>
			<p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d730569.7177274992!2d-64.75512233947187!3d44.33486194426063!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e0!4m5!1s0x4b5a211407dbfac1%3A0x666be3a6438b2ddc!2sHalifax%2C+NS!3m2!1d44.6488625!2d-63.5753196!4m5!1s0x4b59a730c4783ba1%3A0x7e58721cba4d9d02!2sWhite+Point+Beach+Resort%2C+75+White+Point+Beach+Resort+Rd%2C+Hunts+Point%2C+NS+B0T+1G0!3m2!1d43.964279!2d-64.738654!5e0!3m2!1sen!2sca!4v1417378680429" width="555" height="400" frameborder="0"></iframe>
			</p>
			<p>From Halifax, just get on highway 103 west and turn left onto White Point Connector (this is not an exit, it's a lefthand turn). From there you can follow the signs to White Point.</p>
		</div>
		<div class="col-md-6">
			<h4>Directions from Digby</h4>
			<p>
				<iframe src="https://www.google.com/maps/embed?pb=!1m29!1m12!1m3!1d729822.6844145241!2d-65.74307635713805!3d44.39479312435692!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m14!1i0!3e6!4m5!1s0x4ca81d0e2721cf81%3A0x429582fca67002aa!2sDigby%2C+NS!3m2!1d44.6215286!2d-65.757553!4m5!1s0x4b59a730c4783ba1%3A0x7e58721cba4d9d02!2sWhite+Point+Beach+Resort%2C+75+White+Point+Beach+Resort+Rd%2C+Hunts+Point%2C+NS+B0T+1G0!3m2!1d43.964279!2d-64.738654!5e0!3m2!1sen!2sca!4v1417378593238" width="555" height="400" frameborder="0"></iframe>
			</p>
			<p>From Digby, get on highway 101 east and take the exit to toward Nova Scotia Trunk 8 South. From there you will turn right onto highway 103 west and then take a left onto White Point Connector (this is not an exit, it's a lefthand turn). From there you can follow the signs to White Point.</p>
		</div>
	</div>
</div> 

<?php include(ROOT_URL . 'inc/footer.php'); ?>
