<?php
session_start();
if (!isset($_SESSION['adminuser'])){
  header('location:'."admin_login.php");
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
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<script type="<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
<style>
    #image{
        height:150px;
        width: 150px;
    }
</style>
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
                    <li>
                        <a href="admin_addituser.php"><i class="fa fa-bar-chart-o"></i>Create New IT staff</a>
                    </li>
                    
                    <li class="active-link">
                        <a href="#"><i class="fa fa-edit "></i>Update/Delete User Profile </a>
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
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome ADMIN, </strong>
                        </div>
                       
                    </div>
                    </div>
                  
<?php
require 'databaseconn.php';

$username=$_GET['username'];
$username=stripslashes($username);
$username=mysqli_real_escape_string($conn,$username);

$result= "SELECT * FROM user_login WHERE username='$username'";
$query = mysqli_query($conn,$result) or die ('error querying the database'. mysqli_error());


	$row=mysqli_fetch_assoc($query);
	if ($username != $row['username'])
	{
		echo 'username does not exist';
	}
	else{
	echo '
	<form action="admin_updateuserprofile_db.php" method="POST">
	<div class="panel-body">
            <div class="container">
                <div class="row">
	<img id="image" src=uploads/'.$row['passport'].'>
	<hr>
    <div class= "form-group col-md-8">
        <div class="col-md-3">
	<label>ID:</label>
	</div>
	<div class="col-md-6">
	<input type="number" name="id"  class="form-control" value="'.$row['id'].'">
	</div>
	</div>
	<div class= "form-group col-md-8">
        <div class="col-md-3">
	<label>Username:</label>
	</div>
	<div class="col-md-6">
	<input type="text" name="username"  class="form-control" value="'.$row['username'].'">
	</div>
	</div>
	<div class= "form-group col-md-8">
        <div class="col-md-3">
<label>Password:</label>
</div>
<div class="col-md-6">
<input type="text" name="password"  class="form-control" value="'.$row['password'].'">
</div>
</div>
<div class= "form-group col-md-8">
        <div class="col-md-3">
<label>Full Name:</label>
</div>
<div class="col-md-6">
<input type="text" name="fullname"  class="form-control" value="'.$row['name'].'">
</div>
</div>
<div class= "form-group col-md-8">
        <div class="col-md-3">

<label>Department:</label>
</div>
<div class="col-md-6">
<input type="text" name="department"  class="form-control" value="'.$row['department'].'">
</div>
</div>

<div class= "form-group col-md-8">
        <div class="col-md-3">
<label>Phone Number:</label>
</div>
<div class="col-md-6">
<input type="text" name="phonenumber"  class="form-control" value="'.$row['phonenumber'].'">



<div class="text-center">
<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit" value ="submit">
                            submit
                            </button>
                            </div>
                            </div>
                            </div>
                            </div>
</form>';
}
?>
</body>
 
</html>
