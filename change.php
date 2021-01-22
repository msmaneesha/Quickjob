<?php

 session_start(); 
?>
<html>
<head>
<style>

input[type=email], input[type=password]  {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

</style>
</head>          
             
<div class="center" style="margin-left:25%; width:50%; border:1px solid gray; padding:10px;">
	
<form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="tableheader">
<td colspan="2"><center><h1>Change Password</h1></center></td>
</tr>
<tr>
<td width="40%"><label>Email</label></td>
<td width="60%"><input type="email" name="email" class="txtField"/><span id="email"  class="required"></span></td>
</tr>
<tr>
<td width="40%"><label>Current Password</label></td>
<td width="60%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
</tr>
<tr>
<td><label>New Password</label></td>
<td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
</tr>
<td><label>Confirm Password</label></td>
<td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table>
</div>
</form>
</body></html>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "newpassword and confirmPassword are not equal";
output = false;
} 	
return output;
}
</script>
<?php

 
include('connection/db.php');
if (isset($_POST['submit']))
{
	$email= $_POST['email'];
	$newPassword=$_POST['newPassword'];
if (count($_POST) > 0) 
{
    $result = mysqli_query($conn, "SELECT * from employer WHERE emp_email='$email'");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["emp_password"])
		{
        mysqli_query($conn, "UPDATE employer set emp_password='$newPassword' WHERE emp_email='$email'");
        
		echo "<script>alert('Password Changed')</script>";
		header('location:emp_login.php');
        } 
		else
		{
        echo "<script>alert('Current Password is not correct')</script>";
		}
}
}
?>