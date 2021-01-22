<!DOCTYPE html>
<?php
include('include/header.php');
include('include/sidebar.php');

if(isset($_SESSION['email'])===true)
{
	
}
else{
	header('location:emp_login.php');
}?>
<html lang="en">

  <head>
    <title>JobPortal - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    

            
    <div align="center">
    <h1><strong>My Profile</strong></h1><br>
      <form action="" id="jobportal" style="border:1px solid gray; width:500px; height:200px;" method="post" enctype="multipart/form-data" >
			<div style=" align:center;">
			<input type="hidden" name="employer" value="<?php echo $_SESSION['email'];?>" id="employer">
			<input type="hidden" name="id" value="<?php echo $id;?>" id="id">
			<div class="row">
				<div class="col-sm-6">
					<label for="">Enter your First Name</label>
					<input type="text" class="form-control" name="firstname" id="firstname" value="<?php echo $name;?>" placeholder="First Name...">
				</div>
				
			</div>
			
			<div class="row">
			<div class="col-sm-6">
					<label for="">Enter your Last Name</label>
					<input type="text" class="form-control" name="lastname" id="lastname" value="<?php echo $lname;?>"placeholder="Last Name...">
				</div>
				
			</div>
			
			<div class="row">
				<div class="col-sm-6">
					<label for="">Enter your DOB</label>
					<input type="date" class="form-control" name="dob" id="dob"value="<?php echo $dob;?>" placeholder="DOB...">
				</div>   
		    </div>
			
			
			<div class="row">
               <div class="col-md-6">
                 <img src="profile_images/<?php if(!empty($img)){echo $img;} else{ echo 'lo.jpg' ;} ?>" class="img-thumbnail" alt="Cinque Terre">
               </div>
              <div class="col-md-4">
	          <input type="file" class="form-control" name="img" id="img"> 
	            </div>
               </div>
			
			
			
				<div class="row">
				<div class="col-sm-6">
					<label for="">Enter your Contact Number</label>
					<input type="text" class="form-control" name="mobile" id="mobile" value="<?php echo $mobile;?>" placeholder="Contact Number">
				</div>
				</div>
				
				<br><br>
				<div class="row">
				<div class="col-sm-6">
				<!--<div class="form-group">-->
			<input type="submit" name="submit" id="submit" value="submit"placeholder="Submit" class="btn btn-primary btn-block"></div>
			</div>
				</div>
			</div>
			<br>
			
			
			</form>
       
       
</div>
  

  
  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>