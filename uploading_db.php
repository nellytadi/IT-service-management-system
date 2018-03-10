<?php


	$dbhost='localhost';
		 $dbusername='root';
		 $dbpass='';
		 $dbname='main_project';
		 $dbtable='admin_login';
 $conn=mysql_connect("$dbhost","$dbusername","$dbpass");
		 if(!$conn)
		 {
			 die ('cannot connect'. mysql_connect_error());
		}

		mysql_select_db("main_project");
		

		if(isset($_POST['submit']))
		{
			$passport= rand(1000,100000)."-".$_FILES['passport']['name'];
			 $passport_loc = $_FILES['passport']['tmp_name'];
			 $folder="img/";
			$passport_size= "20";
			move_uploaded_file($passport_loc, $folder.$passport);
				$sql="INSERT INTO image (id, passport, passport_size) VALUES (null,'$passport', '$passport_size')";
				mysql_query($sql,$conn);
				
		}

?>
