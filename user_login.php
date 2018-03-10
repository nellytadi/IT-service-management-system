<!DOCTYPE HTML>

<html>
	<head>
		<title>User Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Page Wrapper -->
			<div id="page-wrapper">

				<!-- Header -->
					<header id="header">
						<h1>IT SERVICE SUPPORT</h1>
						<nav>
						<a href="itsmhome.php">Home page</a>
							<a href="#menu" title="user, admin, itstaff">Login</a>
						</nav>

					</header>

				<!-- Menu -->
					<nav id="menu">
						<div class="inner">
							
							<ul class="links">
							
							<li><a href="itstafflogin.php">IT Staff Login</li>
							<li>
								<a href="admin_login.php">Administrator Login</a>
							</li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>


				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>ITSM: USER LOGIN</h2>
								
							</div>
						</header>

						<!-- Content -->

							<div class="wrapper">
								<div class="inner">
									<form method="POST" action="user_db.php">
								<div class="field">
									<label for="name">User Name:</label>
									<input type="text" name="user" id="user" />
								</div>
								<div class="field">
									<label for="password">Password:</label>
									<input type="password" name="pass" id="pass" />
								</div>
							
								<ul class="actions">
									<li><input type="submit" value="Submit" /></li>
								</ul>
							</form>

								</div>
							</div>

				

				<!-- Footer -->
					<section id="footer">
						<div class="inner">
							<h2 class="major">Get in touch</h2>
							<p>CFor more enquiries contact us at any of the following below:
							
							<ul class="contact">
								<li class="fa-home">
									contact address:<br />
									1234 somewhere in<br />
									kurudu
								</li>
								<li class="fa-phone">(+234) 08163638322</li>
								<li class="fa-envelope"><a href="#">nellytadi@gmail.com</a></li>
								<li class="fa-twitter"><a href="#">twitter-- nellytadi</a></li>
								<li class="fa-facebook"><a href="#">Nelly Tadi</a></li>
								<li class="fa-instagram"><a href="#">Nelly Tadi</a></li>
							</ul>
							
						</div>
					</section>

			</div>

		<!-- Scripts -->
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>




  
</html>