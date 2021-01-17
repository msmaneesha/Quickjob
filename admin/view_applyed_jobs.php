<?php
include('include/header.php');
include('include/sidebar.php');
?>

  <body>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="#">Applied Jobs</a></li>
  </ol>
</nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		  <h1 class="h2">Applied Jobs</h1>
             <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
				</div>
              <!--<a class="btn btn-primary" href="add_customer.php" >Add Customer</a>-->
            </div>
          </div>
        
           
       <form action="" style="border:1px solid gray;width:50%; margin-left:10%; padding:10px;">
					 <?php
			  include('connection/db.php');
			 $id=$_GET['id'];
			  $query=mysqli_query($conn,"select * from job_apply LEFT JOIN all_jobs ON job_apply.id_job=all_jobs.job_id where id='$id'");
			   while($row=mysqli_fetch_array($query)){
			  ?>
			  <h1><?php echo strtoupper($row['firstname']); ?> <?php echo strtoupper($row['lastname']); ?></h1>
			  <hr>
           

		   <div class="form-group">
			<label for="">Job Title:</label>
                <td><?php echo $row['job_title'];?></td></div>
				
				<div class="form-group">
				<label for="">Job Description:</label>
                <td><?php echo $row['des'];?></td></div>
               
			   <div class="form-group">
			   <label for="">Job Seeker Name:</label>
                <td><?php echo $row['firstname'];?>&nbsp<?php echo $row['lastname'];?> </td></div>
				
				<div class="form-group">
				<label for="">Job Seeker Email:</label>
				<td><?php echo $row['job_seeker'];?></td></div>
				
				<div class="form-group">
				<label for="">Job Seeker Mobile Number:</label>
				<td><?php echo $row['mobile_number'];?></td></div>
				
				<div class="form-group">
				<label for="">Job Seeker File:</label>
				<td><a href="http://localhost/Quickjob/<?php echo $row['file'];?>">Download File</a></td></div>
				<td>
               <div class="row">
			   <div class="btn-group">
			   
			   </div>
			   
			   </div>
			   </td>
            </tr>
			<?php
			   }
			?>
			
			<a href="send_mail.php?id=<?php echo $id; ?>" class="btn btn-success">Accept</a>
			<a href="reject_job.php?id=<?php echo $id; ?>" class="btn btn-danger">Reject</a>
			<table><tr>
                     <td><strong><a href="approve_applicant.php?id=<?php echo $id;?>"> &nbsp; &nbsp; &nbsp;Approve</a></strong></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
       </form>
          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
          <div class="table-responsive">
           
          </div>
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
