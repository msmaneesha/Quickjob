<?php
session_start();
include('connection/db.php');
$img=$_FILES['img']['name'];
 $user_email=$_SESSION['email'];
 $name=$_POST['name'];
$dob=$_POST['dob'];
$number=$_POST['number'];
$email=$_POST['email'];
$tmp_name=$_FILES['img']['tmp_name'];

$sql=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
$sql_check=mysqli_num_rows($sql);
if(!empty($sql_check))
{
	$query=mysqli_query($conn,"update profiles Set img='$img',name='$name',dob='$dob',number='$number',email='$email' where 
	user_email='$user_email'");
			
		
	  if($query)
	        {
		        echo "<h1>Profile Updated Successfully !!</h1>";
		     }	
		  else
		     {
			     echo "<h1>Some Error Please try again !!</h1>";
		      }	
}
else
{
		move_uploaded_file($_FILES["img"]["tmp_name"],'profile_img/'.$img);
		$query=mysqli_query($conn,"insert into profiles(img,name,dob,number,email,user_email)values('$img','$name',
		'dob','$number','$email','$user_email')");
			
		
	  if($query)
	        {
		        echo "<h1>Profile Added Successfully !!</h1>";
		     }	
		  else
		     {
			     echo "<h1>Some Error Please try again !!</h1>";
		      }
}
?>