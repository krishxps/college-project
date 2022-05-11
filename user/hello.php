<?php
include('config.php');
$Eid = $_POST['Eid'];  
   $Password = intval($_POST['Password']); 

if(isset($_POST['Login']))
{
	$query="SELECT * FROM `player`  where Eid = '$Eid' and Password = '$Password'";
	$result=mysqli_query($conn,$query);

	if ($result) {
		if(mysqli_num_rows($result)==1)
		{
			
			$result_fetch=mysqli_fetch_assoc($result);
			if ($_POST['Password']) {
				$_SESSION['P_id']=$result_fetch['P_id'];
				header('location:homepage.php')  ;
			}
			else{
				echo "incorrt pass";
				}
		}
		else{
						 echo "<h1>  Invalid Emailor Password.</h1> ";
		}
	}
	else {
		 echo "<h1> Login failed. Invalid Email or Password.</h1> ";
	}
}

?>