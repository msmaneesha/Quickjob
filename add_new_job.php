<?php
session_start();
include('connection/db.php');

$login=$_SESSION['email'];
 $Job_title=$_POST['job_title'];
 $Description=$_POST['Description'];
 $req=$_POST['req'];
 $sal=$_POST['sal'];
 $dur=$_POST['dur'];
 $exp=$_POST['exp'];
 $sex=$_POST['sex'];
 
 $country=$_POST['country'];
 $state=$_POST['state'];
 $city=$_POST['city'];
 $category=$_POST['category'];
 $keyword=$_POST['keyword'];
 $enddate=$_POST['enddate'];
 
 

$query=mysqli_query($conn,"insert into all_jobs(customer_email,job_title,des,req_no_employees,salary,duration,experience,preferred_sex,country,state,city,category,keyword,date,end_date,status)
values('$login','$Job_title','$Description','$req','$sal','$dur','$exp','$sex','$country','$state','$city','$category','$keyword',current_date,'$enddate','date_not_finish')");

//var_dump($query);

if ($query)
{
	echo "Data has been successfully inserted";
}
else
{
    echo "some error please try again";
}	


?>