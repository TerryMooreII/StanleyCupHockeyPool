<?php
session_start();
include('../inc/dbConnect.php');


if (isset($_POST['total']) && isset($_SESSION['userIdNumber'])){
  
  $year = date("Y");
  $userNameId = $_SESSION['userIdNumber'];
  $goals = $_POST['total'];
  $table = $_POST['query'];

	if ( $table == 'picks'){
		if ( checkIfalreadyPicked($userNameId, $goals) ){
			echo "This point was already selected.";
			return;
		}

		$selectP = "SELECT * " . 
			       "FROM StanleyCupGoalsPick " .
			       "WHERE " . 
			       "User = '" . $userNameId .  "' " .  
		    	   "AND Year = '" . $year . "' ";

		$insertP = "INSERT INTO StanleyCupGoalsPick"
		    	 . " (Year, NumberOfGoals, User)" 
				 . " VALUES"
			     . " ('" . $year . "', '" . $goals . "', '" . $userNameId . "' )";
 
		$updateP = "UPDATE StanleyCupGoalsPick"
	   		   .  " SET"
		 	   .  " NumberOfGoals = '". $goals ."'"
			   .  " WHERE "
			   .  "User = '" . $userNameId  
  			   .  "' AND Year = '" . $year . "'";

	}else{
		$selectW = "SELECT * " . 
			      "FROM StanleyCupGoalsWin " .
			      "WHERE " .   
		    	  "Year = '" . $year . "'";

		$insertW = "INSERT INTO StanleyCupGoalsWin"
		 	   . " (Year, NumberOfGoals)" 
  		   	   . " VALUES"
		   	   . " ('" . $year . "', '" . $goals . "' )";

		$updateW = "UPDATE StanleyCupGoalsWin"
			    .  " SET"
			    .  " NumberOfGoals = '". $goals ."'"
			    .  " WHERE " 
			    .  "Year = '" . $year . "'";
	}

  if ( $table == 'picks'){
  	  $results = mysql_query($selectP) or die(mysql_error());
  }else{
  	  $results = mysql_query($selectW) or die(mysql_error());
  }


  $num = mysql_num_rows($results);
  if($num >= 1) {
  	
	  if ( $table == 'picks'){
	  	  $results = mysql_query($updateP) or die(mysql_error());
	  }else{
	  	  $results = mysql_query($updateW) or die(mysql_error());
	  }

  }else{
      if ( $table == 'picks'){
    	  	$results = mysql_query($insertP) or die(mysql_error());
       }else{
    	  	$results = mysql_query($insertW) or die(mysql_error());
       }  
  }
 
  echo "Database Updated";
}else{

    die('Error: Invaild data');

}

function checkIfalreadyPicked($userIdNumber, $points){
	$year = date("Y");
	$select = "SELECT NumberOfGoals " . 
			       "FROM StanleyCupGoalsPick " .
			       "WHERE " . 
			        "NumberOfGoals = '" . $points .  "' " .  
		    	   "AND Year = '" . $year . "' ";

    $results = mysql_query($select) or die(mysql_error());


  $num = mysql_num_rows($results);
  if($num >= 1) 
  	return true;
  else
  	return false;
}


?>