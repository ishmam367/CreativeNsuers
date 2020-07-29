<?php
	include ('../../config/config.php');

	session_start(); 

	  if (!isset($_SESSION['job_id'])) {
	   	
	  }

	  $job_id=$_SESSION['job_id'];

	  echo "$job_id";

?>