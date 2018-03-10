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
    <link rel="stylesheet" href="material design lite/material.min.css">

      <script defer src="material design lite/material.min.js"></script>
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
                    
                    <li>
                        <a href="viewallusers.php"><i class="fa fa-edit "></i>Update/Delete User Profile </a>
                    </li>
                    <li class="active-link">
                        <a href="#"><i class="fa fa-table "></i>Update/Delete IT staff Profile</a>
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
                     
 

 <?php
require 'databaseconn.php';
$query="SELECT * FROM itstaff_login";

if($result=mysqli_query($conn,$query)){
echo '
  
                      <div class="panel-body">
                        <table class="table table-striped">
                          
                           <thead>
                           <tr>
								<th>ID</th>
								<th>PASSPORT</th>
								<th>USERNAME</th>
								
								<th>FULLNAME</th>
								
								<th>PHONE NUMBER</th>
								<th>EMAIL</th>
								<th></th>
							</tr></thead>

';
while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
	echo '
	<tbody>
		<tr>
			<td>'.$row['id'].'</td>
			<td><img id="image" src=uploads/'.$row['passport'].'></td>
			<td>'.$row['username'].'</td>
			
			<td>'.$row['staffname'].'</td>
			<td>'.$row['phonenumber'].'</td>
			<td>'.$row['email'].'</td>
			<td><a href="admin_updateituserprofile.php?username='.$row['username'].'"><button>update</button></a><a href="delete_ituser1.php?username='.$row['username'].'"><button>delete</button></a></td>
		</tr>
		</tbody></tbody></div>  
                    </div>
                    </div>
	';
}
}

?>