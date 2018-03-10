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
      <script type="text/javascript">
         setTimeout(function()
         {
         reload.location.reload(1);
         }, 15000);
      </script>
      <style type="text/css">
         tr:hover
         {
         cursor: pointer;
         }
         .overflo{
         overflow-x: hidden;
         overflow-y: scroll;
         height: 200px;
         }
        #e_solution{
         height: 80px;
         width: 200px;
         }
         #edit_form {
         display: none;
         position: relative;
         margin: 1% auto;
         width: 70%;
         background: #f8f9fb;
         text-align: center;
         }
         #cls_f {
         position: absolute;
         top: -4px;
         right: -4px;
         border: 2px ;
         border-radius: .4em;
         padding: 2px;
         font-size: 14px;
         font-weight: 700;
         text-decoration-color: red;
         cursor: pointer;
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
                   
                    <li class="active-link">
                        <a href="#"><i class="fa fa-edit "></i>Incident Management</a>
                    </li>
                    <li>
                        <a href="itchange.php"><i class="fa fa-bar-chart-o"></i>Change Management</a>
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
               <p>Set ticket status to <b>work in progress</b> to acknowledge to the user that the ticket has been logged.</p>
            </div>
         </div>
      </div>
      <div class="container">
      <div class="panel panel-default">
      <h2>
         <div class="panel-heading">
            <div class="text-center">
               TICKET
               <h4> (open tickets)</h4>
            </div>
         </div>
      </h2>
      <?php
         require 'databaseconn.php';
         
      
         $query="SELECT * FROM ticket_info WHERE status != 'closed'ORDER BY id DESC" ;
           //query is a string that you can use to query data from the database
          // $result=mysqli_query($query);
           if($result=mysqli_query($conn,$query)){
             //echo ' query was a success';
             echo '
             
                   
                      
                       <div class="overflo">
                      <div class="panel-body">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                          
                           <thead>
                             <tr>
                               <th>EDIT</th>
                                 <th>ID</th>
                                 <th>NAME</th>
                                 <th>DEPARTMENT</th>
                                 <th>PROBLEM</th>
                                 <th>URGENCY</th>
                                 <th>DEVICE</th>
                                 <th>REPORTED DATE</th>
                                 <th>STATUS</th>
                                 </tr>
                             </thead>';
             while ($query_result=mysqli_fetch_assoc($result)) {
         
             echo '<tbody>
                   <tr>
                      <td class="edit_row">&#x2710;</td>
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
             
             echo '</table></div></div>';
           }
             else {
             echo 'query failed';
           }
           ?>

         <form action="update_ticket.php" method="post" id="edit_form">
            
               <div class="panel-heading">
                  <div class="text-center">
                     <h1>UPDATE TICKET</h1>
                  </div>
               </div>
               <div class="panel-body">
               <div class="row">
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket ID:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_id" id="e_id" class="form-control" />
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket created by:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_name" id="e_name" class="form-control" /> 
                     </div>
                  </div>
                
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Select Department:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_department" id="e_department" class="form-control" />
                     </div>
                  </div>
                 
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Possible Problem:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_problem" id="e_problem" class="form-control"/> 
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Urgency:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_urgency" id="e_urgency" class="form-control"/> 
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Device Type:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_device" id="e_device" class="form-control" /> 
                     </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket Status</label>
                     </div>
                     <div class="col-md-6 ">
                        <select class="form-control" name="e_status" id="e_status">
                           <option value="open">open</option>
                           <option value="workinprogress">work in progress</option>
                           <option value="closed">closed</option>
                        </select>
                     </div>
                  </div>
                  </div>
                 
                   
<?php
require 'databaseconn.php';
$query="SELECT username FROM itstaff_login";
if($result=mysqli_query($conn,$query)){
echo ' <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket closed by</label>
                     </div>
                     <div class="col-md-6 ">
<select class="form-control" name="t_closedby" id="t_closedby">
<option>select--</option>
';

while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
echo '

<option value="itstaff">'.$row['username'].'</option>
';
}
echo '</select>
   
                     </div>
                  </div>';
}
mysqli_close($conn);
?>

                
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Reported Date:</label>
                     </div>
                     <div class="col-md-6 "><input type="text" name="e_date" id="e_date" class="form-control" /> </div>
                  </div>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Solution:</label>
                     </div>
                     <div class="col-md-6 "><input type="text" name="e_solution" id="e_solution" class="form-control" placeholder="what job was done?" /> </div>
                  </div>
               </div>
               <div class="text-center">
                  <button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"> submit</button>
               </div>
             <!---  <span id="cls_f">Cancel</span>-->
          
         </form>
      
      
      <script>
         // gets all the .edit_row cells, registers click to each one
         var edit_row = document.querySelectorAll('#table_id .edit_row');
         for(var i=0; i<edit_row.length; i++) {
           edit_row[i].addEventListener('click', function(e){
             // get parent row, add data from its cells in form fields
             var tr_parent = this.parentNode;
             document.getElementById('e_id').value = tr_parent.querySelector('.row_id').innerHTML;
             document.getElementById('e_name').value = tr_parent.querySelector('.row_n').innerHTML;
             document.getElementById('e_department').value = tr_parent.querySelector('.row_dp').innerHTML;
             document.getElementById('e_problem').value = tr_parent.querySelector('.row_p' ).innerHTML;
             document.getElementById('e_urgency').value = tr_parent.querySelector('.row_u').innerHTML;
              document.getElementById('e_status').value = tr_parent.querySelector('.row_s').innerHTML;
           document.getElementById('e_device').value = tr_parent.querySelector('.row_d').innerHTML;
             document.getElementById('e_date').value = tr_parent.querySelector('.row_r').innerHTML;
             // display the form, and focus on a form field
             document.getElementById('edit_form').style.display = 'block';
             document.getElementById('e_site').focus();
           }, false);
         }
         
         // to hide #edit_form when click on #cls_f button
        // document.getElementById('c ls_f').addEventListener('click', function(){
           
          //this.parentNode.style.display = 'none';
         
         //},true);
      </script>
   </body>
</html>