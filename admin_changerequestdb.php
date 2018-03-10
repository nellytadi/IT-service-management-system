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
                        <a href="admin_workonusers.php"><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   
                    <li class="active-link">
                        <a href="#"><i class="fa fa-edit "></i>Change Requests </a>
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
$e_id=$_POST['e_id'];
$e_name=$_POST['e_name'];
$e_ciitem=$_POST['e_ciitem'];
$e_urgency=$_POST['e_urgency'];
$e_quantity=$_POST['e_quantity'];
$e_ticketresponse=$_POST['e_ticketresponse'];
$e_ticketupdate=$_POST['e_ticketupdate'];

require 'databaseconn.php';
$e_name=mysqli_real_escape_string($conn,$e_name);
$e_ciitem=mysqli_real_escape_string($conn,$e_ciitem);
$e_urgency=mysqli_real_escape_string($conn,$e_urgency);
$e_quantity=mysqli_real_escape_string($conn,$e_quantity);
$e_ticketresponse=mysqli_real_escape_string($conn,$e_ticketresponse);
$e_ticketupdate=mysqli_real_escape_string($conn,$e_ticketupdate);

$e_name=stripslashes($e_name);
$e_ciitem=stripslashes($e_ciitem);
$e_urgency=stripslashes($e_urgency);
$e_quantity=stripslashes($e_quantity);
$e_ticketresponse=stripslashes($e_ticketresponse);
$e_ticketupdate=stripslashes($e_ticketupdate);

$query="UPDATE ci_changerequest SET quantity = '$e_quantity' WHERE ci_changerequest. id='$e_id';";
$query.="UPDATE ci_changerequest SET ticket_response='$e_ticketresponse' WHERE ci_changerequest. id='$e_id';";
$query.="UPDATE ci_changerequest SET ticket_update='$e_ticketupdate' WHERE ci_changerequest. id='$e_id';";
 if($result=mysqli_multi_query($conn,$query)){
 echo 'your response has been sent'	;
}
else{
	echo 'failure sending response';
}
?>