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

<details>
    <summary>
    <div class="panel-heading">
         <h4>Create Change Requests</h4>
    </div> 
    </summary>
  <form action="itchange1.php" method="POST">
<label>NAME:</label>
<?php
echo '
<input type="text" value="'.$_SESSION['itname'].'" name="username" class="form-control">
';
?>
<label>Configuration Item CI*:</label>
<input type="text" name="ci_item" placeholder="enter CI item required" class="form-control">
<label>Urgency*:</label>
<select name="urgency" class="form-control">
<option>Select--</option>
<option value="high">High</option>
<option value="moderate">Moderate</option>
<option value="low">Low</option>
</select>
<label>Quantity:</label>
<input type="number" name="quantity" class="form-control">
<div class="text-center">
 <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit" value ="submit">
                            submit
                            </button>   
                            </div>    
</form>
</details>
<hr>
                    <details>
                        <summary><div class="panel-heading">
                    <h4>View Change Requests Response</h4>
                    </div></summary>
                    <?php
require 'databaseconn.php';
$query="SELECT * FROM ci_changerequest WHERE ticket_response !=''";
if($result=mysqli_query($conn,$query)){

    echo' 
                       <div class="overflow">
                      <div class="panel-body">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                          
                           <thead>

                            <tr>
                               <th>ID</th>
                                 <th>USERNAME</th>
                                 <th>CONFIGURATION ITEM</th>
                                 <th>URGENCY</th>
                                 <th>QUANTITY</th>
                                 <th>TICKET STATUS</th>
                                 <th>TICKET UPDATE</th>
                            </tr></thead>';


while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
echo '
<tbody>
<tr>

<td>'. $row[0].'</td>
<td>'.  $row[1].'</td>
 <td>'. $row[2].'</td>
 <td>'.$row[3].'</td>
<td>'.$row[4].'</td>
<td>'.$row[5].'</td>
<td>'.$row[6].'</td></tr></tbody>';
}
}
?>
</details>
                    
                    
                  