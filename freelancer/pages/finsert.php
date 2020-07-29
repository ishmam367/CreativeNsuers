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
    if (isset($_POST['age'])) {
        # code...
        $age=$_POST['age'];
    }
    if (isset($_POST['skill'])) {
        # code...
        $skill=$_POST['skill'];
    }
    if (isset($_POST['expertise'])) {
        # code...
        $expertise=$_POST['expertise'];
    }
    if (isset($_POST['rate'])) {
        # code...
        $rate=$_POST['rate'];
    }
    if (isset($_POST['history'])) {
        # code...
        $history=$_POST['history'];
    }
    if (isset($_POST['comments'])) {
        # code...
        $comments=$_POST['comments'];
    }

    $sql_value="INSERT INTO freelancer (f_name,f_email, f_pass,f_contact_no,age,skill,expertise,rate,history,des) VALUES ('$name','$email','$password','$phone','$age','$skill','$expertise','$rate','$history','$comments')";

    if (mysqli_query($con,$sql_value)) {
    	# code...
    	header("Location: flogin.php");//need to update
    	die();
    }

    else{
    	echo "Try Again";
    }

    mysqli_close($con);

?>