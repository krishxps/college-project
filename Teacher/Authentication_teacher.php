<?php      
    include('config.php');  
    session_start();
    $Eid = $_POST['Eid'];  
    $Password = $_POST['Password'];  
      
      $sql = "select *from teacher where Eid = '$Eid' and Password = '$Password'";  
        
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
         $_SESSION['User_Id'] = $row["User_Id"];
            header('location:index.php')  ;
            die();
            
        }  
        else{  
            echo "<h1> Login failed. Invalid Email or password.</h1> ";  
            header('location:Teacher_login.php');
        }    
?>