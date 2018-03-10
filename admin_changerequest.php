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
 <link rel="stylesheet" href="material design lite/material.min.css">

      <script defer src="material design lite/material.min.js"></script><script type="https://code.jquery.com/jquery-3.1.1.min.js"></script>
 
      <style type="text/css">
         tr:hover
         {
         cursor: pointer;
         }
         .overflow{
         overflow-x: hidden;
         overflow-y: scroll;
         height: 200px;
         
         }
         .resized-textbox{
         height: 80px;
         width: 250px;
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
                        <a href="admin_adduser.php"><i class="fa fa-user "></i>Create New User</a>
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
<div class="form">
         <form action="admin_changerequestdb.php" method="POST" id="edit_form">
            <div class="panel panel-default" >
               <div class="panel-heading" style="background-color: 298da2;"> 
                  <div class="text-center">
                     <h3 id="dead">Respond to change requests</h3>
                  </div>
               </div>

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
                        <label>Username:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_name" id="e_name" class="form-control" /> 
                     </div>
                  </div>
                  <hr>
                  <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>CI_item:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_ciitem" id="e_ciitem" class="form-control" />
                     </div>
                  </div>
                  <hr>
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
                        <label>Quantity:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="number" name="e_quantity" id="e_quantity" class="form-control"/> 
                     </div>
                  </div>
                   <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket Response:</label>
                     </div>
                    <div class="col-md-6 ">
                        <select name="e_ticketresponse" id="e_ticketresponse" class="form-control"/>
                        <option>select--</option>
                        <option value="accepted">accepted/granted</option>
                        <option value="pending">Pending</option>
                        <option value="denied">Denied</option>
                        </select> 
                    </div>
                  </div>
                   <div class= "form-group col-md-6">
                     <div class="col-md-4">
                        <label>Ticket Update:</label>
                     </div>
                     <div class="col-md-6 ">
                        <input type="text" name="e_ticketupdate" id="e_ticketupdate" class="form-control"/> 
                     </div>
                  </div>
                  
               
                  
               <div class="text-center">
                  <button class= "mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" name="submit"> submit</button>
               </div>
             
            </div>
             </form>
      </div>
      
         
            <div class="text-center">
            <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #8DDBF3; box-shadow: 10px 10px 10px;">
            <h3>  Change Requests </h3>
            </div>
            
        
     

                    <?php
                    require 'databaseconn.php';

                    $query="SELECT * FROM ci_changerequest WHERE ticket_response =''";
                    if($result=mysqli_query($conn,$query))
                {
                          echo '
             
                   
                      
                       <div class="overflow">
                      <div class="panel-body">
                        <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                          
                           <thead>
                             <tr>
                               <th>EDIT</th>
                                 <th>ID</th>
                                 <th>USERNAME</th>
                                 <th>CI_ITEM</th>
                                 <th>URGENCY</th>
                                 <th>QUANTITY</th>
                                 </tr>
                             </thead>';
                 while( $row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                       echo '<tbody>
                   <tr>
                      <td class="edit_row">&#x2710;</td>
                     <td class="row_id">'. $row['id'].'</td>
                     <td class="row_n">'. $row['username'].'</td>
                     <td class="row_dp">'. $row['ci_item'].'</td>
                     <td class="row_p">'. $row['urgency'].'</td>
                     <td class="row_u">'. $row['quantity'].'</td>
                
                   </tr>
                 </tbody>';
                             }
                   
                
                  echo '</table></div></div>';
              }
            else {
             echo 'query failed';
           }
           ?>
           </div>
           </div>
           <script>
         // gets all the .edit_row cells, registers click to each one
         var edit_row = document.querySelectorAll('#table_id .edit_row');
         for(var i=0; i<edit_row.length; i++) {
           edit_row[i].addEventListener('click', function(e){
             // get parent row, add data from its cells in form fields
             var tr_parent = this.parentNode;
             document.getElementById('e_id').value = tr_parent.querySelector('.row_id').innerHTML;

             document.getElementById('e_name').value = tr_parent.querySelector('.row_n').innerHTML;
             document.getElementById('e_ciitem').value = tr_parent.querySelector('.row_dp').innerHTML;
             document.getElementById('e_urgency').value = tr_parent.querySelector('.row_p').innerHTML;
             document.getElementById('e_quantity').value = tr_parent.querySelector('.row_u').innerHTML;
            
             // display the form, and focus on a form field
             document.getElementById('edit_form').style.display = 'block';
             document.getElementById('e_site').focus();
           }, false);
         }
         
         // to hide #edit_form when click on #cls_f button
         document.getElementById('cls_f').addEventListener('click', function(){
           var dead = document.getElementById('dead');
           dead.style.display = 'none';
          this.parentNode.style.display = 'none';
         
         }, false);




         setTimeout(function()
         {
         reload.location.reload(1);
         }, 15000);
      
      </script>
   </body>
</html>

