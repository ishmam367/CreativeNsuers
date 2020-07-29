<?php 
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


?>

<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "../../config/config.php";
    
    // Prepare a select statement
    $sql = "SELECT * FROM job_post WHERE job_id = ?";
    
    if($stmt = mysqli_prepare($con, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set
                contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
                $name = $row["job_id"];
                $address = $row["comp_location"];
                $salary = $row["salary"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                // header("location: error.php");
                // exit();
                mysql_error();
            }
            
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($con);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    // header("location: error.php");
    // exit();
    mysqli_error();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
   <?php include("app.php");?> 

   
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include ("header.php"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Job List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <form action="apply_job.php" method="POST">
                                <h3>Job Number: </h3><input type="text" name="job_id" value="<?php echo $row["job_id"] ?>" readonly>
                                <h3>Employer Email:</h3><input name="employer_name" value="<?php echo $row["employer_name"] ?>" readonly>
                                <h3>Job Name:</h3><input name="job_name" value="<?php echo $row["job_name"] ?>" readonly>
                                <h3>Sallary:</h3><input name="salary" value="<?php echo $row["salary"] ?>" readonly>
                                <h3>Working Hours:</h3><input name="working_hours" value="<?php echo $row["working_hours"] ?>" readonly>
                                <h3>Description:</h3><input name="des" value="<?php echo $row["des"] ?>" readonly>
                                <h3>Location:</h3><input name="comp_location" value="<?php echo $row["comp_location"] ?>" readonly>
<br><br>
                                <input type="submit" name="Apply">
                                <a href="JobList.php">Back to Job List</a>
                            </form>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>
