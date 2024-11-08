<?php 

	session_start();

	$_SESSION = array();

	if (isset($_COOKIE[session_name()])) {
		setcookie(session_name(), '', time()-86400, '/');
	}

	session_destroy();
	
	header('Location: login.php?action=logout');

 ?>



<!--   <?php
      session_start();
      if(isset($_SESSION["user"])){
          if(($_SESSION["user"])=="" or $_SESSION['usertype']!='a'){
              header("location: ../adminlogin.php");
          }
  
      }else{
          header("location: ../adminlogin.php");
      }
  include("../include/header_layout.php");

  //import database
  include("../include/config.php");
   ?>
 -->