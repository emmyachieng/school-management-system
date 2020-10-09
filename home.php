<?php 
include('function.php');

if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location:login.php');
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header('location:login.php');
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>SB Admin - Start Bootstrap Template</title>
    <link href="style.csss" type="text/css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body class="bg-dark">

   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
</ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  
    <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="home.php?logout='1'">
						<i class="fa fa-fw fa-sign-out"></i>logout</a>
		</li>
    <li class="nav-item">
    <a class="nav-link" data-toggle="modal" data-target="#exampleModal" href="create_user.php">
       &nbsp;+ add user</a>
      </a>
    </li>
            </div>            
            </nav>

    <div class="nav-item">
				<?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
          <i  style="color: #888;">(<?php echo ucfirst($_SESSION['user']['user_type']); ?>)</i>
          <?php endif ?>
			</div>


<div class="row">
<div class="col-sm-2">
<nav class="navbar navbar-dark bg-dark">
    <ul class="navbar-nav navbar-sidenav"  id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
    <a class="nav-link" href="home.php">
    <i class="fa fa-fw fa-dashboard"></i>
    <span class="nav-link-text">Dashboard</span>
    </a>
    </li>
    
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
    <a class="nav-link" href="#">
    <i class="fa fa-check-square"></i>
    <span class="nav-link-text">student</span>
    </a>
    <span class="nav-link-text"><a class="nav-link" href="student/view_student.php">view student details</a></span>
    <span class="nav-link-text"><a class="nav-link" href="student/add_student.php">add student</a></span>
    
    </li>

    <li class="nav-item " data-toggle="tooltip" data-placement="right" title="Charts">
    <a class="nav-link" href="#">
    <i class="fa fas fa-user"></i>
    <span class="nav-link-text">Register users</span>
    </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
    <a class="nav-link" href="#">
    <i class="fa fas fa-user"></i>
    <span class="nav-link-text">teachers</span>
    </a>
    </li>

    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
    <a class="nav-link" href="#">
    <i class="fa fas fa-user"></i>
    <span class="nav-link-text">settings</span>
    </a>
    </li>
    
    <ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
    <a class="nav-link text-center" id="sidenavToggler">
    <i class="fa fa-fw fa-angle-left"></i>
    </a>
    </li>
</ul>
</ul>
</nav>
</div>

<div class="col-sm-10">
<div class="content-wrapper">
    <div class="container-fluid">
<!-- Breadcrumbs-->
<ol class="breadcrumb">
<li class="breadcrumb-item">
<a href="home.php">Dashboard</a>
</li>
<li class="breadcrumb-item active">My Dashboard</li>
</ol>
<?php

?>
    <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary 0-hidden h-100">
    <div class="card-body">
    <div class="card-body-icon">
    <i class="fa fa-fw fa-comments"></i> 
    </div>
    <div class="mr-5"><?php echo $row['students'];?>students</div>
    </div>
    <a class="card-footer text-white clearfix small z-1" href="#">
    <span class="float-left">view details</span>
    <span class="float-right">
    <i class="fa fa-angle-right"></i>
    </span>
    </a>
    </div>
    </div>
    </div>

</div>
</div>
</div>
</div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    </body>
    </html>
