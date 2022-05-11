<?php include("config.php");
if(!isset($_SESSION['P_id'])){
      header("location:login.php");
      die();
   }?>
<?php/*
      include('config.php');
      $message_sent = false;
      if (isset($_POST['Eid']) &&  $_POST['Eid'] != '') {

        if ( filter_var($_POST['Eid'], FILTER_VALIDATE_EMAIL)) {
          
          
        $userName = $_POST['Name'];
        $userEmail = $_POST['Eid'];
        $message = $_POST['Message'];

        $to = "projectsmsfc@gmail.com";
        $body ="";

        $body .= "From: ".$userName. "\r\n";
        $body .= "Eid: ".$userEmail. "\r\n";
        $body .= "Message: ".$message. "\r\n";
        
        //mail($to,$message,$body);

        $message_sent = true;
      }
      else {
        $invalid_class_name = "form-invalid";
      }
      }*/
?>
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
    <header class="text-gray-black body-font" style="background-color: #f2ff00;">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>
            <span class="ml-3 text-xl"><a href="homepage.php">Sports Eye</a></span>
          </a>
          <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
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
      <section class="text-black-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-col text-center w-full mb-12">
            <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Feedback</h1>
            <p class="lg:w-2/3 mx-auto leading-relaxed text-base">You can give your precious feedback here!!!</p>
          </div>
          <?php /*
          if ($message_sent): {
            
          }
          ?>
          <h3>Thanks</h3>
          <?php 
          else:*/
          ?>
           <form id="quickForm" action="<?php $_PHP_SELF ?>" method="post">
          <div class="lg:w-1/2 md:w-2/3 mx-auto">
            <div class="flex flex-wrap -m-2">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="name" class="leading-7 text-sm text-black-600">Name</label>
                  <input type="text" id="name" name="Name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-black-600">Email</label>
                  <input type="email" id="email" name="Eid" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-full">
                <div class="relative">
                  <label for="message" class="leading-7 text-sm text-black-600" name="Message">Message</label>
                  <textarea id="message" name="Message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
              </div>
              <div class="p-2 w-full">
                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg" name="insert1">Submit</button>
              </div></form>
              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                <a class="text-indigo-500">projectsmsfc@email.com</a>
                <p class="leading-normal my-5">Sports EYE
                  <br>
                </p>
                <span class="inline-flex">
                  <a class="text-black-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-4 text-black-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="ml-4 text-black-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-4 text-black-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <hr>
      <footer class="text-gray-600 body-font">
        <div class="container px-5 py-8 mx-auto flex items-center sm:flex-row flex-col">
          <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
            
            <span class="ml-3 text-xl">Sports Eye</span>
          </a>
          <p class="text-sm text-gray-500 sm:ml-4 sm:pl-4 sm:border-l-2 sm:border-gray-200 sm:py-2 sm:mt-0 mt-4">© 2022 Sports —
            <a href="homepage.php" class="text-gray-600 ml-1" rel="noopener noreferrer" target="_blank">@SportsEye</a>
          </p>
         
        </div>
      </footer>
      <!-- jquery-validation -->
      <script src="Admin/plugins/jquery-validation/jquery.validate.min.js"></script>
      <script src="Admin/plugins/jquery-validation/additional-methods.min.js"></script>

      <?php
      if(isset($_POST['insert1']))
{
    
 $Name = $_POST['Name'];
 $Eid = $_POST['Eid'];
 $Message = $_POST['Message'];
 $insert = "INSERT INTO `feedback`(`Name`, `Eid`, `Message`) VALUES ('$Name','$Eid','$Message')";

      
 if ($con->query($insert) === TRUE) 
 {
  ?> <script type="text/javascript">
  alert("Thanks For Your Feedback!!!");
</script>        <?php   
} else {
echo "Error: " . $insert . "<br>" . $con->error;
}
mysqli_close($con);

}
?>

</body>
</html>