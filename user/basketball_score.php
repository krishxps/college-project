<?php include("config.php");
if(!isset($_SESSION['P_id'])){
      header("location:login.php");
      die();
   }?>
   <?php
  
  // Username is root
  $user = 'root';
  $password = ''; 
  $database = 'project';
  $servername='localhost';
  $mysqli = new mysqli($servername, $user, 
                  $password, $database);
    
  // Checking for connections
  if ($mysqli->connect_error) {
      die('Connect Error (' . 
      $mysqli->connect_errno . ') '. 
      $mysqli->connect_error);
  }
    
  // SQL query to select data from database
  $sql = "SELECT * FROM basketball_score ORDER BY B_id DESC ";
  $result = $mysqli->query($sql);
   
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>View Score</title>
</head>
<body>
    <header class="text-black-600 body-font"  style="background-color: #f2ff00;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><a href="homepage.php">Sports EYE</a></span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="gallery.php">Gallery</a>
            <a class="mr-5 hover:text-gray-900" href="aboutus1.php">About</a>
            <a class="mr-5 hover:text-gray-900" href="viewteam.php">View Team</a>
            <a class="mr-5 hover:text-gray-900" href="scoreboard.php">Scoreboard</a>
            <a class="mr-5 hover:text-black-900" href="registration.php">Registration</a>
            <a class="mr-5 hover:text-gray-900" href="contactus1.php">Contact Us</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="logout.php">Logout</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>
      <hr>
      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">BASKETBALL SCORE</h1>

        </div>
      </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
     
                  <thead>
                  <tr>
                     <th>Basketball ID</th>
                     <th>Match ID</th>
                      <th>Round1</th>
                      <th>Round2</th>
                      <th>Round3</th>
                      <th>Round4</th>
                      <th>Total</th>
                      </tr>
                  </thead>
                  <!-- PHP CODE TO FETCH DATA FROM ROWS-->
            <?php   // LOOP TILL END OF DATA 

                while($rows=$result->fetch_assoc())
                {
             ?>
            <tr>
                <!--FETCHING DATA FROM EACH 
                    ROW OF EVERY COLUMN-->
                <td><?php echo $rows['B_id'];?></td>
                <td><?php echo $rows['Match'];?></td>
                <td><?php echo $rows['Round1'];?></td>
                <td><?php echo $rows['Round2']?></td>
                <td><?php echo $rows['Round3'];?></td>
                <td><?php echo $rows['Round4'];?></td>
                <td><?php echo $rows['Total'];?></td>
    
            </tr>
       <?php } ?>
   </table>

    </div>
  </div>
</section>

<hr>
 <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            
            <span class="ml-3 text-xl">Sports EYE</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Sports —
            <a href="homepage.php" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@SportsEye</a>
          </p>
          
        </div>
      </footer>
      <script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="Teacher/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="Teacher/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>         
</body>

</html>