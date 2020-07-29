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

  // include ('../../config/config.php');

  $email= $_SESSION['f_email'];
  // $sql_Query= "SELECT * FROM job_post ";
  // $result = mysqli_query($con, $sql_Query);


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
                            <?php
                    // Include config file
                    require_once "../../config/config.php";
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM job_post";
                    if($result = mysqli_query($con, $sql)){
                        if(mysqli_num_rows($result) > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>Sl No.</th>";
                                        echo "<th>Employer Email</th>";
                                        echo "<th>Job Name</th>";
                                        echo "<th>Salary</th>";
                                        echo "<th>Working Hours</th>";
                                        echo "<th>Description</th>";
                                        echo "<th>Company Location</th>";
                                        echo "<th>Action</th>";
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = mysqli_fetch_array($result)){
                                    echo "<tr>";
                                        echo "<td>" . $row['job_id'] . "</td>";
                                        echo "<td>" . $row['employer_name'] . "</td>";
                                        echo "<td>" . $row['job_name'] . "</td>";
                                        echo "<td>" . $row['salary'] . "</td>";
                                        echo "<td>" . $row['working_hours'] . "</td>";
                                        echo "<td>" . $row['des'] . "</td>";
                                        echo "<td>" . $row['comp_location'] . "</td>";
                                        echo "<td>";
                                            echo "<a href='apply.php?id=". $row['job_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";
                                            
                                        echo "</td>";
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            mysqli_free_result($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                    }
 
                    // Close connection
                    mysqli_close($con);
                    ?>
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
