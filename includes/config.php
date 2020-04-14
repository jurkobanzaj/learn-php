<?php
	ob_start();
	session_start();

	$timezone = date_default_timezone_set("Europe/Kiev");

	$con = mysqli_connect("localhost", "root", "", "slotify");

	if(mysqli_connect_errno()) {
		echo "Failed to connect to DB: " . mysqli_connect_errno(); 
	}
?>