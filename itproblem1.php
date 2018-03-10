<?php
   session_start();
   if(!isset($_SESSION['itname']))
     {
     header('location:'."itstafflogin.php");
     }
 require 'databaseconn.php';

$id=$_POST['id'];
$activity1=$_POST['activity1'];
$activity2=$_POST['activity2'];
$knownerror=$_POST['knownerror'];



$id=mysqli_real_escape_string($conn,$id);
$activity1=mysqli_real_escape_string($conn,$activity1);
$activity2=mysqli_real_escape_string($conn,$activity2);
$knownerror=mysqli_real_escape_string($conn,$knownerror);


$id=stripslashes($id);
$activity1=stripslashes($activity1);
$activity2=stripslashes($activity2);
$knownerror=stripslashes($knownerror);

if($knownerror!= "")
{
$query="UPDATE problem_knownerror SET status ='closed' WHERE problem_knownerror . id='$id';";
}

$query="UPDATE problem_knownerror SET activity_1='$activity1' WHERE problem_knownerror . id='$id';";
$query.="UPDATE problem_knownerror SET activity_2='$activity2' WHERE problem_knownerror . id='$id';";
$query.="UPDATE problem_knownerror SET known_error='$knownerror' WHERE problem_knownerror . id='$id';";

	if($result=mysqli_multi_query($conn,$query))
		{
			echo 'ACTIVITY HAS BEEN UPDATED';
		} 
	else 
		{
		echo 'ERROR UPDATING THE ACTIVITY/KNOWN ERROR';
		}



?>