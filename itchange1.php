<?php
session_start();
    if(!isset($_SESSION['itname']))
      {
      header('location:'."itstafflogin.php");
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
<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
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
                  <a href="ituser_logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 


                    <li>
                        <a href="itstaffhome.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="ittickettable.php"><i class="fa fa-edit "></i>Incident Management</a>
                    </li>
                    <li class="active-link">
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Change Management</a>
                    </li>
                    
                    <li>
                        <a href="itproblem.php"><i class="fa fa-edit "></i>Problem Management </a>
                    </li>
                   
                    <li class>
                        <a href="itsla.php"><i class="fa fa-qrcode "></i>S.L.A Management</a>
                    </li>
                     
                     <li>
                        <a href="itconfiguration.php"><i class="fa fa-qrcode "></i>Configuration Management</a>
                    </li>
                     
                    
                </ul>
                            </div>

        </nav>
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>I.T. Service Manager</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome IT personnel, </strong>
                        </div>
                       
                    </div>
                    </div>

                    <div class="panel panel-default">
                    <div class="panel-heading">
                    <h2>Create Change Requests</h2>
                    </div>
                    <?php


require 'databaseconn.php';
$username=$_POST['username'];
$ci_item=$_POST['ci_item'];
$urgency=$_POST['urgency'];
$quantity=$_POST['quantity'];

$username=mysqli_real_escape_string($conn,$username);
$ci_item=mysqli_real_escape_string($conn,$ci_item);
$urgency=mysqli_real_escape_string($conn,$urgency);
$quantity=mysqli_real_escape_string($conn,$quantity);

$username=stripslashes($username);
$ci_item=stripslashes($ci_item);
$urgency=stripslashes($urgency);
$quantity=stripslashes($quantity);

$query="INSERT INTO ci_changerequest(id,username,ci_item,urgency,quantity) VALUES (null,'$username','$ci_item','$urgency','$quantity')";
$result=mysqli_query($conn,$query) or die ('error sending change request');
if($result){
	echo 'your change request has been created successfully';
}

?>