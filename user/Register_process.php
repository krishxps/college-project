<?php 
include('config.php');
if(isset($_POST['insert']))
{
$user_name = $_POST['user_name'];
$Eid = $_POST['Eid'];
$Password = $_POST['Password'];
$duplicate=mysqli_query($con,"select * from player where Eid='$Eid'");
if (mysqli_num_rows($duplicate)>0)
{
header("Location: register.php?message=User name or Email id already exists.");
}
else{
try {
$con = new PDO("mysql:host=$host;dbname=$db_name", $Eid, $password);
$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO player (Eid,Password)
VALUES ('$email_id', '$user_name','$user_password','$insertdate')";
$conn->exec($sql);
header("Location: homepage.php?message=Thank you for register. Please login to continue.");
}
   catch(PDOException $e)
    {
          echo $sql . "
          " . $e->getMessage();
    }
$conn = null;
}
}
?>