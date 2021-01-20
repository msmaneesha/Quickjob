<?php
include('connection/db.php');
include('include/header.php');
include('include/my_profile.php');
$query=mysqli_query($conn,"select * from profiles where user_email='{$_SESSION['email']}'");
while ($row=mysqli_fetch_array($query))
{
	$img=$row['img'];
	$name=$row['name'];
	$dob=$row['dob'];
	$number=$row['number'];
	$email=$row['email'];

}
?>
<br>
<div style="margin-left: 22%; width:60%; border: 1px solid gray; padding: 10px;">
<form action="profile_add.php" method="post" id="profile_form" name="profile_form" enctype="multipart/form-data">  
<div class="row">
  <div class="col-md-6">
  <img src="profile_images/<?php if(!empty($img)){echo $img;} else{ echo 'logo.png' ;} ?>" class="img-thumbnail" alt="Cinque Terre">
  </div>
    <div class="col-md-4">
	 <input type="file" class="form-control" name="img" id="img"> 
	</div>
	
		
</div>


<div style="margin-left: 22%; ">


<div class="row">
  
    <div class="col-md-6">
	<td>Enter Your DOB:</td>
	</div>
	<div class="col-md-6" >
	<td> <input type="date" name="dob" id="dob" value="<?php if(!empty($dob)) echo $dob; ?>" placeholder="Enter Your dob..." class="form-control"></td>
	</div>
	
	
</div>



<div class="row">
  
    <div class="col-md-6">
	<td>Enter Your Mobile Number:</td>
	</div>
	<div class="col-md-6" >
	<td> <input type="Number" name="number" id="number" value="<?php if(!empty($number))echo $number; ?>" placeholder="Enter Your Mobile Number..." class="form-control"></td>
	</div>
	
	
</div>



<div class="row">
  
    <div class="col-md-6">
	<td>Enter Your Another Email:</td>
	</div>
	<div class="col-md-6" >
	<td> <input type="Email" name="email" id="email" value="<?php if(!empty($email)) echo $email; ?>" placeholder="Enter Your Email..." class="form-control"></td>
	</div>
</div>

<div class="row">
  
    <div class="col-md-6">
	<td>Enter Skill:</td>
	</div>
	<textarea name="skill" id="skill" class="form-control" col="25" rows="8" placeholder="Enter Your Skills....."></textarea>
	<div class="col-md-6" >
	<td>
	</div>
</div>
<br>
<div class="form-group">
<td> <input type="submit" name="submit" id="submit" placeholder="Update" value="update" class="btn btn-success" value="submit"></td>
</div>
	
</div>


</form>
</div>
<br>
		

   

<?php
include('include/footer.php');
?>
<!--

<script>
   $(document).ready(function() {
    $('#submit').click(function(){
		var data=$("#profile_form").serialize();
		
		 $.ajax({
			type:"POST",
			url:"profile_add.php",
			data:data,
			success:function(data)
			{
			   alert(data);
			} 
		});
	});
} );
</script> -->