<?php
include('../../config.php');

if(!isset($_POST['username'])) {
	echo 'ERROR: Could not set username';
	exit();
}

if(isset($_POST['email']) && $_POST['email'] != '') {
	$username = $_POST['username'];
	$email = $_POST['email'];
	
	if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo 'ERROR: Email is incorrect';
		exit();
	}
	
	$emailCheck = mysqli_query($con, "SELECT email FROM users WHERE email='$email' AND username != '$username'");
	
	if(mysqli_num_rows($emailCheck) > 0) {
		echo "ERROR: Email is already in use";
		exit();
	}
	
	$updateQuery = mysqli_query($con, "UPDATE users SET email='$email' WHERE username='$username'");
	echo "Update successfull";
} else {
	echo "ERROR: Please provide an email";
}
?>