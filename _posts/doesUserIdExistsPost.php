<?php
include('../inc/dbConnect.php');

if (isset($_POST['userid'])){ 
    
    $userName = $_POST['userid'];
    
    $query = "SELECT UserName " 
    	   . "FROM Users "
    	   . "WHERE UserName='" . $userName . "'"; 

    $results = mysql_query($query) or die(mysql_error());
    $num_rows = mysql_num_rows($results);

    if ( $num_rows > 0 ){
    	echo '1';
    }else{ 
    	echo '0';
    }
}


?>