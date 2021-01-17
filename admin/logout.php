<?php
session_start();
session_unset();
$email=$_SESSION['email'];
header('location:admin_login.php');
include('connection/db.php');
$query=mysqli_query($conn,"select * from admin_login where admin_email='$email'");
if($query)
{
	header('location:http://localhost/Quickjob/');
	
}	
else{
	header('location:admin_login.php');
}
?>