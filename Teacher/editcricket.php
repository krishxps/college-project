<?php include("config.php");
if(!isset($_SESSION['Admin_Id'])){
      header("location:login.php");
      die();
   }?>
<?php
 if(isset($_GET['id']))
 {
 $C_id = $_GET['id'];
 $sql = "SELECT * FROM cricket WHERE C_id ='" . $_GET["id"] . "'";
$result = $con->query($sql);
// LOOP TILL END OF DATA 

                $rows=$result->fetch_assoc();
                
                $P1name = $rows['P1name'];
                $P2name = $rows['P2name'];
                $P3name = $rows['P3name'];
                $P4name = $rows['P4name'];
                $P5name = $rows['P5name'];
                $P6name = $rows['P6name'];
                $P7name = $rows['P7name'];
                $P8name = $rows['P8name'];
                $P9name = $rows['P9name'];
                $P10name = $rows['P10name'];
                $P11name = $rows['P11name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Cricket</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="logout.php" class="nav-link">Logout</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
         
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                
                
              </div>
            </div>
            <!-- Message End -->
          </a>
          
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
    
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <span class="brand-text font-weight-light">Sports EYE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">Teacher</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
     <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
           
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_team.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Team</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Team.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Team</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Player
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_player.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Player</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Player.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Player</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Teacher
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Teacher</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Teacher.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Teacher</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Sports
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_sports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Sports</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Sports.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Sports</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Cricket
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_cricket.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Cricket</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Cricket.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Cricket</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Basketball
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_basketball.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Basketball</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Basketball.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Basketball</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Football
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="Manage_football" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Manage Football</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Football.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Football</p>
                </a>
              </li>
            </ul>
          </li>
         
  </aside>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Cricket Players</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cricket</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
               <form action="<?php $_PHP_SELF ?>" method="post">
                <div class="card-body">
                   <div class="form-group">
                    <label for="exampleInputP1name">Player 1 Name</label>
                    <input type="text" class="form-control" name="P1name" id="P1name" value="<?php echo $P1name;?>"placeholder="<?php echo $P1name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP2name">Player 2 Name</label>
                    <input type="text" class="form-control" name="P2name" id="P2name" value="<?php echo $P2name;?>"placeholder="<?php echo $P2name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP3name">Player 3 Name</label>
                    <input type="text" class="form-control" name="P3name" id="P3name" value="<?php echo $P3name;?>"placeholder="<?php echo $P3name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP4name">Player 4 Name</label>
                    <input type="text" class="form-control" name="P4name" id="P4name" value="<?php echo $P4name;?>"placeholder="<?php echo $P4name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP5name">Player 5 Name</label>
                    <input type="text" class="form-control" name="P5name" id="P5name" value="<?php echo $P5name;?>"placeholder="<?php echo $P5name;?>" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputP6name">Player 6 Name</label>
                    <input type="text" class="form-control" name="P6name" id="P6name" value="<?php echo $P6name;?>"placeholder="<?php echo $P6name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP7name">Player 7 Name</label>
                    <input type="text" class="form-control" name="P7name" id="P7name" value="<?php echo $P7name;?>"placeholder="<?php echo $P7name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP8name">Player 8 Name</label>
                    <input type="text" class="form-control" name="P8name" id="P8name" value="<?php echo $P8name;?>"placeholder="<?php echo $P8name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP9name">Player 9 Name</label>
                    <input type="text" class="form-control" name="P9name" id="P9name"value="<?php echo $P9name;?>"placeholder="<?php echo $P9name;?>" required>
                  </div>

                   <div class="form-group">
                    <label for="exampleInputP10name">Player 10 Name</label>
                    <input type="text" class="form-control" name="P10name" id="P10name" value="<?php echo $P10name;?>"placeholder="<?php echo $P10name;?>" required>
                  </div>
                 
                  <div class="form-group">
                    <label for="exampleInputP11name">Player 11 Name</label>
                    <input type="text" class="form-control" name="P11name" id="P11name" value="<?php echo $P11name;?>"placeholder="<?php echo $P11name;?>" required>
                  </div>
                  <!-- /.button -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="insert1">Submit</button>
                </div>
              </form>
            </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
 <?php
if(isset($_POST['insert1']))
{
    
 $P1name = $_POST['P1name'];
 $P2name = $_POST['P2name'];
  $P3name = $_POST['P3name'];
  $P4name = $_POST['P4name'];
  $P5name = $_POST['P5name'];
  $P6name = $_POST['P6name'];
  $P7name = $_POST['P7name'];
  $P8name = $_POST['P8name'];
  $P9name = $_POST['P9name'];
  $P10name = $_POST['P10name'];
  $P11name = $_POST['P11name'];
 $insert = "UPDATE `cricket` SET `P1name`='$P1name',`P2name`='$P2name',`P3name`='$P3name',`P4name`='$P4name',`P5name`='$P5name', `P6name`='$P6name', `P7name`='$P7name', `P8name`='$P8name', `P9name`='$P9name', `P10name`='$P10name', `P11name`='$P11name' WHERE `C_id` ='" . $_GET["id"] . "'";

    if ($con->query($insert) === TRUE) {
  echo "Record edited successfully";
} else {
  echo "Error: " . $insert . "<br>" . $con->error;
}
    mysqli_close($con);

  }
?>
</body>
</html>
