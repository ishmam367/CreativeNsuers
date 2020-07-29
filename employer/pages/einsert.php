<?php 
	include ('../../config/config.php'); 

	if (isset($_POST['name'])) {
      # code...
		$name=$_POST['name'];
    }

    if (isset($_POST['email'])) {
      # code...
		$email=$_POST['email'];
    }

    if (isset($_POST['password'])) {
      # code...
		$password=$_POST['password'];
    }
  //   if (isset($_POST['contactNo'])) {
  //     # code...
		// $contactNo=$_POST['contactNo'];
  //   }

    if (isset($_POST['phone'])) {
        # code...
        $phone=$_POST['phone'];
    }
    if (isset($_POST['location'])) {
        # code...
        $location=$_POST['location'];
    }
   
    
    if (isset($_POST['comments'])) {
        # code...
        $comments=$_POST['comments'];
    }

     //echo " I tested the location value, $location";

     

    $sql_value="INSERT INTO employer (e_name,e_email, e_pass,e_num,location,e_des) VALUES ('$name','$email','$password','$phone','$location','$comments')";

    if (mysqli_query($con,$sql_value)) {
    	# code...
    	header("Location: elogin.php");//need to update
    	die();
    }

    else{
    	echo "Try Again";
    }

    mysqli_close($con);

?>