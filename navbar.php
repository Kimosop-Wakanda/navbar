<!DOCTYPE html>
<html>
<head>
	<title>Responsive Navbar</title>
	<style>
		body {
			margin: 0;
			padding: 0;
			font-family: Arial, sans-serif;
		}

		/* Navbar styles */
		.navbar {
			background-color: blueviolet;
			position: fixed;
			top: 0;
			left: 0;
			width: 100%;
			padding: 10px;
			display: flex;
			flex-wrap: wrap;
			justify-content: space-between;
			align-items: center;
			z-index: 999;
		}

		.navbar-brand {
			font-size: 24px;
			color: #fff;
			margin: 0;
			padding: 0;
		}

		.navbar-toggler {
			display: none;
			background-color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
			padding: 10px 15px;
			font-size: 16px;
			color: #4CAF50;
			margin-right: 10px;
		}

		.navbar-nav {
			display: flex;
			flex-wrap: wrap;
			margin: 0;
			padding: 0;
			list-style: none;
		}

		.nav-item {
			margin: 0;
			padding: 0;
		}

		.nav-link {
			display: block;
			padding: 10px 15px;
			color: #fff;
			text-decoration: none;
			font-size: 16px;
		}

		@media screen and (max-width: 768px) {
			.navbar-toggler {
				display: block;
			}

			.navbar-nav {
				display: none;
				position: absolute;
				top: 50px;
				left: 0;
				width: 100%;
				background-color: blueviolet;
			}

			.nav-item {
				display: block;
				margin: 0;
				padding: 0;
				border-top: 1px solid #fff;
			}

			.nav-link {
				display: block;
				padding: 10px 15px;
				color: #fff;
				text-decoration: none;
				font-size: 16px;
			}

			.show {
				display: block !important;
			}
		}
	</style>
</head>
<body>
	<nav class="navbar">
		<h1 class="navbar-brand"><a href="index.php" style="color: white;">Pamoja API</a></h1>
		<button class="navbar-toggler" type="button" id="navbar-toggler">
			<span class="icon-bars"></span>
			<span class="icon-close"></span>
		</button>
		<ul class="navbar-nav" id="navbar-nav">
			<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<li class="nav-item"><a href="app.php" class="nav-link">Apps</a></li>
			<li class="nav-item"><a href="#" class="nav-link">Transactions</a></li>
			<li class="nav-item"><a href="#" class="nav-link">About Us</a></li>
			<?php
			session_start();

			if (isset($_SESSION['user_id'])) {
				// user is logged in?>
				<li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
			<?php
			} else {
				// user is not logged in?>
				<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
			<?php
			}
			
			?>
			
		</ul>
	</nav>
</body>
</html>

	
<script>
	document.getElementById("navbar-toggler").addEventListener("click", function() {
	document.getElementById("navbar-nav").classList.toggle("show");
	document.querySelector(".navbar-toggler .icon-bars").classList.toggle("hide");
	document.querySelector(".navbar-toggler .icon-close").classList.toggle("show");
});
</script>