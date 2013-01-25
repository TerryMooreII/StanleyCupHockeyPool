<?php
session_start();
include('../inc/dbConnect.php');
if (isset($_POST)){ 
    if ( isset($_POST['userName']) && isset($_POST['password']) ){
	    $userName = $_POST['userName'];
	    $password = $_POST['password'];
	}else{
	 	echo "1";
	 	return;
	}
    
    $query = "SELECT id, UserName, password, FullName, isAdmin " 
    	   . "FROM Users "
    	   . "WHERE UserName='" . $userName . "'"
    	   . "AND password='" . $password . "'"
    	   . "LIMIT 1"; 

    $results = mysql_query($query) or die(mysql_error());
    $num_rows = mysql_num_rows($results);

    if ( $num_rows > 0 ){
    	$userInfo = mysql_fetch_array($results);
    	$_SESSION['userIdNumber'] = $userInfo['id'];
    	$_SESSION['userName'] = $userInfo['UserName'];
    	$_SESSION['fullName'] = $userInfo['FullName'];
        if ($userInfo['isAdmin'] == 'TRUE'){
            $_SESSION['isAdmin'] = "TRUE";
        }
        //header('Location: viewStandings.php');
    	echo "0";	
    }else{
    	echo "2";
    }
    return;

}else{

    die('Error: Invalid data');

}

?>