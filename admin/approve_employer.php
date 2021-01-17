<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include('connection/db.php');
$id = $_GET['id'];
// Establish Connection with MYSQL
//$con = mysqli_connect("localhost","root","","qjob");
// Select Database

// Specify the query to Update Record
$sql = mysqli_query($conn,"update employer_reg set status='approved' where id='$id'");
var_dump($sql);
// Execute query
//mysqli_query($con,$sql);
// Close The Connection
//mysqli_close($con);
if($sql){
echo '<script type="text/javascript">alert("Approved");window.location=\'customer.php\';</script>';
}
else
{
	echo "<script>alert('Some error..record not updated !!!')</script>";
}
?>

</body>
</html>
