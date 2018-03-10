<?php
session_start();
if (!isset($_SESSION['adminuser'])){
  header('location:'."admin_login.php");
}
else{
  echo $_SESSION['adminuser'];
}
session_regenerate_id();
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
                        <a href="admin_workonusers.php" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   
                    <li>
                        <a href="admin_changerequest.php"><i class="fa fa-edit "></i>Change Requests </a>
                    </li>

                    <li>
                        <a href="admin_adminadduser.php><i class="fa fa-qrcode "></i>Create New User</a>
                    </li>
                    <li class="active-link">
                        <a href="#"><i class="fa fa-bar-chart-o"></i>Create New IT staff</a>
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

        </nav><?php

 $target_dir = "uploads/";
		 //the path to store the image
		$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    	
    	if($check !== false) 
    	{
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
   		 }
   		
   		 if (file_exists($target_file))
   		  {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
			}

		require 'databaseconn.php';
//get all the submitted data from the form
		$target=$_FILES["fileToUpload"]["name"];
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phonenumber=$_POST['phonenumber'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		//$repassword=$_POST['repassword'];

		//move_uploaded_file($_FILES['passport']['name'], $target);

		 $name=mysqli_real_escape_string($conn,$name);
		$username=mysqli_real_escape_string($conn,$username);
		$phonenumber=mysqli_real_escape_string($conn,$phonenumber);
		$email=mysqli_real_escape_string($conn,$email);
		$password=mysqli_real_escape_string($conn,$password);
		//$repassword=mysqli_real_escape_string($conn,$repassword);

		$name=stripslashes($name);
		$phonenumber=stripslashes($phonenumber);
		$username=stripslashes($username);
		$password=stripslashes($password);
		//$repassword=stripslashes($repassword);
		$email=stripslashes($email);

    $hashed_password=password_hash($password,PASSWORD_BCRYPT,['cost'=>10]);
   
		$result= "INSERT INTO itstaff_login (id,username,password,staffname,phonenumber,email,passport) VALUES (NULL,'$username','$hashed_password','$name','$phonenumber','$email','$target')"
		or die ("failed to query the database");
		
  				mysqli_query($conn,$result) or die ("error !!");
				
				
				 if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file))
				  {
        		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded and username" .$username.' has beeen created.';
            header("location:admin_addituser.php?success= User created successfully");
   				 } 
    			else {
       			 echo "Sorry, there was an error uploading your file.";
    				}


?>
