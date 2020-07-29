
 <?php 
	include ('../../config/config.php'); 
   session_start(); 
  if (!isset($_SESSION['e_email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: elogin.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['e_email']);
    header("location: elogin.php");

  }

  $email= $_SESSION['e_email'];

  if (isset($_POST['email'])) {
    # code...
    $email=$_POST['email'];
  }
  if (isset($_POST['skill'])) {
      # code...
    $skill=$_POST['skill'];
    }
    

	if (isset($_POST['name'])) {
      # code...
		$name=$_POST['name'];
    }

    if (isset($_POST['salary'])) {
      # code...
		$salary=$_POST['salary'];
    }



    if (isset($_POST['workhour'])) {
      # code...
		$workhour=$_POST['workhour'];
    }
  //   if (isset($_POST['contactNo'])) {
  //     # code...
		// $contactNo=$_POST['contactNo'];
  //   }

    if (isset($_POST['description'])) {
        # code...
        $description=$_POST['description'];
    }
    if (isset($_POST['location'])) {
        # code...
        $location=$_POST['location'];
    }
    

    $sql_value="INSERT INTO job_post (employer_name,job_name,salary,working_hours,des,comp_location,skill) VALUES ('$email','$name','$salary','$workhour','$description','$location','$skill')";

    if (mysqli_query($con,$sql_value)) {
    	# code...
    	header("Location: JobPost.php");//need to update
    	die();
    }

    else{
    	echo "Try Again";
    }

    mysqli_close($con);

?>