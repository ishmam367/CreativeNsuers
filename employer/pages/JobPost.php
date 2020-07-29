<?php 
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


?>
<?php
  include ('../../config/config.php');

  $sqlq="SELECT * FROM skill";
  $result=mysqli_query($con, $sqlq);
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
                    <h1 class="page-header">Job Post</h1>
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
                            <form method="POST" action="jobpost_insert.php">
                                <input type="text" name="name" placeholder="job name"><br>
                              
                                <input type="text" name="salary" placeholder="salary"><br>
                                <input type="text" name="workhour" placeholder="working hours"><br>
                                <input type="text" name="description" placeholder="job description"><br>
                                <input type="text" name="location" placeholder="Company Location"><br>
                                <div class="labels">
          
          
                                <div class="input-tab">
                                  <select  id="dropdown" name="skill">
                                    <?php
                                      while ($row=mysqli_fetch_array($result)):;?>
                                        <option value="<?php echo $row["skill_name"] ?>"><?php echo $row["skill_name"] ?></option>

                                    <?php endwhile; ?>
                                  </select>
                                </div>
                                <br>
                                
                                 <button id="submit" type="submit">Submit</button>
                            </form>
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
