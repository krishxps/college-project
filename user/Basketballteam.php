<?php include("config.php");
if(!isset($_SESSION['P_id'])){
      header("location:login.php");
      die();
   }?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
	<title>Basketball Team Name</title>
</head>
<body>
  <header class="text-black-600 body-font" style="background-color: #f2ff00;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-black-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><a href="homepage.php">Sports EYE</a></span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-black-400 flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-black-900" href="gallery.php">Gallery</a>
            <a class="mr-5 hover:text-black-900" href="aboutus1.php">About</a>
            <a class="mr-5 hover:text-black-900" href="viewteam.php">View Team</a>
            <a class="mr-5 hover:text-black-900" href="scoreboard.php">Scoreboard</a>
            <a class="mr-5 hover:text-gray-900" href="registration.php">Registration</a>
            <a class="mr-5 hover:text-black-900" href="contactus1.php">Contact Us</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="logout.php">Logout</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>
      <hr>
	<section class="text-black-600 body-font">
  <div class="container px-5 py-24 mx-auto text-center">
    <div class="flex flex-col text-center w-full mb-20">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-black-900">Basketball Teams</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base"></p>
    </div>
    <div class="flex flex-wrap -m-2 pl-100">
      <div class="p-2 lg:w-1/6 md:w-1/2 w-1/2">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <div class="flex-grow">
           <?php
  
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
                
               $sql = "SELECT * FROM basketball where B_id = 4 ";
              $result = $mysqli->query($sql);
                while($rows=mysqli_fetch_array($result))
                {
             ?>
             <a href="#">
            <h2 class="text-black-900 title-font font-medium"><?php echo $rows['Tname'];?></h2>
          
            <p class="text-black-500"><?php echo $rows['P1_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P2_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P3_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P4_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P5_id'];?></p>
          </a><?php } ?>
          </div>
        </div>
      </div>
      <div class="p-2 lg:w-1/6 md:w-1/2 w-1/2">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
         <div class="flex-grow">
          <?php
                  if ($mysqli->connect_error) {
                  die('Connect Error (' . 
                  $mysqli->connect_errno . ') '. 
                  $mysqli->connect_error);
              }
                
              // SQL query to select data from database
              $sql = "SELECT * FROM Basketball where B_id = 5 ";
              $result = $mysqli->query($sql);
             
              
             // LOOP TILL END OF DATA 

                while($rows=$result->fetch_assoc())
                {
             ?>
           <a href="#">
            <h2 class="text-black-900 title-font font-medium"><?php echo $rows['Tname'];?></h2>
            <p class="text-black-500"><?php echo $rows['P1_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P2_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P3_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P4_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P5_id'];?></p>
          </a><?php } ?>
          </div>
        </div>
      </div>
     <div class="p-2 lg:w-1/6 md:w-1/2 w-1/2">
        <div class="h-full flex items-center border-gray-200 border p-4 rounded-lg">
          <div class="flex-grow">
             <?php
                  if ($mysqli->connect_error) {
                  die('Connect Error (' . 
                  $mysqli->connect_errno . ') '. 
                  $mysqli->connect_error);
              }
                
              // SQL query to select data from database
              $sql = "SELECT * FROM Basketball where B_id = 7 ";
              $result = $mysqli->query($sql);
             
              
             // LOOP TILL END OF DATA 

                while($rows=$result->fetch_assoc())
                {
             ?>
             <a href="#">
            <h2 class="text-black-900 title-font font-medium"><?php echo $rows['Tname'];?></h2> 
            <p class="text-black-500"><?php echo $rows['P1_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P2_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P3_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P4_id'];?></p>
            <p class="text-black-500"><?php echo $rows['P5_id'];?></p>
          </a><?php } ?>
          </div>
        </div>
      </div>
      
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
            <a href="https://twitter.com/knyttneve" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@SportsEye</a>
          </p>
          
        </div>
      </footer>
</body>
</html>