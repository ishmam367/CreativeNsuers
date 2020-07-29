 
 
  



<?php 
	
 include ('../../config/config.php'); 

  if (isset($_POST['skill_name'])) {
    # code...
    $skill_name=$_POST['skill_name'];
  }
    

	
    

    $sql_value="INSERT INTO skill (skill_name) VALUES ('$skill_name')";

    if (mysqli_query($con,$sql_value)) {
    	# code...
    	header("Location: skilllist.php");//need to update
    	die();
    }

    else{
    	echo "Try Again";
    }

    mysqli_close($con);

?>