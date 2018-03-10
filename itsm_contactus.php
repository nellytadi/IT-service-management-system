<?php
if (isset($_POST['submit'])){
	$subject='ITSM TICKET LOGGED';
	$message='Thanks '.$_POST['name'].' for contacting us we will get in touch as soon as possible';
	mail($_POST['email'],$subject,$message);
	mail('nellytadi@gmail.com', 'Interested user for ITSM with username: '.$_POST['name'].'',$_POST['message']);
	header('location:'."itsmhome.php");
}
?>