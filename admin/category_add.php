<?php
include('connection/db.php');
 $category=$_POST['category'];
 $Description=$_POST['Description'];
 //var_dump($Description);
$query=mysqli_query($conn,"insert into job_category(category,des)values('$category','$Description')");
if ($query){
	echo "Data has been successfully inserted";
}
else
{
	echo "Error..Try again ";
}
?>