<?php
include('include/header.php');
include('include/sidebar.php');
?>
<div class="col-lg-12">
            <h1 class="page-header">List of Users  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add User</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 --> 
   		 	<div class="col-lg-12"> 
				<table id="dash-table" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0"> 
				  <thead>
				  	<tr>
				  		<th>Email</th>
				  		<th>UserName</th>
				  		<th>Password</th>
				  		<th>Role</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  <?php
				  include('connection/db.php');
				  $id=$_GET['id'];
				  $sql=($conn,"select * from admin_login where admin_id='$id'");
				  while($row=mysqli_fetch_array($sql)){
					  echo '<tr>';
					  echo '<td>' . $row['admin_email'].'</a></td>';
				  		
				  }
				  ?>