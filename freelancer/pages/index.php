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
  $sql_Query= "SELECT * FROM freelancer WHERE f_email='$email' ";
  $result = mysqli_query($con, $sql_Query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include ('app.php'); ?>

    <link rel="stylesheet" type="text/css" href="css/style.css"/>


</head>

<body>
         
    

        <!-- Navigation -->
        <?php include ("header.php"); ?>

        <div id="page-wrapper">
            <div class="row">
                <div class="container">
                    <h4>DashBoard</h4>
                </div>
                <br>
                <div class="col-lg-12">
                    <?php  if (isset($_SESSION['f_email'])) : ?>
                        <p>Welcome <strong><?php echo $_SESSION['f_email']; ?></strong></p>
                            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                        <?php endif ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!-- <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-comments fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">26</div>
                                    <div>Freelancer!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
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
                                    <div class="huge">12</div>
                                    <div>Employers!</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
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
                                    <div class="huge">124</div>
                                    <div>Job Post</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
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
                                    <div class="huge">13</div>
                                    <div>Skills</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">view details!</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div> -->
            <!-- /.row -->
               <div class="page-wrapper" style="margin: 24px; background-color: grey; height: 100%; width: 100%; " >

                    <div class="row" style="height: 430px;" >
                        <h1><b><font color="skyblue">Freelancer Profile: </font></b></h1>

                         <div class="upload">
  
                        
                           <h2>Upload a picture </h2>

                           <canvas id="canvasId"></canvas>
                           <p>Load Image
                           <p><input type="file" multiple="false" onchange="loadImg()" id="loadImgId" accept="image/*"></p>

                        </div>


                        
                        <?php
                            if (mysqli_num_rows($result) > 0) 
                            {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                ?>  
                                    <p>_____________________________________</p>
                                    <h4><b><font size="5px;" color="skyblue;"> <h4>  </h4>ID:</font> </b> <?php echo $row["f_id"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">  Name : </font> </b><?php echo $row["f_name"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">  Email: </font> </b><?php echo $row["f_email"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Age:</font> </b> <?php echo $row["age"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Skill: </font> </b><?php echo $row["skill"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Expertise:</font> </b> <?php echo $row["expertise"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Phone: </font> </b><?php echo $row["f_contact_no"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Password: </font> </b><?php echo $row["f_pass"]; ?></h4>
                                     <h4><b><font size="5px;" color="skyblue;">Rate: </font> </b><?php echo $row["rate"]; ?></h4>
                                      <h4><b><font size="5px;" color="skyblue;">Job History: </font> </b><?php echo $row["history"]; ?></h4>
                                       <h4><b><font size="5px;" color="skyblue;">Description:</font> </b> <?php echo $row["des"]; ?></h4>
                                    <p>_____________________________________</p>
                                    <p>   </p>
                                     <p>   </p>
                                     <p>   </p>
                                     <p>   </p>
                                <?php
                                }
                            }
                        ?>
                    <!-- <h4>Docotor Name: <?php echo $value->doctor_name; ?></h4>
                    <h4>Doctor Email:</h4>
                    <h4>Doctor Phone:</h4>
                    <h4>Doctor Password:</h4> -->





<footer class="footer">
  <div class="footer-left col-md-4 col-sm-6">
    <p class="about">
      <span> About the Website</span> “NSU CREATIVE COMMUNITY” 
is a website for the NSU 
students who does creative works(like-musician, photographer, developer, graphic designer) or who wants to become a freelancer and looking for a local area or platform to showcase their works.

    </p>
    <div class="icons">
      <a href="#"><img src="img/fb.PNG" height="35px" width="35px"></a>
      <a href="#"><img src="img/tw.PNG" height="35px" width="35px"></a>
      
      <a href="#"><img src="img/link.PNG" height="35px" width="35px"></a>
      <a href="#"><img src="img/goo.PNG" height="35px" width="35px"></a>
    </div>
  </div>
  <div class="footer-center col-md-4 col-sm-6">
    <div>
      <i class="fa fa-map-marker"></i>
      <p> Dhaka, Bangladesh</p>
    </div>
    <div>
      <i class="fa fa-phone"></i>
      <p> Call us at : (+880) 018 3118 5187</p>
    </div>
    <div>
      <i class="fa fa-envelope"></i>
      <p>Not a big talker ? email us at </><a href="#"> nsucc@gmail.com</a></p>
    </div>
  </div>
  <div class="footer-right col-md-4 col-sm-6">
    <h2> NSU CREATIVE COMMUNITY</h2>
    <p class="menu">
      <a href="#"> Home</a> |
      <a href="#"> About</a> |
      <a href="#"> Services</a> |
      <a href="#"> News</a> |
      <a href="#"> Contact</a>
    </p>
    <p class="name"> &copy;2018 NSU CREATIVE COMMUNITY - All Rights Reserved</p>
  </div>  
</footer>




</div>
    

</body>
</html>




                </div>
                </div>
            
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
