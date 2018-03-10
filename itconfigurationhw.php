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
 <link rel="stylesheet" href="material design lite/material.min.css">

      <script defer src="material design lite/material.min.js"></script>
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
                    <li>
                        <a href="itchange.php"><i class="fa fa-bar-chart-o"></i>Change Management</a>
                    </li>
                    
                    <li>
                        <a href="itproblem.php"><i class="fa fa-edit "></i>Problem Management </a>
                    </li>
                   
                    <li>
                        <a href="itsla.php"><i class="fa fa-qrcode "></i>S.L.A Management</a>
                    </li>
                    
                     <li class="active-link">
                        <a href="itconfiguration.php"><i class="fa fa-qrcode "></i>Configuration Management</a>
                    </li>
                     
                  </ul>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
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
    <div class="panel-heading"><h4>CI DATABASE (Hardware)</h4>
    </div>
  </div>

   <?php
    require 'databaseconn.php';
    $query="SELECT * FROM ci_hardware";
    if($result=mysqli_query($conn,$query)){
      echo '
 
                       <div class="overflow">
                      <div class="panel-body">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                          
                           <thead>
                             <tr>
                               
                                 <th>ID</th>
                                 <th>CI_NAME</th>
                                 <th>QUANTITY</th>
                                 <th>PROPERTIES</th>
                                
                                 </tr>
                             </thead>';
             while ($query_result=mysqli_fetch_assoc($result)) {
         
             echo '<tbody>
                   <tr>
                      
                     <td>'. $query_result['id'].'</td>
                     <td>'. $query_result['ci_name'].'</td>
                     <td>'. $query_result['quantity'].'</td>
                     <td>'. $query_result['properties'].'</td>
                     
                   </tr>
                 </tbody>';
    
    }
  }

   ?>
