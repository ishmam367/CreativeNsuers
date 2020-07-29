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

  include ('../../config/config.php');

  $email= $_SESSION['f_email'];
  $sql_Query= "SELECT * FROM job_post ";
  $result = mysqli_query($con, $sql_Query);


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
                            <table class="table table-striped">
                                <tr>
                                    <th>Job No</th>
                                    <th>Employer Email</th>
                                    <th>Job Name</th>
                                    <th>sallary</th>
                                    <th>Working Hours</th>
                                    <th>Description</th>
                                    <th>Location</th>
                                    <th>Details</th>
                                    

                                </tr>
                                <?php
                                    if (mysqli_num_rows($result)>0) {
                                        # code...
                                        while ($row=mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                    <td name="t"><?php echo $row["job_id"]; ?></td>
                                                    <td><?php echo $row["employer_name"];?></td>
                                                    <td><?php echo $row["job_name"]; ?></td>
                                                    <td><?php echo $row["salary"]; ?></td>
                                                    <td><?php echo $row["working_hours"]; ?></td>
                                                    <td><?php echo $row["des"]; ?></td>
                                                    <td><?php echo $row["comp_location"]; ?></td>
                                                    <td><a href='test.php?id=". $row['job_id'] ."' title='View Record' data-toggle='tooltip'><span class='glyphicon glyphicon-eye-open'></span></a>";</a></td>

                                                    <?php
                                                        
                                                            $_SESSION['job_id'] = $row["job_id"];
                                                         
                                                            
                                                          
                                                    ?>
                                            </tr>
                                            <?php

                                        }
                                        
                                    }
                                ?>
                                
                                <?php  ?>
                            </table>
                            <!-- /.table-responsive -->
                            
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
