<!doctype html>
<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Employer_login</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Custom styles for this template -->
    <link href="css/admin_login.css" rel="stylesheet">
	<script src="js/admin_login.js"></script>
  </head>

  <body class="text-center">
    <form class="form-signin" id="admin_login" method="post" action="emp_login.php" name="admin_login">
      <img class="mb-4" src="img/logo.jfif" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
	  
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="email" id="email" class="form-control" placeholder="Email address" required autofocus>
	  
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="Pass" name="pass"class="form-control" placeholder="Password" required>
	  
      <input class="btn btn-lg btn-primary btn-block" type="submit" name="submit" placeholder="Sign-in">
	  <a href="change.php">Change password?</a><br>
	  <a href="emp_signup.php">Create account</a>
      <p class="mt-5 mb-3 text-muted"></p>
    </form>
  </body>
</html>
<?php
include("connection/db.php");
if(isset($_POST['submit'])){
	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	$sql=mysqli_query($conn,"select * from employer where emp_email='$email' and emp_password='$pass'");
     
	  if(mysqli_num_rows($sql))
      {
          while($row=mysqli_fetch_array($sql))
          {   
              $name=$row["emp_username"];
              $id=$row["emp_id"];
              $_SESSION["emp_username"]=$name;
              
              $_SESSION["email"]=$email;
              
          }
        header("location:emp_dashboard.php");
      }
      else{
         
         echo "<script>alert('Invalid Username or password/please try again')</script>";
	


      }

  }

?>
