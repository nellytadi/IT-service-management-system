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
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
 <link rel="stylesheet" href="material design lite/material.min.css">

      <script defer src="material design lite/material.min.js"></script><script type="https://code.jquery.com/jquery-3.1.1.min.js"></script>
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
                 


                  

                    <li>
                        <a href="admin_workonusers.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="admin_changerequest.php"><i class="fa fa-edit "></i>Change Requests </a>
                    </li>

                    <li>
                        <a href="admin_adduser.php"><i class="fa fa-qrcode "></i>Create New User</a>
                    </li>
                    <li class="active-link">
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Create New IT staff</a>
                    </li>
                    
                    <li>
                        <a href="viewallusers.php"><i class="fa fa-edit "></i>Update/Delete User Profile </a>
                    </li>
                    <li>
                        <a href="admin_viewallitusers.php"><i class="fa fa-table "></i>Update/Delete IT staff Profile</a>
                    </li>
                    <li>
                        <a href="admin_config.php"><i class="fa fa-qrcode "></i>Configuration Management</a>
                    </li>
                      <li>
                        <a href="viewalltickets.php"><i class="fa fa-qrcode "></i>View/Search Tickets</a>
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
                 <?php if(isset($_GET['success'])){ ?>
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong><?php echo $_GET['success']; ?> </strong>
                        </div>
                       
                    </div>
                    </div>
                    <?php } ?>

       

<form action="admin_addituser_db.php" method="POST" enctype="multipart/form-data"  name="addituser_form" onsubmit=" return( validateEmail());">

  	
		<div class="panel panel-default">
				<div class="panel-heading" style="background-color: #8DDBF3; box-shadow: 10px 10px 10px;">
				<div class="text-center">
	<h3>REGISTER IT STAFF USER</h3>
	</div>
	</div>

<div class="panel-body">
<div class="container">
	<!--div class="form-group"-->
			<div class="row">
			<label>
				 Select image to upload:
				 </label>
				 <input type="hidden" name="size" height="40" width="30">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <!--<input type="submit" value="Upload Image" name="submit">-->
				</div>
			<div class= "form-group col-md-12">
				<div class="col-md-4">
				   <label>NAME OF IT USER:</label>
				</div>
				<div class="col-md-6">
				  <input type="text" placeholder="please enter name of it staff" name="name" class="form-control">
				</div>
			</div>
			
			<div class= "form-group col-md-12">
				<div class="col-md-4">
				   <label>EMAIL:</label>
				</div>
				<div class="col-md-6">
				  <input type="email" placeholder="example@gmail.com" name="email" class="form-control">
				</div>
			</div>
			    
			<div class= "form-group col-md-12">
				<div class="col-md-4">
				   <label>IT STAFF'S PHONENUMBER:</label>
				</div>
				<div class="col-md-6">
				  <input type="text" placeholder="example 08033244911" name="phonenumber" class="form-control">
				</div>
			</div>
			<div class= "form-group col-md-12">
				<div class="col-md-4">
				   <label>NEW USERNAME:</label>
				</div>
				<div class="col-md-6">
				  <input type="text" placeholder="please enter username" name="username" class="form-control">
				</div>
			</div>
			<div class= "form-group col-md-12">
				<div class="col-md-4">										
				   <label>NEW PASSWORD:</label>
				</div>
				<div class="col-md-6">
				  <input type="password" placeholder="please enter new password" name="password" class="form-control">
				</div>
			</div>
			<div class= "form-group col-md-12">
				<div class="col-md-4">
				   <label>RE-ENTER PASSWORD:</label>
				</div>
				<div class="col-md-6">
				  <input type="password" placeholder="reenter password " name="repassword" class="form-control">
				</div>
			</div>
			
				 <div class="text-center">
											
							
						 <button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit"> submit</button>
		</div>
          <!-- /. ROW  -->   
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
