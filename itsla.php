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
                    <li>
                        <a href="itchange.php"><i class="fa fa-bar-chart-o"></i>Change Management</a>
                    </li>
                    
                    <li>
                        <a href="itproblem.php"><i class="fa fa-edit "></i>Problem Management </a>
                    </li>
                   
                    <li class="active-link">
                        <a href="#"><i class="fa fa-qrcode "></i>S.L.A Management</a>
                    </li>
                     
                     <li>
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
                             <strong>Welcome IT personnel, </strong><p>
                             Here you can access all tickets you have created and the time gap it took you to work on all tickets. Please take note that all tickets should be closed immediately you are done working on them to prevent breaching S.L.A..</p>
                             <p>NB:</p>
                             <p>The tickets below breached SLA </p>
                        </div>
                       
                    </div>
                    </div>
<?php
require 'databaseconn.php';

$name= $_SESSION['itname'];

$query="SELECT * FROM ticket_info WHERE ticket_closedby ='$name' AND SLA_status > 3000";

  if($result=mysqli_query($conn,$query)){
    
    echo '
    
          
             
              
             <div class="panel-body">
             <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5>Tickets with SLA breached</h5>
               <table id ="myTable" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr class="header">
                    
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DEPARTMENT</th>
                        <th>PROBLEM</th>
                        <th>URGENCY</th>
                        <th>DEVICE</th>
                        <th>SOLUTION</th>
                        <th>REPORTED DATE</th>
                        <th>CLOSED DATE</th>
                        <th>STATUS</th>
                        <th>SLA_STATUS</th>

                    </tr></thead>';
    while ($query_result=mysqli_fetch_assoc($result)) {

    echo '<tbody>
          <tr>
         
            <td class="row_id">'. $query_result['id'].'</td>
            <td class="row_n">'. $query_result['name'].'</td>
            <td class="row_dp">'. $query_result['department'].'</td>
            <td class="row_p">'. $query_result['problem'].'</td>
            <td class="row_u">'. $query_result['urgency'].'</td>
            <td class="row_d">'. $query_result['device'].'</td>
             <td class="row_r">'.$query_result['solution'].'</td>
            <td class="row_r">'.$query_result['ticket_reporteddate'].'</td>
            <td class="row_r">'.$query_result['ticket_closeddate'].'</td>

            <td class="row_s">'.$query_result['status'].'</td>
             <td class="row_s">'.$query_result['SLA_status'].'</td>
          </tr>
        </tbody>';

  }
    
    echo '</table></div></div></div></div></div></div></div></div>';
  }
    else {
    echo 'query failed';
  }
                    
