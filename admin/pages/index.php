<?php
    include('../../config/config.php');

    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include ('app.php'); ?>

</head>

<body>
        <!-- Navigation -->
        <?php include ("header.php"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php 
                                          $count_drivier_result=mysqli_query($con,"SELECT COUNT(*) as total FROM freelancer");
                                          $data=mysqli_fetch_assoc($count_drivier_result); 
                                          echo $data['total']; ?> 
                                    </div>
                                    <div>Freelancer!</div>
                                </div>
                            </div>
                        </div>
                        <a href="freelancerlist.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-tasks fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php 
                                          $count_drivier_result=mysqli_query($con,"SELECT COUNT(*) as total FROM employer");
                                          $data=mysqli_fetch_assoc($count_drivier_result); 
                                          echo $data['total']; ?> 
                                    </div>
                                    <div>Employers!</div>
                                </div>
                            </div>
                        </div>
                        <a href="employerlist.php">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php 
                                          $count_drivier_result=mysqli_query($con,"SELECT COUNT(*) as total FROM job_post");
                                          $data=mysqli_fetch_assoc($count_drivier_result); 
                                          echo $data['total']; ?> 
                                    </div>
                                    <div>Job Post</div>
                                </div>
                            </div>
                        </div>
                        <a href="joblist.php">
                            <div class="panel-footer">
                                <span class="pull-left">View details!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">
                                        <?php 
                                          $count_drivier_result=mysqli_query($con,"SELECT COUNT(*) as total FROM skill");
                                          $data=mysqli_fetch_assoc($count_drivier_result); 
                                          echo $data['total']; ?> 
                                    </div>
                                    <div>Skills</div>
                                </div>
                            </div>
                        </div>
                        <a href="skilllist.php">
                            <div class="panel-footer">
                                <span class="pull-left">view details!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
