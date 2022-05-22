<!-- Navigation bar -->
<?php session_start(); ?>
<nav>
	<div class="container">
		<div class="logo">
			<a href="/">
				<img height="50px" src="images/logo.png" alt="myAASTU logo">
			</a>
			<button onclick="toggleNav()">
				<img src="images/icons/menu.svg" class="w-6 h-6" alt="">
			</button>
		</div>
		<div class="links">
			<a class="nav-link" href="/">Home</a>
			<a class="nav-link" href="gallary1.php">Gallery</a>
			<a class="nav-link" href="event.php">Events</a>
			<a class="nav-link" href="location.php">Location</a>
			<a class="nav-link" href="product.php">Services</a>
			<a class="nav-link" href="about_aastu.php">About AASTU</a>
			<?php
			if (isset($_SESSION['user'])) {
				$user = $_SESSION['user'];
			?>
			<div class="dropdown">
				<img src="<?=$user['profile_pic']?>" alt="profile pic" class="profile-pic dropdown-btn" onclick="toggleDropdown()">
				<div id="my-dropdown" class="dropdown-body">
					<a href="reset_password.php">reset password</a>
					<a href="logout.php">Log out</a>
				</div>
			</div>
			<?php

			} else { ?>
				<a href="login.php">
					<button>Login</button>
				</a>
				<a href="signup.php">
					<button class="sign-up">Sign Up</button>
				</a>
			<?php } ?>
		</div>
	</div>
</nav>