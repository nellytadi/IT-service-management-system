<?php
session_start();


require 'databaseconn.php';

$adminuser =$_POST['adminuser'];
$password =$_POST['password'];

$adminuser= stripslashes($adminuser);
$password=stripslashes($password);
//$pass1=stripslashes($pass1);
$adminuser=mysqli_escape_string($conn,$adminuser);
$password=mysqli_escape_string($conn,$password);

//$conn= mysql_connect("$dbhost","$dbusername","$dbpassword" )or die('error connecting to the database!!'. mysql_errno());

//mysql_select_db("main_project");
//to query the database for the user
$result ="SELECT * from admin_login WHERE admin_username='$adminuser' and password='$password'";
$query=mysqli_query($conn,$result) or die('error'.mysqli_errno());
if(mysqli_num_rows($query))
{
$_SESSION['adminuser']=$adminuser;
header('location:'."admin_workonusers.php");
}
else{
	echo'<script>alert("wrong username and/or password");
	window.location ="admin_login.php";
	</script>';
	//header('location:'."admin_login.php");
}

?>


