<?php
  
include('../inc/dbConnect.php');

if (isset($_POST)){ 
    $fullName = $_POST['fullName'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    $isAdmin = $_POST['isAdmin'];
    $emailAddress = $_POST['emailAddress'];


	 if ($_POST['a'] == "d"){
	    $id = $_POST['id'];

	    $query = "DELETE FROM Users WHERE id = '" . $id ."'";
	    
	    $results = mysql_query($query) or die(mysql_error());
	    echo "User Deleted.";

	 }elseif ($_POST['a'] == "u"){
	    $id = $_POST['id'];

	    //need to set the rest of this form!!!
	
	    $query = "UPDATE Users"
		. " SET"
		. " UserName = '" . $userName . "'"
		. ", FullName = '" . $fullName  ."'"
		. ", password = '" . $password  
		. "', EmailAddress = '" . $emailAddress 
		. "', isAdmin = '" . $isAdmin . "' WHERE "
		. " id = '" . $id ."'";
	
	    //echo $query;
	    $results = mysql_query($query) or die(mysql_error());
	    echo "User Updated.";
	 
	  } elseif ($_POST['a'] == "i"){

	    $query = "INSERT INTO Users"
		  . " (UserName, FullName, EmailAddress, password, isAdmin)" 
		  . " VALUES"
		  . " ('" . $userName . "', '" . $fullName . "', '" . $emailAddress. "', '" . $password . "', '" . $isAdmin. "')";
	    $results = mysql_query($query) or die(mysql_error());
	    echo "User Created.";  

	 }

}else{

    die('Error: Invalid data');

}

?>