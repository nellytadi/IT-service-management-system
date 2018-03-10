<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
  
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles.css">
<meta charset="utf-8">

	<title></title>
</head>
<body>

<?php
$username=$_POST['username'];
require 'databaseconn.php';
$query= "SELECT * FROM ticket_info WHERE name='$username'";
$result=mysqli_query($conn,$query);
if ($result){
	echo '
	 		
             
               <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp" id="table_id">
                  <thead>
                    <tr>
                     
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

    echo '
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
    
    echo '</table></div></div></div></div></div></div></div>';
}
?>

</body>
</html>