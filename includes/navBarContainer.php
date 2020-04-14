<div class="Home-navBarContainer">
	<nav class="Home-navBar">
		<span role="link" tabindex="0" onclick="openPage('index.php')" class="Home-logo">
			<img src="assets/images/icons/logo.png" />
		</span>
		<div class="Home-group">
			<div class="Home-navItem">
				<span role="link" tabindex="0" onclick="openPage('search.php')" class="Home-navItemLink">
					Search <img src="assets/images/icons/search.png" class="Home-searchIcon" alt="Search" />
				</span>
			</div>
		</div>
		<div class="Home-group">
			<div class="Home-navItem">
				<span role="link" tabindex="0" onclick="openPage('browse.php')" class="Home-navItemLink">Browse</span>
			</div>
			<div class="Home-navItem">
				<span role="link" tabindex="0" onclick="openPage('yourMusic.php')" class="Home-navItemLink">Your Music</span>
			</div>
			<div class="Home-navItem">
				<span role="link" tabindex="0" onclick="openPage('settings.php')" class="Home-navItemLink"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
			</div>
		</div>
	</nav>
</div>