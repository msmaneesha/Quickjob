<?php
include('include/header.php');
include('include/sidebar.php');
?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
		<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="customer.php">Customers</a></li>
	<li class="breadcrumb-item"><a href="#"> Add Customers</a></li>

  </ol>
       </nav>
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
		  <h1 class="h2">Add Customers</h1>
             <div class="btn-toolbar mb-2 mb-md-0">
              <div class="btn-group mr-2">
                
				</div>
             <!-- <a class="btn btn-primary" href="add_customer.php" >Add Customer</a>-->
            </div>
          </div>
		  <div style="width:60%; margin-left:20%; background-color:#EAEDED ">
		  
		  <form action="" method="post" style="margin:3% padding:3%;" name="customer-form" id="customer-form">
		  <div id="msg"></div>
		    <div class="form-group">
			 <label for="Customer Email">Enter Email</label>
			 <input type="email" name="email" id="email" class="form-control" placeholder="Customer Email">
			</div>
			<div class="form-group">
			 <label for="Customer Username"> Enter Username</label>
			 <input type="text"  name="Username" id="Username" class="form-control" placeholder="Customer Username">
			</div>
			<div class="form-group">
			 <label for="Password">Enter Password</label>
			 <input type="password" name="password" id="password" class="form-control" placeholder="Password">
			</div>
			<div class="form-group">
			 <label for="First name">Enter First Name</label>
			 <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name">
			</div>
			<div class="form-group">
			 <label for="Last name">Enter Last Name</label>
			 <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name">
			</div>
			<div class="form-group">
			 <label for="Admin Type">Role</label>
			 <select name="admin_type" class="form-control" id="admin_type">
			 <option value="1">Admin</option>
			 <option value="2">Contractor</option>
			 <option value="1">Staff</option>
			 </select>
			</div>
			<div class="form-group">
			 <label for="Last name"></label>
			 <input type="submit" class="btn btn-block btn-success" placeholder="Save" name="submit" id="submit">
			</div>
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
	$('#submit').click(function(){
		var email=$("#email").val();
		//alert(email);
		var user=$("#Username").val();
		var pass=$("#password").val();
		var fname=$("#firstname").val();
		var lname=$("#lastname").val();
		var atype=$("#admin_type").val();
		//alert(atype);
		var data=$("#customer-form").serialize();
		$.ajax({
			type:"POST",
			url:"Customer_add.php",
			data:data,
			success:function(data){
				$("#msg").html(data);
			}
		});
	});
});
</script>

  </body>
</html>
