<?php
include('connection/db.php');
include('include/header.php');

include('include/sidebar.php');
?>

  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
         <nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
				<li class="breadcrumb-item"><a href="#">Accepted Applicant List</a></li>
				
			  </ol>
			</nav>


        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		 <h1 class="h2">Accepted Applicant List</h2>
            <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
              </div>
<!--<a class="btn btn-primary" href="add_customer.php">Apply Jobs
              </a> -->
            </div>
          </div>


<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>SL</th>
                <th>Job Title</th>
           
				<th>Job Seeker Name</th>
				<th>Job Seeker Email</th>
				
				<th>Applied Date</th>
                
				<th></th>
            </tr>
        </thead>
        <tbody>
		
<?php
  include('connection/db.php');
   $a=1;
  $sql="select * from job_apply LEFT JOIN all_jobs ON job_apply.id_job = all_jobs.job_id where customer_email='{$_SESSION['email']}' and (job_status='accepted') ";
  $query=mysqli_query($conn,$sql);

  while($row=mysqli_fetch_array($query))
  {
  ?>
           
           
            <tr>
                <td><?php echo $a; ?></td>
                <td><?php echo $row['job_title']; ?></td>
               
                
				<td><?php echo $row['first_name']; ?> <?php echo $row['last_name']; ?> </td>
				<td><?php echo $row['job_seeker']; ?></td>
				
				<td><?php echo $row['apply_date']; ?></td>
				<td>
				 <!-- <div class="row">
				   <div class="btn-group">
				     <a href="view_applied_jobs.php?id=<?php echo $row['id']; ?>"class="btn btn-success"><span class="glyphicon glyphicon-eye-open"></span></a>
				      </div>
				  </div> -->
			   </td>
      
            </tr>
<?php $a++; } ?>
        </tbody>
        <tfoot>
            <tr>
                <th>SL</th>
                <th>Job Title</th>
				<th>Job Seeker Name</th>
				<th>Job Seeker Email</th>
				
                <th>Applied Date</th>
				<th></th>
                
            </tr>
        </tfoot>
    </table>

          <canvas class="my-4" id="myChart" width="900" height="380"></canvas>

         
          <div class="table-responsive">
         
          </div>
        </main>
 

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
  <!--datatables plugin -->
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   <script>
   $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
    
