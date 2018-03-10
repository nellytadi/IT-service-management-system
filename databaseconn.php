<?php

$dbhostname = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname ="main_project";
// Create connection
$conn = mysqli_connect($dbhostname, $dbusername, $dbpassword, $dbname);

// Check connection
if(!$conn){
    die("Connection failed: " .mysqli_connect_error());
} 

?>