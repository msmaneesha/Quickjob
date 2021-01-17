<?php
include('connection/db.php');
$del=$_GET['del'];
$query=mysqli_query($conn,"delete from jobseeker where j_id='$del'");
if($query){
	echo "<script>alert('Record has been successfully deleted !!!')</script>";
	header('location:jobseeker.php');
}
else
{
	echo "<script>alert('Record not deleted !!!')</script>";
}

?>