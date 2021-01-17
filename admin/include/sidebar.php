<?php
include('connection/db.php');
$query=mysqli_query($conn,"select * from admin_login where admin_email='{$_SESSION['email']}' and role='admin'");
if(mysqli_num_rows($query)>0){

?>
		
    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="admin_dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
             <li class="nav-item" >
                <a class="nav-link" href="job_create.php">
                  <span data-feather="briefcase"></span>
                  Vacancy
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="job.php">
                  <span data-feather="users"></span>
                 Applicants
                </a>
              </li>
              
			  <li class="nav-item">
                <a class="nav-link" href="customer.php">
                  <span data-feather="user"></span>
                  Manage Employers
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="jobseeker.php">
                  <span data-feather="user"></span>
                  Manage Jobseekers
                </a>
              </li>
			 
			  <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="list"></span>
                  Category
              </li>
			  
			  
            </ul>

            <!--<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>-->
           <!-- <ul class="nav flex-column mb-2">-->
              
             <!--<li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>-->
          </div>
        </nav>
		<?php
		}else{
			
			//$id=$_SESSION['admin_id'];
			?>
			
			<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="admin_dashboard.php">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <span data-feather="user"></span>
                  My Profile
                </a>
              </li>
             <li class="nav-item" >
                <a class="nav-link" href="job_create.php">
                  <span data-feather="briefcase"></span>
                  Vacancy
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="job.php">
                  <span data-feather="users"></span>
                 Applicants
                </a>
              </li>
              
			 <!-- <li class="nav-item">
                <a class="nav-link" href="customer.php">
                  <span data-feather="user"></span>
                  Manage Users
                </a>
              </li>-->
			  <li class="nav-item">
                <a class="nav-link" href="../about.php">
                  <span data-feather="help-circle"></span>
                  About Us
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="../contact.php">
                  <span data-feather="mail"></span>
                  Contact Us
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="list"></span>
                  Category
              </li>
			  
			  
            </ul>

	 <!--  <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders
                </a>
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">-->
               <!-- <a class="nav-link" href="customer.php">
                  <span data-feather="users"></span>
                  Customers
                </a>-->
              <!--</li>
              <li class="nav-item">
                <a class="nav-link" href="job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job create
                </a>
              </li>
			  
              <!--<li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>-->
            </ul>

            
              <!--<li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>-->
             <!-- </li>
             <li class="nav-item">
                 <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>-->
              </li>
            </ul>
          </div>
        </nav>
			<h1>Customer admin</h1>
			<?php
		}
			?>
			