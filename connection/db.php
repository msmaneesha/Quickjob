<?php
$conn=mysqli_connect("localhost","root","","job_portal");
if(!$conn){
	echo "connection error!".mysqli_connect_error();
}
else{
	//echo("success");
} 
?>