<?php 
 
  include ('../../config/config.php');

 
  $sql_Query= "SELECT * FROM freelancer ";
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
                    <h1 class="page-header">Freelancer List</h1>
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
                                    <th>Freelancer No</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Password</th>
                                    <th>Contact No</th>
                                    <th>Age</th>
                                    <th>Skill</th>
                                    <th>Expertise</th>
                                    <th>Rate</th>
                                    <th>History</th>
                                    <th>Description</th>
                                    

                                </tr>
                                <?php
                                    if (mysqli_num_rows($result)>0) {
                                        # code...
                                        while ($row=mysqli_fetch_array($result)) {
                                        ?>
                                            <tr>
                                                    <td><?php echo $row["f_id"]; ?></td>
                                                    <td><?php echo $row["f_name"];?></td>
                                                    <td><?php echo $row["f_email"]; ?></td>
                                                    <td><?php echo $row["f_pass"]; ?></td>
                                                    <td><?php echo $row["f_contact_no"]; ?></td>
                                                    <td><?php echo $row["age"]; ?></td>
                                                    <td><?php echo $row["skill"]; ?></td>
                                                    <td><?php echo $row["expertise"]; ?></td>
                                                    <td><?php echo $row["rate"]; ?></td>
                                                    <td><?php echo $row["history"]; ?></td>
                                                    <td><?php echo $row["des"]; ?></td>
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
