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
    <title>Registration</title>
</head>
<body>
    <header class="text-black-600 body-font" style="background-color: #f2ff00;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><a href="homepage.php">Sports EYE</a></span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
            <a class="mr-5 hover:text-black-900" href="gallery.php">Gallery</a>
            <a class="mr-5 hover:text-black-900" href="aboutus1.php">About</a>
            <a class="mr-5 hover:text-black-900" href="viewteam.php">View Team</a>
            <a class="mr-5 hover:text-black-900" href="scoreboard.php">Scoreboard</a>
            <a class="mr-5 hover:text-black-900" href="registration.php">Registration</a>
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
        <form method="post" action="<?php $_PHP_SELF ?>">
  <div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-12">
      <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Registration</h1>
      <p class="lg:w-2/3 mx-auto leading-relaxed text-base">Select the sports you are interested and want to participate!!!</p>
    </div>
    <div class="flex lg:w-2/3 w-full sm:flex-row flex-col mx-auto px-8 sm:space-x-4 sm:space-y-0 space-y-4 sm:px-0 items-end">
      
      <label for="Sport">Choose a sport:</label>
<select name="Sport" id="Sport">
    <option value="Cricket">Cricket</option>
  <option value="Football">Football</option>
  <option value="Basketball">Basketball</option>
</select>
      <button class="text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="insert">Register</button>
    </div>
  </div>
    
<?php
if(isset($_POST['insert']))
{
  $con = mysqli_connect("localhost","root","");
  if($con)
  {
    
    $con = mysqli_connect("localhost","root","");

if (!$con) {
    error_log("Failed to connect to MySQL: " . mysqli_error($con));
    die('Internal server error');
}
$db_select = mysqli_select_db($con,'project');
if (!$db_select) {
    error_log("Database selection failed: " . mysqli_error($con));
    die('Internal server error');
}
  
  $Sport = strval($_POST['Sport']);

  /* $dup= mysqli_query($con, "SELECT * from sports WHERE sport='$sport' ");
  if(mysqli_num_rows($dup)>0)
{
  ?> <script type="text/javascript">
  alert("Already Registered!!!");
</script>        <?php
else 
{ */
}
      $insert = "INSERT INTO `sports` (`P_id`,`Sport`) values('$_SESSION[P_id]', '$Sport')";

    if ($con->query($insert) === TRUE) {
  ?> <script type="text/javascript">
        alert("Registered!!!");
      </script>        <?php
} else {
  echo "Error: " . $insert . "<br>" . $con->error;
  ?> <script type="text/javascript">
        alert("Not Registered");
      </script>        <?php
}

    mysqli_close($con);

  }
?>
  </form>
</section>
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
    </body>
    </html>