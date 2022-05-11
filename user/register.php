<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <header class="text-black-600 body-font" style="background-color: #f2ff00;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><a href="home.php">Sports EYE</a></span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-gray-900" href="home.php">Home</a>
            <a class="mr-5 hover:text-gray-900" href="about.php">About</a>
            <a class="mr-5 hover:text-gray-900" href="register.php">Register</a>
            <a class="mr-5 hover:text-gray-900" href="contactus.php">Contact Us</a>
          </nav>
          <button class="inline-flex items-center bg-gray-100 border-0 py-1 px-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-4 md:mt-0"><a href="login.php">Login</a>
            <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
              <path d="M5 12h14M12 5l7 7-7 7"></path>
            </svg>
          </button>
        </div>
      </header>
      <hr>
      <form action="<?php $_PHP_SELF ?>" method="post">
      <section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap items-center">
    <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0">
      <h1 class="title-font font-medium text-3xl text-gray-900">Register to get the experience of Sports EYE </h1>
      <p class="leading-relaxed mt-4">If you are a sports fan it will be worth it to register here and participate in games.</p>
    </div>

    <div class="lg:w-2/6 md:w-1/2 bg-gray-100 rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0">
      <h2 class="text-gray-900 text-lg font-medium title-font mb-5">Sign Up</h2>
      <div class="relative mb-4">
        <label for="Fname" class="leading-7 text-sm text-gray-600">First Name</label>
        <input type="text" id="Fname" name="Fname" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>
      <div class="relative mb-4">
        <label for="Mname" class="leading-7 text-sm text-gray-600">Middle Name</label>
        <input type="text" id="Mname" name="Mname" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>

      <div class="relative mb-4">
        <label for="Lname" class="leading-7 text-sm text-gray-600">Last Name</label>
        <input type="text" id="Lname" name="Lname" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>

      <table>
                  <tr>
                    
       <td> <div class="relative mb-4">
       <label for="Gender" class="leading-7 text-sm text-gray-600">Gender</label><div class="form-group">
       <div class="custom-control custom-radio">
       <input class="custom-control-input" type="radio" id="customRadio1" name="Gender" value="Male">
       <label for="customRadio1" class="custom-control-label">Male</label>
       </div></div>
       <div class="form-group">
       <div class="custom-control custom-radio">
       <input class="custom-control-input" type="radio" id="customRadio2" name="Gender" value="Female">
       <label for="customRadio2" class="custom-control-label">Female</label>
       </div></div></td></tr>
       </table>
      
      <div class="relative mb-4">
        <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
        <input type="email" id="Eid" name="Eid" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" required>
      </div>
      <div class="relative mb-4">
        <label for="Password" class="leading-7 text-sm text-gray-600">Password</label>
        <input type="password" id="Password" name="Password" class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" minlength="6" maxlength="20" required>
      </div>
      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="insert">Register</button>
      <p class="text-xs text-gray-500 mt-3">Register here to get experience the Sports EYE.</p>
    </div>
  </div>
  <?php
if(isset($_POST['insert']))
{
  $conn = mysqli_connect("localhost","root","");
  if($conn)
  {
    
    $conn = mysqli_connect("localhost","root","");

if (!$conn) {
    error_log("Failed to connect to MySQL: " . mysqli_error($connection));
    die('Internal server error');
}
$db_select = mysqli_select_db($conn,'project');
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($connection));
    die('Internal server error');
}
    
    $Fname = strval($_POST['Fname']);
    $Mname = strval($_POST['Mname']);
    $Lname = strval($_POST['Lname']);
    $Gender = strval($_POST['Gender']);
    $Eid = strval($_POST['Eid']);
    $Password = strval($_POST['Password']);

    $check_duplicate_email = "SELECT Eid from player WHERE Eid = '$Eid' ";
    $result = mysqli_query($conn, $check_duplicate_email);
    $count = mysqli_num_rows($result);
    if ($count > 0)
    {
      ?> <script type="text/javascript">
        alert("Email already exists!!!");
      </script>        <?php  
    }
   
   else
   {
    $insert = "INSERT INTO `player` (`Password`, `Fname`, `Mname`, `Lname`,`Gender`, `Eid`) values('$Password','$Fname','$Mname','$Lname','$Gender','$Eid')";
    if ($conn->query($insert) === TRUE) 
    {
      ?> <script type="text/javascript">
        alert("Thanks for registering!!!");
      </script>        <?php
    } 
  else 
  {
  echo "Error: " . $insert . "<br>" . $conn->error;
  }
  }
    mysqli_close($conn);

  }
}
?>
</section>
</form>
<hr>
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            
            <span class="ml-3 text-xl">Sports Eye</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Sports —
            <a href="home.php" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@SportsEye</a>
          </p>
         
        </div>
      </footer>
</body>
</html>