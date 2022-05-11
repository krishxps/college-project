<?php      
    include('config.php');  
    session_start();
    $Eid = $_POST['Eid'];  
    $Password = $_POST['Password'];  
      
      $sql = "SELECT * from player where Eid = '$Eid' and Password = '$Password'";  
        
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
         $_SESSION['P_id'] = $row["P_id"];
            header('location:homepage.php')  ;
            die();
            
        }  
        else{  
            echo "<h1> Login failed. Invalid Email or password.</h1> ";  
            header('location:login.php');
        }    

?>