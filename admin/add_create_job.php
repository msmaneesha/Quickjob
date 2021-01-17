 <?php
include('include/header.php');
include('include/sidebar.php');
?>
<?php
$query=mysqli_query($conn,"select * from job_category");
?>
 <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		 <nav aria-label="breadcrumb">
  
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="job_create.php">All Job List</a></li>
	<li class="breadcrumb-item"><a href="#">Edit Job</a></li>
    

  </ol>
       </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		  <h1 class="h2">Edit Job</h1>
             <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
				</div>
             <!-- <a class="btn btn-primary" href="add_customer.php" >Add Customer</a>-->
            </div>
          </div>
		  <div style="width:60%; margin-left:20%; background-color:#EAEDED; ">
		  
		  <form action="" method="post" style="margin:3% padding:3%;" name="job-form" id="job-form">
		     <div id="msg"> </div>
		    <div class="form-group">
			 <label for="Customer Email">Job Title</label>
			 <input type="text"  name="job_title" id="job_title" class="form-control" placeholder="Enter Job title">
			
		</div>
		
			<div class="form-group">
			 <label for="Customer Email">Required No. of Employees</label>
			 <input type="text"  name="rne" id="rne" class="form-control" placeholder="Enter No.of Employees required">
			
		</div>
		
			<div class="form-group">
			 <label for="Customer Email">Salary</label>
			 <input type="text"  name="salary" id="salary" class="form-control" placeholder="Enter Salary amount">
			
		</div>
		<div class="form-group">
			 <label for="Customer Email">Duration</label>
			 <input type="text"  name="duration" id="duration" class="form-control" placeholder="Enter Job Duration">
			
		</div>
			<div class="form-group">
			 <label for="Customer Email">Experience</label>
			 <input type="text"  name="experience" id="experience" class="form-control" placeholder="Enter Job Experience">
			
		</div>
			<div class="form-group">
			 <label for="Customer Username"> Description</label>
			  <textarea name="Description" id="Description" class="form-control" col="30" rows="10"></textarea>
			</div>
			
			<div class="form-group">
			 <label for="Customer Email">Preffered Sex</label>
			 <input type="radio" name="sex" value="male">Male
			<input type="radio" name="sex" value="female">Female
		</div>
			
			<div class="form-group">
			 <label for="Customer Keyword">Keyword</label>
			  <input type="text" name="keyword" id="keyword" class="form-control">
			</div>
			
			<div class="form-group">
			<label for="">Country</label>
			<select name="country" class="countries form-control" id="countryId">
			<option value="">Select Country</option>
			</select>
			</div>
			
			<div class="form-group">
			<label for="">State</label>
			<select name="state" class="states form-control" id="stateId">
			<option value="">Select State</option>
			</select>
			</div>
			<div class="form-group">
			<label for="">City</label>
			<select name="city" class="cities form-control" id="cityId">
            <option value="">Select City</option>
			</select>
			</div>
			<div class="form-group">
			<label for="">Category</label>
			<select name="category" class="cat form-control" id="category">
			<?php
			while($row=mysqli_fetch_array($query))
				{
				?>
				<option value="<?php echo $row['job_id'];?>"><?php echo $row['category'];?></option>
<?php				
				}
			?>
            
			</select>
			</div>
			
			
			
			
			<div class="form-group">
			 <label for="Last name"></label>
			 <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
			</div>
			</form>
		  </div>
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
<script>
    $(document).ready(function(){
	$("#submit").click(function(){
		var rne=$("#rne").val();
		var salary=$("#salary").val();
		var duration=$("#duration").val();
		var experience=$("#experience").val();
		var Description=$("#Description").val();
		var sex=$("#sex").val();
		var job_title=$("#job_title").val();
		var countryId=$("#countryId").val();
		var stateId=$("#stateId").val();
		var cityId=$("#cityId").val();
		
		 if(job_title==''){
			 alert("please enter job title!!");
			 return false;
		 }
		 if(rne==''){
			 alert("please enter no of Employees!!");
			 return false;
		 }
		 if(salary==''){
			 alert("please enter salary!!");
			 return false;
		 }
		 if(duration==''){
			 alert("please enter duration!!");
			 return false;
		 }
		 if(experience==''){
			 alert("please enter job Experience!!");
			 return false;
		 }
		 
		 if(Description==''){
			 alert("please enter Description!!");
			 return false;
		 }
		 if(keyword==''){
			 alert("please enter keyword!!");
			 return false;
		 }
		if(sex==''){
			 alert("please enter job title!!");
			 return false;
		 }
		if(countryId==''){
		 alert("please Select Country!!");
	    return false;
		 }
	    if(stateId==''){
			 alert("please Select state!!");
			 return false;
		}
		  if(cityId==''){
			 alert("please Select city!!");
			 return false;
		 }
		 if(category==''){
			 alert("please Select category!!");
			 return false;
		 }
		var data=$("#job-form").serialize();
		$.ajax({
			type:"POST",
			url:"add_new_job.php",
			data:data,
			success:function(data){
				$("#msg").html(data);
			alert(data);
			}
		});
		
	});
});
</script>

  </body>
</html>

