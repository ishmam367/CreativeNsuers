<?php 
   if($_GET["name"]==admin && $_GET["password"]==123456)
   {
      header("Location: pages/index.php");
      die();
   }

   else
   {
      header("Location: http://www.google.com");
      die();
   }
?>