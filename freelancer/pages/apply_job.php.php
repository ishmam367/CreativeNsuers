<?php
	include ('../../config/config.php');

	session_start(); 
	  if (!isset($_SESSION['f_email'])) {
	    $_SESSION['msg'] = "You must log in first";
	    header('location: flogin.php');
	  }
	  if (isset($_GET['logout'])) {
	    session_destroy();
	    unset($_SESSION['f_email']);
	    header("location: flogin.php");

	  }

	  $email= $_SESSION['f_email'];

	  //Value

	  if (isset($_POST['job_id'])) {
      # code...
		$job_id=$_POST['job_id'];
	    }

	    if (isset($_POST['employer_name'])) {
      # code...
		$employer_name=$_POST['employer_name'];
	    }

	    if (isset($_POST['job_name'])) {
      # code...
		$job_name=$_POST['job_name'];
	    }

	    if (isset($_POST['salary'])) {
      # code...
		$salary=$_POST['salary'];
	    }

	    if (isset($_POST['working_hours'])) {
      # code...
		$working_hours=$_POST['working_hours'];
	    }

	    if (isset($_POST['des'])) {
      # code...
		$des=$_POST['des'];
	    }

	    if (isset($_POST['comp_location'])) {
      # code...
		$des=$_POST['comp_location'];
	    }

	    if (isset($_POST['email'])) {
	      # code...
			$email=$_POST['email'];
	    }

    echo "$email";
    echo "<br>";
    echo "$salary";


    // $sql_value="INSERT INTO apply_job (job_id,employer_name,job_name,salary,working_hours,des,comp_location,applicant) VALUES ('$job_id','$employer_name','$job_name','$salary','$working_hours','$des','$comp_location','$email')";

    // if (mysqli_query($con,$sql_value)) {
    // 	# code...
    // 	header("Location: JobList.php");//need to update
    // 	die();
    // }

    // else{
    // 	echo "Try Again";
    // }

    // mysqli_close($con);

?>