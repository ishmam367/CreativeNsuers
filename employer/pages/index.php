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

  include ('../../config/config.php');

  $email= $_SESSION['e_email'];
  $sql_Query= "SELECT * FROM employer WHERE e_email='$email' ";
  $result = mysqli_query($con, $sql_Query);
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php include ('app.php'); ?>

 <link rel="stylesheet" type="text/css" href="css/estyle.css"/>

</head>

<body>

    

        <!-- Navigation -->
        <?php include ("header.php"); ?>

        <div class="page-wrapper">
            <h3>DashBoard</h3>
        </div>
        <br>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <?php  if (isset($_SESSION['e_email'])) : ?>
                        <p>Welcome <strong><?php echo $_SESSION['e_email']; ?></strong></p>
                            <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                        <?php endif ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <!--  -->
            <!-- /.row -->
               <div class="page-wrapper" style="margin: 24px; background-color: grey; height: 44%; width: 100%;">

                    <div class="row" style="height: 430px;">

                        <h1><b><font color="skyblue">Employer Profile: </font></b></h1>
                        

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
                                    <h4><b><font size="5px;" color="skyblue;">ID: </font> </b><?php echo $row["e_id"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Name : </font> </b><?php echo $row["e_name"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Email: </font> </b><?php echo $row["e_email"]; ?></h4>
                                    
            
                                    <h4><b><font size="5px;" color="skyblue;">Phone: </font> </b><?php echo $row["e_num"]; ?></h4>
                                    <h4><b><font size="5px;" color="skyblue;">Password: </font> </b><?php echo $row["e_pass"]; ?></h4>
                                     <h4><b><font size="5px;" color="skyblue;">Location:</font> </b> <?php echo $row["location"]; ?></h4>
                                     
                                       <h4><b><font size="5px;" color="skyblue;">Description: </font> </b><?php echo $row["e_des"]; ?></h4>
                                       <p>_____________________________________</p>

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
