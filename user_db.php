<?php
//starts a session
session_start();
//to add cookies 
require 'databaseconn.php';
//to get values from login1.php
$user =$_POST['user'];
$pass =$_POST['pass'];

//$pass1 =$_POST['$pass1'];
//to prevent mysql injection

//$pass1=mysql_real_escape_string($pass1);
 //to connect to sql server and database

//to query the database for the user
$result="SELECT * FROM user_login WHERE username='$user' limit 1";
$query= mysqli_query($conn,$result);
//after you have fetched d data den to compare with the values posted in the login1 form
//Returns an array of strings that corresponds to the fetched row, or FALSE if there are no more rows after the mysql_query.
$display=mysqli_fetch_array($query,MYSQLI_BOTH);

if (password_verify($pass,$display['password'])) {
	$_SESSION['user']=$user;
    header('location:'."userticket.php");
}

else{
	echo
    '<script>alert("wrong username and/or password");
	window.location ="user_login.php";
	</script>';
   
}

?>


