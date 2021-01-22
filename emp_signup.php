
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Signin Template for Bootstrap</title>

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
    <form class="form-signin" action="emp_signup.php" method="post" enctype="multipart/form-data">
	
	
      <img class="mb-4" src="img/logo.jfif" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Fill Registration Form</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
	   <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      
	  <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
     
	 <label for="inputEmail" class="sr-only">First Name</label>
      <input type="first_name" id="first_name" name="first_name" class="form-control" placeholder="Enter your First name" required autofocus>
      
	  <label for="inputEmail" class="sr-only">Last Name</label>
      <input type="last_name" id="last_name" name="last_name" class="form-control" placeholder="Enter your Last name" required autofocus>
      
	  <label for="inputEmail" class="sr-only">Mobile Number</label>
      <input type="Number" id="mobile_number" name="mobile_number" class="form-control" placeholder="Enter your Mobile no" required autofocus>
      
	  <label for="inputEmail" class="sr-only">Date Of Birth</label>
      <input type="date" id="dob" name="dob" class="form-control" placeholder="Enter your Date of Birth"" required autofocus>

      <input type="submit" class="btn btn-lg btn-primary btn-block" name="submit" value="Sign up">
      <a href="emp_login.php">Already Account</a>
    </form>
  </body>
</html>


<?php
include('connection/db.php');
if (isset($_POST['submit']))
{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$dob=$_POST['dob'];
	$mobile_number=$_POST['mobile_number'];
	

  
    $query=mysqli_query($conn,"insert into employer(emp_email,emp_password,emp_name,emp_lname,emp_dob,emp_mobile)values('$email','$password','$first_name','$last_name','$dob','$mobile_number')");

       
move_uploaded_file($tmp_name,$folder);

var_dump($query);
if ($query)
	
	{
		
		echo "<script>alert('Now you can login')</script>";
		header('location:emp_dashboard.php');
	}
else
{
	echo "<script>alert('Some error please try again!')</script>";
}


} 



?>













