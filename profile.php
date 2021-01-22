<?php

include('include/header.php');
include('include/sidebar.php');
?>
 <body>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="emp_dashboard.php">Home</a></li>
    <li class="breadcrumb-item"><a href="#">My Profile</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		  <h1 class="h2">My Profile</h1>
             <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
				</div>
              </div>
          </div>
				  <form action="" style="border:1px solid gray;width:40%; margin-left:10%; padding:10px;">
		
				  <?php
				  include('connection/db.php');
			       


                   $email=$_SESSION['email'];
			       $query=mysqli_query($conn,"select * from employer where emp_email='$email'");
			       while($row=mysqli_fetch_array($query)){
					    $id=$row['emp_id']; 
						
			       ?>
			  
       
				  <h1><?php echo strtoupper($row['emp_name']);  ?> <?php echo strtoupper($row['emp_lname']);  ?></h1>
			  <hr>
           
               
				
		        <div class="form-group">
			    <h3><label for="">Email       :</label>
                <td><?php echo $row['emp_email'];?></td></div>
				
				
			   <div class="form-group">
			    <h3> <label for="">Password    :</label>
                <td><?php echo $row['emp_password'];?></td></div>
				
				<div class="form-group">
				 <h3><label for="">Mobile No   :</label>
				<td><?php echo $row['emp_mobile'];?></td></div>
				
				<div class="form-group">
				 <h3><label for="">Date of Birth:</label>
				<td><?php echo $row['emp_dob'];?></td></div>
				
            </tr>
			<?php
			   }
			?>
			
			
       </form>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  <!-- database plugin -->
   <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
   <script>
      $(document).ready(function() {
         $('#example').DataTable();
     } );
   </script>


  </body>
</html>
