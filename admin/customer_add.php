<?php
include('connection/db.php');
 $email=$_POST['email'];
 $password=$_POST['password'];
 $username=$_POST['Username'];
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $admin_type=$_POST['admin_type'];
$query=mysqli_query($conn,"insert into admin_login(admin_email,admin_password,admin_username,first_name,last_name,admin_type)values('$email','$password','$username','$firstname','$lastname','$admin_type')");
if ($query){
	echo "<div class='alert alert-success'>Data has been successfully inserted</div>";
}
else
{
	echo "<div class='alert alert-danger'>Error..Try again</div> ";
}
?>