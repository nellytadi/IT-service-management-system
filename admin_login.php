<!DOCTYPE HTML>

<html>
	<head>
		<title>Admin Login</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		
			<script type="text/javascript">
		function validate()
{
 if( document.login_form.adminuser.value == "")
 {
 alert( "Please provide your name and password!" );
 document.login_form.adminuser.focus() ;
 return false;
 }
}

	</script>
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
							
							<li>
								<a href="user_login.php">User Login</a>
							</li>
							<li>
								<a href="itstafflogin.php">IT Staff Login</a>
							</li>
							</ul>
							<a href="#" class="close">Close</a>
						</div>
					</nav>


				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>ITSM: ADMINISTRATOR's LOGIN</h2>
								
							</div>
						</header>

						<!-- Content -->

							<div class="wrapper">
								<div class="inner">
									<form method="POST" action="admin_db.php">
								<div class="field">
									<label for="name">User Name:</label>
									<input type="text" name="adminuser" id="adminuser" />
								</div>
								<div class="field">
									<label for="password">Password:</label>
									<input type="password" name="password" id="password" />
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
