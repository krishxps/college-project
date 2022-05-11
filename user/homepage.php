<?php include("config.php");
if(!isset($_SESSION['P_id'])){
      header("location:login.php");
      die();
   }?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Sports EYE</title>
</head>
<body>
    <header class="text-black-100 body-font" style="background-color: #f2ff00;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-black-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><a href="homepage.php">Sports EYE</a></span>
          </a>
         
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center" >
            <a class="mr-5 hover:text-gray-900" href="gallery.php">Gallery</a>
            <a class="mr-5 hover:text-gray-900" href="aboutus1.php">About</a>
            <a class="mr-5 hover:text-gray-900" href="viewteam.php">View Team</a>
            <a class="mr-5 hover:text-gray-900" href="scoreboard.php">Scoreboard</a>
            <a class="mr-5 hover:text-gray-900" href="registration.php">Registration</a>
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
      <section class="text-black-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
      <img class="object-cover object-center rounded" alt="hero" src="https://source.unsplash.com/random/460x500/?sports">
    </div>
    <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500 mb-5">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Sports EYE</h2>
          <p class="leading-relaxed text-base"> A good sport should be a source of entertainment both for the participants as well as the spectators as it provides enjoyment for both.</p>
          <a class="mt-3 text-indigo-900 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500 mb-5">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
            <circle cx="6" cy="6" r="3"></circle>
            <circle cx="6" cy="18" r="3"></circle>
            <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Values</h2>
          <p class="leading-relaxed text-base"> Sports teach us discipline, the value of time, unity, togetherness and also helps us in developing Self Confidence, Team Spirit, and Mental & Physical toughness.</p>
          <a class="mt-3 text-indigo-900 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="flex flex-col mb-10 lg:items-start items-center">
        <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-200 text-indigo-500 mb-5">
          <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
            <circle cx="12" cy="7" r="4"></circle>
          </svg>
        </div>
        <div class="flex-grow">
          <h2 class="text-gray-900 text-lg title-font font-medium mb-3">Sports</h2>
          <p class="leading-relaxed text-base"> Any competitive physical activity providing a sense of enjoyment is Sport as it says ‘All work and no play make Jack a dull boy’.</p>
          <a class="mt-3 text-indigo-900 inline-flex items-center">Learn More
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-2" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
  <hr>
</section>
<section class="text-black-600 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-wrap -m-4 text-center">
      <div class="p-4 sm:w-1/4 w-1/2">
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
            
          // SQL query to select data from database
          $sql = "SELECT * FROM player WHERE P_id=(SELECT max(P_id) FROM player);";
          $result = $mysqli->query($sql);
          $mysqli->close(); 
             // LOOP TILL END OF DATA 

                while($rows=$result->fetch_assoc())
                {
             ?>
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-black-900"><?php echo $rows['P_id'];?></h2><?php } ?>
        <p class="leading-relaxed">Players</p>
      </div>
     
      <div class="p-4 sm:w-1/2 w-1/2">
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-black-900">3</h2>
        <p class="leading-relaxed">Sports Activities</p>
      </div>
      <div class="p-4 sm:w-1/4 w-1/2">
        <?php
          $sql = "SELECT * FROM teacher WHERE User_Id=(SELECT max(User_Id) FROM teacher);";
          $result = mysqli_query($con,$sql);
          mysqli_close($con); 
             // LOOP TILL END OF DATA 

                while($rows=$result->fetch_assoc())
                {
             ?>
        <h2 class="title-font font-medium sm:text-4xl text-3xl text-black-900"><?php echo $rows['User_Id'];?></h2><?php } ?>
        <p class="leading-relaxed">Teachers</p>
      </div>
    </div>
  </div>
</section>
      <hr>

     <footer class="text-black-600 body-font">
  <div class="container px-5 py-24 mx-auto flex md:items-center lg:items-start md:flex-row md:flex-nowrap flex-wrap flex-col">
    <div class="w-64 flex-shrink-0 md:mx-0 mx-auto text-center md:text-left">
      <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
          <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
        </svg>
        <a href="homepage.php"><span class="ml-1 text-xl">Sports EYE</span></a>
      </a>
      <p class="mt-2 text-sm text-black-500">A place where all are united by sports!!!</p>
    </div>
    <div class="flex-grow flex flex-wrap md:pl-20 -mb-10 md:mt-0 mt-10 md:text-left text-center">
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-black-900 tracking-widest text-sm mb-3">USEFUL LINKS</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-black-600 hover:text-black-800" href="homepage.php">Home</a>
          </li>
          <li>
            <a class="text-black-600 hover:text-black-800" href="aboutus1.php">About Us</a>
          </li>
          <li>
            <a class="text-black-600 hover:text-black-800" href="contactus1.php">Contact Us</a>
          </li>
            
        </nav>
      </div>
      <div class="lg:w-1/4 md:w-1/2 w-full px-4">
        <h2 class="title-font font-medium text-black-900 tracking-widest text-sm mb-3">FEATURES</h2>
        <nav class="list-none mb-10">
          <li>
            <a class="text-black-600 hover:text-black-800" href="viewteam.php">View Team</a>
          </li>
          <li>
            <a class="text-black-600 hover:text-black-800" href="scoreboard.php">Scoreboard</a>
          </li>
          <li>
            <a class="text-black-600 hover:text-black-800" href="gallery.php">Gallery</a>
          </li>
         
        </nav>
      </div>
     
     
  </div>
   
</body>
</html>