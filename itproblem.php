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
<style type="text/css">
#knownerror{
         height: 80px;
         width: 200px;
         }
   #edit_form {
        
         position: relative;
         margin: 1% auto;
         width: 70%;
         background: #f8f9fb;
         text-align: center;
         }
          tr:hover
         {
         cursor: pointer;
         }
         .overflow{
         overflow-x: hidden;
         overflow-y: scroll;
         height: 200px;
         }
         #edit_form {
         
         position: relative;
         margin: 1% auto;
         width: 70%;
         background: #f8f9fb;
         text-align: center;
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
                    
                    <li class="active-link">
                        <a href="#"><i class="fa fa-edit "></i>Problem Management </a>
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

  <details>
    <summary>
    <div class="panel panel-default">
    <div class="panel-heading">
         <h4>Create New Problem</h4>
    </div> 
    </summary>

     <div class="panel-body">
        <div class="row">
        <form action="#" method="POST">
                  <div class= "form-group col-md-12">
                     <div class="col-md-4">
                        <label>Problem Title:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="problemtitle" class="form-control" />
                     </div>
                  </div>
                  <div class= "form-group col-md-12">
                     <div class="col-md-4">
                        <label>Problem creator:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="problemcreator" class="form-control" />
                     </div>
                  </div>

                  <div class= "form-group col-md-12">
                     <div class="col-md-4">
                        <label>Impact:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="impact" class="form-control" /> 
                     </div>
                  </div>
                  <div class= "form-group col-md-12">
                     <div class="col-md-4">
                     <label>Urgency*:</label>
                    </div>
                    <div class="col-md-6 ">
                      <select name="urgency" class="form-control">
                          <option value="select">Select--</option>
                        <option value="high">High</option>
                        <option value="moderate">Moderate </option>
                        <option value="low">Low</option>
                    
                      </select>
                  </div>
                  </div>
                  <div class= "form-group col-md-12">
                     <div class="col-md-4">
                        <label>Problem Description:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="description" class="form-control" /> 
                     </div>
                  </div>
                  </div>
                  <div class="text-center">
                  <input type="submit" name="submit" class="btn btn-primary">
                  </div>
     </div>
  
</form>
</details>
<?php

     require 'databaseconn.php';
if(isset($_POST['submit']))
{
$problemtitle=$_POST['problemtitle'];
$problemcreator=$_POST['problemcreator'];
$impact=$_POST['impact'];
$urgency=$_POST['urgency'];
$description=$_POST['description'];
$status='open';
$problemtitle=mysqli_real_escape_string($conn,$problemtitle);
$problemcreator=mysqli_real_escape_string($conn,$problemcreator);
$impact=mysqli_real_escape_string($conn,$impact);
$urgency=mysqli_real_escape_string($conn,$urgency);
$description=mysqli_real_escape_string($conn,$description);

$problemtitle=stripslashes($problemtitle);
$problemcreator=stripslashes($problemcreator);
$impact=stripslashes($impact);
$urgency=stripslashes($urgency);
$description=stripslashes($description);

$query="INSERT INTO problem_knownerror (id,problemcreator,problemtitle,impact,urgency,description,status) VALUES (NULL,'$problemcreator','$problemtitle','$impact','$urgency','$description','$status')";
$result=mysqli_query($conn,$query);
if(!$result)
{
  echo 'queryfailed';
} 

}
mysqli_close($conn);
?>

<details>
<summary>
<div class="panel panel-default">
    <div class="panel-heading">
         <h4>Problem Activity Log</h4>
   
</div>
</div>
</summary>
 <div class="panel-body">
<?php
require 'databaseconn.php';
$query="SELECT * FROM problem_knownerror WHERE status='open'";
 if($result=mysqli_query($conn,$query)){
             //echo ' query was a success';
             echo '
             
                   
                      
                       <div class="overflow">
                      
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                          
                           <thead>
                             <tr>
                               <th>EDIT</th>
                                 <th>ID</th>
                                 <th>PROBLEM ASSIGNEE</th>
                                 <th>PROBLEM TITLE</th>
                                 <th>IMPACT</th>
                                 <th>URGENCY</th>
                                 <th>DESCRIPTION</th>
                                 <th>ACTIVITY 1</th>
                                 <th>ACTIVITY 2</th>
                                 </tr>
                             </thead>';
             while ($query_result=mysqli_fetch_assoc($result)) {
         
             echo '<tbody>
                   <tr>
                      <td class="edit_row">&#x2710;</td>
                     <td class="row_id">'. $query_result['id'].'</td>
                     <td class="row_pc">'. $query_result['problemcreator'].'</td>
                     <td class="row_pt">'. $query_result['problemtitle'].'</td>
                     <td class="row_i">'. $query_result['impact'].'</td>
                     <td class="row_u">'. $query_result['urgency'].'</td>
                     <td class="row_d">'. $query_result['description'].'</td>
                     <td class="row_a1">'.$query_result['activity_1'].'</td>
                     <td class="row_a2">'.$query_result['activity_2'].'</td>
                   </tr>
                 </tbody>';
         
           }
             
             echo '</table></div></div>';
         
             }
?>
</details>

         <form action="itproblem1.php" method="POST" id="edit_form">
            
               <div class="panel-heading">
                  <div class="text-center">
                     <h4>UPDATE PROBLEM ACTIVITY</h4>
                  </div>
               </div>

               <div class="panel-body">
               <div class="row">
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket ID:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="id" id="id" class="form-control" />
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Problem Assignee:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="name" id="name" class="form-control" disabled  /> 
                     </div>
                  </div>
                
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Problem Title:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="problemtitle" id="problemtitle" class="form-control" disabled />
                     </div>
                  </div>
                 
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Impact:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="impact" id="impact" class="form-control" disabled /> 
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Urgency:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="urgency" id="urgency" class="form-control" disabled /> 
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Description:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="description" id="description" class="form-control" disabled /> 
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Activity 1:</label>
                     </div>
                      <div class="col-md-6 ">
                        <input type="text" name="activity1" id="activity1" class="form-control" /> 
                     </div>
                  </div>
                   <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Activity 2:</label>
                     </div>
                      <div class="col-md-6 ">
                        <input type="text" name="activity2" id="activity2" class="form-control" /> 
                     </div>
                  </div>
                   <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Known Error:</label>
                     </div>
                      <div class="col-md-6 ">
                        <input type="text" name="knownerror" id="knownerror" class="form-control" /> 
                     </div>
                  </div>
                   <div class="text-center">
                  <button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> submit</button>
               </div>

                  </div>
                  </div>
                  </form>



              <script>
         // gets all the .edit_row cells, registers click to each one
         var edit_row = document.querySelectorAll('#table_id .edit_row');
         for(var i=0; i<edit_row.length; i++) {
           edit_row[i].addEventListener('click', function(e){
             // get parent row, add data from its cells in form fields
             var tr_parent = this.parentNode;
             document.getElementById('id').value = tr_parent.querySelector('.row_id').innerHTML;
             document.getElementById('name').value = tr_parent.querySelector('.row_pc').innerHTML;
             document.getElementById('problemtitle').value = tr_parent.querySelector('.row_pt').innerHTML;
             document.getElementById('impact').value = tr_parent.querySelector('.row_i' ).innerHTML;
             document.getElementById('urgency').value = tr_parent.querySelector('.row_u').innerHTML;
              document.getElementById('description').value = tr_parent.querySelector('.row_d').innerHTML;
           document.getElementById('activity1').value = tr_parent.querySelector('.row_a1').innerHTML;
             document.getElementById('activity2').value = tr_parent.querySelector('.row_a2').innerHTML;
             // display the form, and focus on a form field
             document.getElementById('edit_form').style.display = 'block';
             document.getElementById('e_site').focus();
           }, false);
         }
         
         // to hide #edit_form when click on #cls_f button
        // document.getElementById('cls_f').addEventListener('click', function(){
           
          //this.parentNode.style.display = 'none';
         
         //},true);
      </script>





