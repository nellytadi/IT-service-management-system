<?php
session_start();
if (!isset($_SESSION['adminuser'])){
  header('location:'."admin_login.php");
}
else{
  echo $_SESSION['adminuser'];
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ITSM Admin</title>
  <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="material design lite/material.min.css">

      <script defer src="material design lite/material.min.js"></script>
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">

<script type="<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="admin_logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li >
                        <a href="admin_workonusers.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="viewalltickets.php"><i class="fa fa-edit "></i>View Tickets </a>
                    </li>

                    <li>
                        <a href="admin_adduser.php"><i class="fa fa-qrcode "></i>Register User</a>
                    </li>
                    <li>
                        <a href="admin_addituser.php"><i class="fa fa-bar-chart-o"></i>Register IT staff user</a>
                    </li>
                    
                    <li>
                        <a href="delete_user.php"><i class="fa fa-edit "></i>Delete User </a>
                    </li>
                    <li >
                        <a href="delete_ituser.php"><i class="fa fa-table "></i>Delete IT staff user</a>
                    </li>
                    <li >
                        <a href="viewallusers.php"><i class="fa fa-qrcode "></i>View User/IT staff Detail</a>
                    </li>
                      <li class="active-link">
                        <a href="#"><i class="fa fa-table "></i>Change User/IT staff Detail</a>
                    </li>
                     
                    
                </ul>
                            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADMIN DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome ADMIN, </strong>
                        </div>
                       
                    </div>
                    </div>
                  
	<form method="POST" action="">
    <div class="container">
		<div class ="row">
			<div class="panel panel-default">
			<div class="panel heading">
			<h3>To update user profile</h3>
			</div>
				<div class="panel body">
				

						<div class= "form-group col-md-12">
							<div class="col-md-3">
							ENTER USERNAME:
							</div>
							<div class="col-md-6">
							<input type="text" name="username" placeholder="ensure username is typed in correctly" class="form-control">	
							</div>
						</div>
							<div class="text-center">
																	
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit" value ="submit">
													submit
								</button>
						

					
					</div>
		</div>
	</div>
</form>
					<form action="" method="POST">
					<div class="container">
						<div class ="row">
							<div class="panel panel-default">
								<div class="panel heading">
								
								   <h3>To update IT staff user profile</h3>
								</div>
						<div class= "form-group col-md-12">
						<div class="col-md-3">
					ENTER IT STAFF USERNAME:
						</div>
						<div class="col-md-6"><input type="text" name="itusername" placeholder="ensure username is typed in correctly" class="form-control">	
						</div>
						</div>
						<div class="text-center">
																
												<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit" value ="submit">
												submit
												</button>
						</div>
						</div>
						</form>
				     <div class="row">
                    <div class="col-lg-12 ">
          <br/>
                        <div class="alert alert-danger">
                             <strong>Information for Admin </strong> Please  ensure all users details are entered appropriately.
                        </div>
                       
                    </div>
                    </div>

                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>

