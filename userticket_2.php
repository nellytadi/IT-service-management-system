<html>
  <head>
    <title>Register Complaint</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="assets/css/main.css" />
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
  </head>
  <body>

    <!-- Page Wrapper -->
      <div id="page-wrapper">

        <!-- Header -->
          <header id="header">
            <h1>IT SERVICE SUPPORT</h1>
            <nav>
              <a href="user_logout.php" title="user, admin, itstaff">LOGOUT</a>
            </nav>

          </header>

        <!-- Menu -->
          


        <!-- Wrapper -->
          <section id="wrapper">
            <header>
              <div class="inner">		
<?php
session_start();
session_regenerate_id();
if(!isset($_SESSION['user']))
{
 header('location:'."user_login.php");
}

require 'databaseconn.php';
$name=$_POST['name'];
$department=$_POST['department'];
$problem=$_POST['problem'];
$urgency=$_POST['urgency'];
$device=$_POST['device'];
$my_date = date("Y-m-d H:i:s");
$status='open';


 
$name=mysqli_real_escape_string($conn,$name);
$department=mysqli_real_escape_string($conn,$department);
$problem=mysqli_real_escape_string($conn,$problem);
$urgency=mysqli_real_escape_string($conn,$urgency);
$device=mysqli_real_escape_string($conn,$device);

$name=stripslashes($name);
$department=stripslashes($department);
$problem=stripslashes($problem);
$urgency=stripslashes($urgency);
$device=stripslashes($device);



$result="INSERT INTO ticket_info (id, name, department, problem, urgency, device,ticket_reporteddate,status) VALUES (NULL, '$name', '$department', '$problem', '$urgency','$device','$my_date','$status')" or die ("failed to query the database").mysqli_error();
$row=mysqli_query($conn,$result);
if(!$row){
echo 'please go back and re enter your information';
}
else{
	echo '<b>'. $name.' your details have been stored successfully'.'<b>';
}
 /*$to = "xyz@somedomain.com"; 
   $subject = "This is subject"; 
   $message = "<b>This is HTML message.</b>"; 
   $message .= "<h1>This is headline.</h1>"; 
   $header = "From:abc@somedomain.com \r\n"; 
   $header = "Cc:afgh@somedomain.com \r\n"; 
   $header .= "MIME-Version: 1.0\r\n"; 
   $header .= "Content-type: text/html\r\n"; 
   $retval = mail ($to,$subject,$message,$header); 
   if( $retval == true ) 
   { 
      echo "Message sent successfully..."; 
   } 
   else 
   {
*/

?>
<hr>
            <div class="text-center">
                <a href=userticket.php>
                <button>click here to go back</button>
                </a>
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
</div>
</body>
</html>