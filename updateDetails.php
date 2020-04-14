<?php
include("includes/includedFiles.php");	
?>

<div class="userDetails">
	<div class="container borderBottom">
		<h2>EMAIL</h2>
		<input class="email" type="text" name="email" placeholder="Email address" value="<?php echo $userLoggedIn->getEmail(); ?>">
		<span class="message"></span>
		<button class="button" onclick="updateEmail('email')">SAVE</button>
	</div>
	<div class="container">
		<h2>PASSWORD</h2>
		<input class="oldPassword" type="password" name="oldPassword" placeholder="Current password">
		<input class="newPassword1" type="password" name="newPassword1" placeholder="New password">
		<input class="newPassword2" type="password" name="newPassword2" placeholder="Confirm password">
		<span class="message"></span>
		<button class="button" onclick="updatePassword('oldPassword', 'newPassword1', 'newPassword2')">SAVE</button>
	</div>
</div>