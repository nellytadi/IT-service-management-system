<!DOCTYPE html>
<html>
<head>
	
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>
<!--<form action="userticket_2.php" method="POST">-->



		<div class="panel panel-default">
				<div class="panel-body">
					<div class="container">
	<!--div class="form-group"-->
				<div class="row">
						<div class= "form-group col-md-12">
				
				
<?php
session_start();
//starts a session
$itname =$_POST['itname'];
$itpass =$_POST['itpass']; 

require 'databaseconn.php';

//to query the database for the user
$result="SELECT * from itstaff_login WHERE username='$itname' limit 1";
$query=mysqli_query($conn,$result);

$display=mysqli_fetch_array($query,MYSQLI_BOTH);

if (password_verify($itpass,$display['password'])) {
	 $_SESSION['itname']=$itname;
    header('location:'."itstaffhome.php");
}


else{
	echo'<script>alert("wrong username and/or password");
	window.location ="itstafflogin.php";
	</script>';
}



?>



</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</form>
</body>
</html>