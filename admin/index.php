<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login/');
}
include('../include/db.php');
$sql = "SELECT * FROM admin_users";
$result = mysqli_query($conn,$sql);
$row= mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dlas Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Arizonia|Montserrat:400,500,600,700|Roboto+Condensed&display=swap" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"> -->

  <!-- Custom styles for this template-->
  <link href="css/Dashboard.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
       <img src="./img/logo.png" alt="">
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Welcom Douae lasri</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">


      <!-- Nav Item - Pages Collapse Menu -->
      <!-- <li class="nav-item">
        <a class="nav-link" href="../admin/">
          <span data-feather="home"></span>
        Home
        </a>
      </li> -->
      <!-- Nav Item - Portfolio -->
      <li class="nav-item">
        <a class="nav-link" href="?editportfolio=true">
          <span data-feather="archive"></span>
          Edit Portfolio
        </a>
      </li>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Account Settings</span>
        <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
        </a>
      </h6>
      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="?editprofile=true">
          <span data-feather="user"></span>
          Edit Profile
        </a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
     <!-- Main Content -->
      <div id="content">
         <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
         <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">
            <div class="topbar-divider d-none d-sm-block"></div>
            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Lasri douae</span>
                <img class="img-profile rounded-circle" src="">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="php/logout.php">Logout</a>
    </li>
  </ul>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
   <?php
     if(isset($_GET['editportfolio'])){
      include('php/portfolio.php');
     }else if(isset($_GET['editprofile'])){ ?>
      <h2>Edit Profile</h2>
    <?php
         if(isset($_GET['msg'])){
             
       if($_GET['msg']=='updated'){
      ?>
      <div class="alert alert-success text-center" role="alert">
        Successfully Updated !
       </div>
      <?php
        }  
       } 
   ?> 
         <form method="post" action="php/uprofile.php">
         <div class="form-row">
             <div class="form-group col-md-6">
    <label for="ptitle">Name</label>
    <input type="text" name="username" value="<?php echo $row['username']?>" class="form-control" id="ptitle" placeholder="Lasri douae">
     </div>
        <div class="form-group col-md-6">
    <label for="psubtitle">Password</label>
    <input type="text" name="userpass" value="<?php echo $row['user_pass']?>" class="form-control" id="psubtitle" placeholder="*************">
     </div>
        <div class="form-group col-md-12">
    <label for="psubtitle">Email Id</label>
    <input type="text" name="userid" value="<?php echo $row['user_id']?>" class="form-control" id="psubtitle" placeholder="admin@admin.com">
       </div>
         </div>
         <input type="submit" name="uprofile" class="btn btn-primary" value="Save Changes">
         </form>
         <?php }else{
         include('php/welcome.php');
     } ?>
    </main> 
              </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Custom scripts for all pages-->
  <script src="js/admin.min.js"></script>


</body>

</html>
