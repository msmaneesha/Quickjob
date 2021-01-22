<?php
session_start();
session_unset();
header('location:emp_login.php');
include('connection/db.php');
$query=mysqli_query($conn,"select * from employer where emp_email='{$_SESSION['email']}'");
if($query)
{
	header('location:http://localhost:8080/job_portal/');
	
}	
else{
}
?>
