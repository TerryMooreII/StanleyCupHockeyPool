<?php

	//session_unset( $_SESSION['userIdNumber'] );
	//session_unset( $_SESSION['userName'] );
	//session_unset( $_SESSION['fullName'] );
   	//session_unset( $_SESSION['isAdmin'] );
   	session_start();
   	session_unset();
   	session_destroy();

   	header('Location: ../login.php');
   ?>