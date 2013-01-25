<?php

include('../inc/dbConnect.php');

if (isset($_POST)){ 
	$r1 = $_POST['r1'];
	$r2 = $_POST['r2'];
	$r3 = $_POST['r3'];
	$r4 = $_POST['r4'];
	$year = date('Y');
	$points = array($r1, $r2, $r3, $r4); 
	$round = 0;
	foreach ($points as $point){
		$round++;

		$query = "SELECT * " . 
			       "FROM PointsPerRound " .
			       "WHERE " . 
			       "Round = '" . $round .  "' " .  
		    	   "AND Year = '" . $year . "' ";		
		 

		$results = mysql_query($query) or die(mysql_error());

		$num = mysql_num_rows($results);
  		
  		if($num >= 1) {
  			$query = "UPDATE PointsPerRound"
		   		   .  " SET"
			 	   .  " Points = '". $point ."'"
				   .  " WHERE "
				   .  "Round = '" . $round  
	  			   .  "' AND Year = '" . $year . "'";

  			$results = mysql_query($query) or die(mysql_error());	


  		}else{	

			$query = "INSERT INTO PointsPerRound"
			    	 . " (Year, Points, Round)" 
					 . " VALUES"
				     . " ('" . $year . "', '" . $point . "', '" . $round . "' )";
	 
			$results = mysql_query($query) or die(mysql_error());	
		
		}
	}
	echo "Database Updated.";

}else{

    die('Error: Invaild data');

}

?>