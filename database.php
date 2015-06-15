<?php

try {
	$db = new PDO("mysql:host=eventshare.ca;dbname=eventsha_wedding","eventsha_jbordel","Jp021123");
	var_dump($db);
} catch (Exception $e) {
	echo "Could not connect to the database.";
	exit;
}

echo "Woo-hoo!";