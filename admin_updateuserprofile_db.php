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
                        <a href="" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
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
$id=$_POST['id'];
$username=$_POST['username'];
$password=$_POST['password'];
$fullname=$_POST['fullname'];
$department=$_POST['department'];
$phonenumber=$_POST['phonenumber'];

$id=stripslashes($id);
    $username=stripslashes($username);
    $password=stripslashes($password);
    $fullname=stripslashes($fullname);
    $department=stripslashes($department);
    $phonenumber=stripslashes($phonenumber);
        $email=stripslashes($email)
       

        $id=mysqli_real_escape_string($conn,$id);
        $username=mysqli_real_escape_string($conn,$username);
        $password=mysqli_real_escape_string($conn,$password);
        $fullname=mysqli_real_escape_string($conn,$fullname);
        $department=mysqli_real_escape_string($conn,$department);
        $phonenumber=mysqli_real_escape_string($conn,$phonenumber);
        $email=mysqli_real_escape_string($conn,$email);
        $result ="UPDATE user_login SET username='$username' WHERE user_login . id='$id';";
        $result.="UPDATE user_login SET  password='$password' WHERE user_login . id='$id';";
          $result.="UPDATE user_login SET  name='$fullname'WHERE  user_login . id='$id';";
           $result.="UPDATE user_login SET  department='$department' WHERE user_login . id='$id';";
              $result.="UPDATE user_login SET  phonenumber='$phonenumber' WHERE  user_login . id='$id';";
          $result.="UPDATE user_login SET  email='$email' WHERE  user_login . id='$id';";
$query= mysqli_multi_query($conn,$result) or die ('error querying the database'. mysqli_error()); 
if ($query){
    echo "Update has occured successfully";
}       
?>