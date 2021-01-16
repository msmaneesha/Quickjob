<?php
include('connection/db.php');
 $company=$_POST['Company'];
 $Description=$_POST['Description'];
 $admin=$_POST['admin'];
$query=mysqli_query($conn,"insert into company(company,des,admin)values('$company','$Description','$admin')");
var_dump($query);
if($query){
	echo "Data has been successfully inserted";
}
else
{
	echo "Error..Try again ";
}
?>


