<?php
	include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");
    
    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

	function getInputValue($name) {
		if(isset($_POST[$name])) {
			echo $_POST[$name];
		}
	}
?>

<html>
    <head>
        <title>Welcome to Slotify!</title>
		<link rel="stylesheet" type="text/css" href="assets/css/register.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="assets/js/register.js"></script>
    </head>
    <body>
		<?php
		
		if(isset($_POST['registerButton'])) {
			echo '<script>
				$(document).ready(() => {
					$("#loginForm").hide();
					$("#registerForm").show();
				});
			</script>';
		} else {
			echo '<script>
				$(document).ready(() => {
					$("#loginForm").show();
					$("#registerForm").hide();
				});
			</script>';
		}
		?>
		<div class="Register-container">
			<div class="Register-login">
				<div class="Register-leftSide">
					<form id="loginForm" class="Register-loginForm" action="register.php" method="POST">
						<h2>Login to your account</h2>
							<?php echo $account->getError(Constants::$loginFailed); ?>
						<label for="loginUsername">Username</label>
						<input id="loginUsername" type="text" name="loginUsername" placeholder="Please enter your username" value="<?php getInputValue('loginUsername') ?>" required/>
						<label for="loginPassword">Password</label>
						<input id="loginPassword" type="password" name="loginPassword" placeholder="Please enter your password" value="<?php getInputValue('loginPassword') ?>" required/>
						<input type="submit" name="loginButton" value="Log In"/>
						<div class="Register-hasAccountText">
							<span class="Register-hideLogin" id="hideLogin">Don't have an account yet? Signup here.</span>
						</div>
					</form>

					<form id="registerForm" class="Register-registerForm" action="register.php" method="POST">
						<h2>Create your free account</h2>
						<p>
							<?php echo $account->getError(Constants::$userNameCharacters); ?>
							<?php echo $account->getError(Constants::$userNameTaken); ?>
							<label for="username">Username</label>
							<input id="username" type="text" name="username" placeholder="BartSimpson" value="<?php getInputValue('username') ?>" required/>					
						</p>
						<p>
							<?php echo $account->getError(Constants::$firstNameCharacters); ?>
							<label for="firstName">First name</label>
							<input id="firstName" type="text" name="firstName" placeholder="Bart" value="<?php getInputValue('firstName') ?>" required/>
						</p>
						<p>
							<?php echo $account->getError(Constants::$lastNameCharacters); ?>
							<label for="lastName">Last name</label>
							<input id="lastName" type="text" name="lastName" placeholder="Simpson" value="<?php getInputValue('lastName') ?>" required/>
						</p>
						<p>
							<?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
							<?php echo $account->getError(Constants::$emailInvalid); ?>
							<?php echo $account->getError(Constants::$emailTaken); ?>
							<label for="email">Email</label>
							<input id="email" type="email" name="email" placeholder="b.simpson@gmail.com" value="<?php getInputValue('email') ?>" required/>
						</p>
						<p>
							<label for="email2">Email Again</label>
							<input id="email2" type="email" name="email2" placeholder="b.simpson@gmail.com" value="<?php getInputValue('email2') ?>" required/>
						</p>
						<p>
							<?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
							<?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
							<?php echo $account->getError(Constants::$passwordCharacters); ?>
							<label for="password">Password</label>
							<input id="password" type="password" name="password" placeholder="Please enter your password" value="<?php getInputValue('password') ?>" required/>
						</p>
						<p>
							<label for="password2">Confirm Password</label>
							<input 
								   id="password2"
								   type="password"
								   name="password2"
								   placeholder="Please enter your password"
								   value="<?php getInputValue('password2') ?>"
								   required
							/>
						</p>
						<input type="submit" name="registerButton" value="Sign up"/>
						<div class="Register-hasAccountText">
							<span class="Register-hideRegister" id="hideRegister">Already have an account? Login here.</span>
						</div>
					</form>   
				</div>
				<div class="Register-rightSide">
					<h1>Get great music right now!</h1>
					<h2>Listen to loads of songs for free</h2>
					<ul>
						<li>Discover music you'll fall in love with</li>
						<li>Create your own lists</li>
						<li>Follow artists to keep up to date</li>
					</ul>
				</div>
			</div>
		</div>

    </body>
</html>