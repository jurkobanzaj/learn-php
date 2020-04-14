<?php
include('../../config.php');

if(!isset($_POST['username'])) {
	echo 'ERROR: Could not set username';
	exit();
}

if(!isset($_POST['oldPassword']) || !isset($_POST['newPassword1']) || !isset($_POST['newPassword2'])) {
	echo 'ERROR: Not all password fields have been entered';
	exit();
}

if($_POST['oldPassword'] == "" || $_POST['newPassword1'] == "" || $_POST['newPassword2'] == "") {
	echo 'ERROR: Please fill all password fields';
	exit();
}

$username = $_POST['username'];
$oldPassword = $_POST['oldPassword'];
$newPassword1 = $_POST['newPassword1'];
$newPassword2 = $_POST['newPassword2'];

$oldMD5 = md5($oldPassword);

$passwordCheck = mysqli_query($con, "SELECT * FROM users WHERE username='$username' AND password='$oldMD5'");
if(mysqli_num_rows($passwordCheck) != 1) {
	echo "ERROR: Password is incorrect";
	exit();
}

if($newPassword1 != $newPassword2) {
	echo "ERROR: Your new passwords do not match";
	exit();
}

if(preg_match('/[^A-Za-z9-0]/', $newPassword1)) {
	echo "ERROR: Your password can only contain letters and numbers";
	exit();
}

if(strlen($newPassword1) > 30 || strlen($newPassword1) < 8) {
	echo "ERROR: Your password must be between 8 and 30 characters";
	exit();
}

$newMD5 = md5($newPassword1);

$query = mysqli_query($con, "UPDATE users SET password='$newMD5' WHERE username='$username'");
echo "Password updated";

?>