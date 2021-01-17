<?php
session_start();
include('connection/db.php');
$login=$_SESSION['email'];
 $Job_title=$_POST['job_title'];
  $rne=$_POST['rne'];
   $salary=$_POST['salary'];
    $duration=$_POST['duration'];
	 $experience=$_POST['experience'];
 $Description=$_POST['Description'];
  $sex=$_POST['sex'];
$country=$_POST['country'];
 $state=$_POST['state'];
 $city=$_POST['city'];
 $category=$_POST['category'];
 $keyword=$_POST['keyword'];
 
$query=mysqli_query($conn,"insert into  all_jobs(customer_email,job_title,req_no_employees,salary,duration,experience,des,preffered_sex,country,state,city,category,keyword)values('$login','$Job_title','$rne','$salary','$duration','$experience','$Description','$sex','$country','$state','$city','$category','$keyword')");
if($query){
	echo "Data has been successfully inserted";
}
else
{
	echo "Error..Try again!";
}
?>
