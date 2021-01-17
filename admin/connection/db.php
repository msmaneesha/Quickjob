<?php
$conn=mysqli_connect("localhost","root","","qjob");
if(!$conn){
	echo "connection error!".mysqli_connect_error();
}
else{
	//echo("success");
} 
?>