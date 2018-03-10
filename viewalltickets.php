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
                    <li>
                        <a href="admin_viewallitusers.php"><i class="fa fa-table "></i>Update/Delete IT staff Profile</a>
                    </li>
                    <li>
                        <a href="admin_config.php"><i class="fa fa-qrcode "></i>Configuration Management</a>
                    </li>
                      <li class="active-link">
                        <a href="#"><i class="fa fa-qrcode "></i>View/Search Tickets</a>
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
                  <!-- /. ROW  --> 
               <label>Enter Name:</label><i class="fa fa-search"></i> <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">     <a href="sla.php"><button>EXTRACT TABLE</button></a>  
                  <?php
require 'databaseconn.php';

$name=
$query="SELECT * FROM ticket_info  " ;
  //query is a string that you can use to query data from the database
 // $result=mysqli_query($query);
  if($result=mysqli_query($conn,$query)){
    //echo ' query was a success';
    echo '
    
          
             
              
             <div class="panel-body">
             <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <h5>Table  Sample One</h5>
               <table id ="myTable" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr class="header">
                    
                        <th>ID</th>
                        <th>NAME</th>
                        <th>DEPARTMENT</th>
                        <th>PROBLEM</th>
                        <th>URGENCY</th>
                        <th>DEVICE</th>
                        <th>REPORTED DATE</th>
                        <th>STATUS</th>
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
            <td class="row_r">'.$query_result['ticket_reporteddate'].'</td>
            <td class="row_s">'.$query_result['status'].'</td>
          </tr>
        </tbody>';

  }
    
    echo '</table></div></div></div></div></div></div></div></div>';
  }
    else {
    echo 'query failed';
  }
  ?>

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
    
   <script type="text/javascript">
    
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[1];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    } 
  }
}

   </script>
</body>
</html>
