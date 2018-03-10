<?php
session_start();

if(!isset($_SESSION['user'])){
 header('location:'."user_login.php");
}

session_regenerate_id();
?>
<!DOCTYPE HTML>
<!--
	Solid State by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Register Complaint</title>
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
							<a href="user_logout.php" title="user, admin, itstaff">LOGOUT</a>
						</nav>

					</header>

				<!-- Menu -->
					


				<!-- Wrapper -->
					<section id="wrapper">
						<header>
							<div class="inner">
								<h2>Register Complaints.</h2> (please fill in form accurately)
								</div>
								</header>
							<div class="wrapper">
								<div class="inner">

								<p><form method="POST" action="userticket_2.php">
								<div class="field"><?php
								echo'
									<label for="name">Name:</label>
									<input type="text" placeholder="please enter official name" name= "name" value="'.$_SESSION['user'].'"  class="form-control">'?>
								</div>
									<div class="field">
									<label for="name">Department:</label>
								<select name="department" class="form-control">
												<option value="select">Select--</option>
												<option value="pension">Administration</option>
												<option value="hr">Finance and Accounting</option>
												<option value="transport">Library</option>
												<option value="accounts">Litigation</option>
												<option value="library">Medical</option>
												<option value="presidency">Engineering/Services</option>
												<option value="presidency">Planning Research and Statistics</option>
											</select>
											</div>
											<div class="field">
											<label>What kind of problem are you experiencing:</label>
											

											<select name="problem" class="form-control">
												<option>Select--</option>
												<option value="emails">Problem sending emails</option>
												<option value="printing">Problem printing</option>
												<option value="hardware">Hardware issue</option>
												<option value="network">Problem connecting to the internet</option>
												<option value="software">Software applications not running </option>
												<option value="excel">Excel not downloading</option>
												<option value="bluetooth">other network issues eg bluetooth</option>
												
											</select>
											</div>
								<div class="field">
								<label>Urgency*:</label>
					
											<select name="urgency" class="form-control">
											    <option value="select">Select--</option>
												<option value="high">High</option>
												<option value="moderate">Moderate </option>
												<option value="low">Low</option>
										
											</select>
											</div>
											<div class="field">
											<label>What type of device?</label>
					
											<select name="device" class="form-control">
											    <option value="select">Select--</option>
												<option value="desktop">Desktop</option>
												<option value="laptop">Laptop</option>
												<option value="tablet">Tablet/Palmphlet</option>
												<option value="ipad">Mobile phone</option>
												<option value="desktopphone">Desktop phone</option>
												<option value="other">Others</option>
											</select>
						
											</div>
									
								<ul class="actions">
									<li><input type="submit" value="Submit Ticket" /></li>
								</ul>
							</form>
							</div>
						</header>
</section>
						<!-- Content -->
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


	
				
	