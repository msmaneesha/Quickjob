<?php
$conn=mysqli_connect("localhost","root","","job_portal");
$query=mysqli_query($conn,"select * from employer where emp_email='{$_SESSION['email']}'");

if(mysqli_num_rows($query)>0)
{
	
?>

<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="profile.php">
                  <span data-feather="file"></span>
                  My Profile
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="job_create.php">
                  <span data-feather="users"></span>
                   All Jobs
                </a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="apply_jobs.php">
                  <span data-feather="users"></span>
                  Applicants
                </a>
              </li>
			 
              
            

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="category.php">
                  <span data-feather="file-text"></span>
                   Category
                </a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="accepted_list.php">
                  <span data-feather="file-text"></span>
                   Accepted Application List
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="rejected_list.php">
                  <span data-feather="file-text"></span>
                   Rejected Application List
                </a>
              </li>
            </ul>
          </div>
        </nav>





<?php	
}
else
{
?>
<div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Home</li>
  </ol>
</nav>
              </li>
              <li class="nav-item">
                <!--<a class="nav-link" href="#">
                  <span data-feather="file"></span>
                  Orders   
                </a>   -->
              </li>
              <li class="nav-item">
              <!--  <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a> -->
              </li>
             <li class="nav-item">
                  <!--<a class="nav-link" href="customer.php">
                  <span data-feather="users"></span>
                  Customers
                </a> -->
              </li>
              <li class="nav-item">
                <a class="nav-link" href="job_create.php">
                  <span data-feather="bar-chart-2"></span>
                  Job Create
                </a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="apply_jobs.php">
                  <span data-feather="layers"></span>
                  Apply Jobs
                </a> 
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <!-- <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>-->
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                 <!-- <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>-->
              </li>
              <li class="nav-item">
               <!-- <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale  -->
                </a>
              </li>
            </ul>
          </div>
        </nav>
		
		
		
		
<?php

}
?>

    