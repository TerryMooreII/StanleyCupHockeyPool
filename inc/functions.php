<?php

	//Shows the teams that the user picked to win
  	function ShowPick( $round ){
  		 $userIdNumber = $_SESSION['userIdNumber'];
  		 $year = date("Y");
  		 
  		 $query = "SELECT * FROM Picks WHERE round = '" . $round 
  		 					  . "' AND user = '" . $userIdNumber
							  . "' AND year = '" . $year . "'";
		
		$results = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
		    $team = $row['pick'];
	  		$num_rows = mysql_num_rows($results);
		  	if ($num_rows > 0 ) {
			  	$query = "SELECT id, name FROM teams where id='" . $team . "' LIMIT 1";
			  	$results = mysql_query($query) or die(mysql_error());
				$row = mysql_fetch_array($results,  MYSQL_ASSOC);
				$id = $row['id'];
				$rank = getRankByTeamId($id);
		
				if ( $rank != "" ){
					echo "<strong>" . $rank . ". </strong>";
				}
				if ($id != ""){
					echo "<img src=\"imgs/teamsSmall/" . $row['id'] . ".png \" />";
					echo $row['name'];
				}	
			} 	   
		}
	}

	//Get Teams for User Picks
    function GetTeams( $round ){
	  
	  $year = date("Y");
	  $query = "SELECT * FROM Brackets WHERE round = '" . $round 
			 . "' AND year = '" . $year . "'";
	  $results = mysql_query($query) or die(mysql_error());
	  while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
	    $team = $row['team'];
  		$num_rows = mysql_num_rows($results);
	  	if ($num_rows > 0 ) {
		  	$query = "SELECT id, name FROM teams where id='" . $team . "' LIMIT 1";
		  	$results = mysql_query($query) or die(mysql_error());
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			$id = $row['id'];
			$rank = getRankByTeamId($id);
			
			if ( $rank != "" ){
				echo "<strong>" . $rank . ". </strong>";
			}

			echo "<img class=\"bracketImg\" src=\"imgs/teamsSmall/" . $id . ".png \" />";
			echo $row['name'];
		} 	   
	  }
    }

    function getRankByTeamId($id){
		$year = date("Y");
		$query = "SELECT Rank FROM Rank WHERE Team = '" . $id 
				. "' AND year = '" . $year . "'";
		$results = mysql_query($query) or die(mysql_error());
		$num_rows = mysql_num_rows($results);
		if ($num_rows > 0 ) {
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			return $row['Rank'];
		}else{
			return "";
		}
    }


    //Get Teams for Drop down lists.
    function GetTeamsDropDown($conference, $round){

		$year = date("Y");

		//this check to see if the round is len of 5 or 6  so 
		//we know whether to query the winners table or brakets table.
		//I didnt want to add at 3rd parameter to the function at this time
		if (strlen($round) == 5){
			$query = "SELECT * FROM RoundWinningTeam WHERE round = '" . $round 
				 . "' AND year = '" . $year . "'";	
			$results = mysql_query($query) or die(mysql_error());
		
			while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
				$team = $row['Winner'];
			}
		}else{
			$query = "SELECT * FROM Brackets WHERE round = '" . $round 
				 . "' AND year = '" . $year . "'";
			$results = mysql_query($query) or die(mysql_error());
		
			while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
				$team = $row['team'];
			}
		}
		

		if ($conference == 'StanleyCup'){
			$query = "SELECT * FROM teams order by name";
		}else{
			$query = "SELECT * FROM teams where conference = '" . $conference . "' order by name";
		}
		$results = mysql_query($query) or die(mysql_error());
		echo "<select name='". $round . "' id='".$round ."'>";
		echo "<option></option>";
		while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
		    if (intval($team) == $row['id']) {
		      ?>
		      <option SELECTED value="<?php echo $row['id']; ?>" ><?php echo $row['name']; ?></option>
		  	<?php
		    }else{
		      ?>
		      <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
		      <?php
		    } ?>
		
		<?php 
		}
	    echo "</select>";	
    }
	
    function ShowTeamsBrackets($conference, $round){

		$year = date("Y");

		$query = "SELECT team FROM Brackets WHERE round = '" . $round 
				 . "' AND year = '" . $year . "'";
		$results = mysql_query($query) or die(mysql_error());
		
		$row = mysql_fetch_array($results,  MYSQL_ASSOC);
		$team = $row['team'];
		
		$query = "SELECT id, name " .
				 "FROM teams " .
				 "WHERE id = '" . $team ."'";

		$results = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($results,  MYSQL_ASSOC);
		$num_rows = mysql_num_rows($results);
		if ( $num_rows > 0 ){
			$id = $row['id'];
			$rank = getRankByTeamId($id);
			
			if ( $rank != "" ){
				echo "<strong>" . $rank . ". </strong>";
			}
			echo "<img class=\"bracketImg\" src=\"imgs/teamsSmall/" . $row['id'] . ".png \" />";
			echo $row['name'];
		}else{
			echo "";
		}
    }

    //query database and return scores
    //return array of scores
    /*
    	getPoints per round

    	@param $id = Users Id 
    	@round = 1, 2, 3, or 4
    */
    function getUsersCorrectPicksPerRound($id, $round){
    	$num_rows = 0;
    	$year = date("Y");
		$query = "SELECT Picks.pick " . 
				 "FROM Picks " .
				 "INNER JOIN RoundWinningTeam " .
				 "On Picks.Year=RoundWinningTeam.Year " . 
				 "AND Picks.round=RoundWinningTeam.round " . 
				 "AND Picks.pick=RoundWinningTeam.winner " .
				 "WHERE " .
				 "Picks.year = '" . $year . "'" .
				 "AND Picks.user = '" . $id . "'" .
				 "AND Picks.round LIKE '%R" . $round . "%'";
				  
		$results = mysql_query($query) or die(mysql_error("ERROR"));
		$num_rows = mysql_num_rows($results);
    	return $num_rows;

    }

	function getPointsPerRound($round){
    	$year = date("Y");	
		$query =  "SELECT Points " . 
			      "FROM PointsPerRound " .
			      "WHERE " .   
		    	  "Year = '" . $year . "' " . 
		    	  "AND Round = '" . $round . "'";

		$results = mysql_query($query) or die(mysql_error("ERROR"));
		$num_rows = mysql_num_rows($results);

		if ( $num_rows > 0 ) {
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			return intval($row['Points']);
		}
		return 0;
	}


    //Returns array of points per round
    //Array ( [1] => 2 [2] => 4 [3] => 6 [4] => 8 )
    function getPointsPerRoundArray(){
    	$year = date("Y");
		$query = "SELECT Round, Points " . 
				 "FROM PointsPerRound " .
				 "WHERE year = '" . $year . "'";
		$results = mysql_query($query) or die(mysql_error("ERROR"));
		
		$points = array();
		while( $row = mysql_fetch_array($results,  MYSQL_ASSOC) ){
			$points[$row['Round']] = $row['Points'];
		}

		return $points;
    }

    //Returns array of users
    //
    function getusers(){
    	$year = date("Y");
		$query = "SELECT id, FullName " . 
				 "FROM Users " . 
				 "ORDER BY FullName";
		$results = mysql_query($query) or die(mysql_error("ERROR"));
		
		$userIds = array();
		while( $row = mysql_fetch_array($results,  MYSQL_ASSOC) ){
			$userIds[$row['id']] = $row['FullName'];
		}

		return $userIds;
    }


    function isBracketLocked($round){
		$year = date("Y"); 

		$query = "SELECT * " . 
		       "FROM LockPicks " .
		       "WHERE " . 
		       "round = '" . $round .  "' " .
		       "AND LockDate >= NOW() " .  
		       "AND Year = '" . $year . "'";

		$results = mysql_query($query) or die(mysql_error());
		$num = mysql_num_rows($results);

		if($num >= 1) {
			return false;  
		}else{
			return true;
		}
    }

    function getBracketLockedDate($round){
		$year = date("Y"); 

		$query = "SELECT LockDate " . 
		       "FROM LockPicks " .
		       "WHERE " . 
		       "Round = '" . $round .  "' " .  
		       "AND Year = '" . $year . "'";

		$results = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($results,  MYSQL_ASSOC);
		$num = mysql_num_rows($results);
		//echo $num;
		if($num >= 1) {
			return $row['LockDate'];  
		}else{
			return date('Y-m-d g:i:s', time());
		}
    }

    function getHours(){
    	$hours = array();
    	for ($x=1; $x<=12; $x++){
    		if ($x < 10 ){
    			$x = '0' . $x;
    		}
    		array_push($hours, $x);
    	}
    	return $hours;
    }

    function getMinutes(){
    	$min = array();
    	for ($x=0; $x<=59; $x++){
    		if ($x < 10 ){
    			$x = '0' . $x;
    		}
    		array_push($min, $x);
    	}
    	return $min;
    }

    function hourSelector($hourSelected){
    	$hours = getHours();

    	echo "<select id=\"hours\">";
    	foreach($hours as $h){
    		if ($h == $hourSelected){
    			echo "<option SELECTED value='". $h ."'>" . $h . "</option>";	
    		}else{
    			echo "<option value='". $h ."'>" . $h . "</option>";
    		}
    	}
    	echo "</select>";
    }

    function minuteSelector($minSelected){
    	$minutes = getMinutes();

    	echo "<select id=\"min\">";
    	foreach($minutes as $m){
    		if ($m == $minSelected){
    			echo "<option SELECTED value='". $m ."'>" . $m . "</option>";	
    		}else{
    			echo "<option value='". $m ."'>" . $m . "</option>";
    		}
    	}
    	echo "</select>";

    }

   	//im not a fan of this function, will refactor later
    function createLockBracketForm($round){
    	$dateTime = explode( " ", getBracketLockedDate($round) ) ;
	   	$date = $dateTime[0];
	   	$am = "";
	   	$pm = "";
	   	$time = explode(":", $dateTime[1]);
	   	$hour = $time[0];
	   	$min = $time[1];
	   	if ( $hour > 12 ){
	   		$hour = $hour - 12;
	   		$hour = '0' . $hour;
	   		$pm = 'SELECTED';
	   	}else{
	   		$am = 'SELECTED';
	   	}

	   	echo "<span>User can make picks until</span>"; 
		
		echo "<br />";
		
		echo "<input size='7' type='text' data-round='" . $round . "' id='date' value='" . $date ."' />";
		echo " at ";

		hourSelector($hour);
		echo ' : '; 
		minuteSelector($min); 
			
		?>

		<select id="ampm">
			<option <?php echo $pm ?> value="PM">PM</option>
			<option <?php echo $am ?>value="AM">AM</option>
		</select>
		<button id="lockoutDateBtn">Set</button>	
		<?php
    }

    function isAdmin($id){

    	$query = "SELECT * " .
    			 "FROM Users " .
    			 "WHERE " . 
    			 "id = '" . $id . "'";
    	$results = mysql_query($query) or die(mysql_error());
		$row = mysql_fetch_array($results,  MYSQL_ASSOC);		 
    	if ($row['isAdmin'] == 'TRUE'){
    		return true;
    	}
    	return false;
    }

    function adminRequired($id){
    	if ( !isAdmin($id) ) {
		  	die ("<p style=\"margin-top:30px;\"><h2 class='error'>You must be an administrator to view this page.</h2> " .
		  		 "<a href=\"viewStandings.php\">Go Back</a></p>");

		}
    }


    function getUserPicksPerRound($userId, $round){
    	$year = date("Y");

    	$query = "SELECT  user, pick " . 
    			 "FROM Picks " .
    			 "WHERE ".
    			 "Year = '" .$year . "'" .
    			 "AND user = '" . $userId . "'" .
    			 "AND round LIKE '%R" . $round . "%'" . 
    			 "ORDER BY round";

    	$results = mysql_query($query) or die(mysql_error());

    	$num_rows = mysql_num_rows($results);
    	$picks = array();

		if ( $num_rows <= 0 ) {
			return $picks;
		}
			
		while($row = mysql_fetch_array($results,  MYSQL_ASSOC)){
			array_push($picks, $row['pick']);
		}
		return $picks;
    }


    //return Full name or 0 if user doesnt exist
    function getUserNameFromId($id){

    	$query = "SELECT fullName " .
    			 "FROM Users " .
    			 "WHERE " . 
    			 "id = '" . $id . "'";
    	
    	$results = mysql_query($query) or die(mysql_error("ERROR"));
		$num_rows = mysql_num_rows($results);

		if ( $num_rows > 0 ) {
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			return $row['fullName'];
		}
		return 0;

	}



	function getTieBreakerGoalsPick($userNameId){
		$year = date("Y");
		$query =   "SELECT * " . 
			       "FROM StanleyCupGoalsPick " .
			       "WHERE " . 
			       "User = '" . $userNameId .  "' " .  
		    	   "AND Year = '" . $year . "' ";

		$results = mysql_query($query) or die(mysql_error("ERROR"));
		$num_rows = mysql_num_rows($results);

		if ( $num_rows > 0 ) {
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			return intval($row['NumberOfGoals']);
		}
		return 0;
	}

	function getTieBreakerGoalsWin(){
    	$year = date("Y");	
		$query =  "SELECT * " . 
			      "FROM StanleyCupGoalsWin " .
			      "WHERE " .   
		    	  "Year = '" . $year . "'";

		$results = mysql_query($query) or die(mysql_error("ERROR"));
		$num_rows = mysql_num_rows($results);

		if ( $num_rows > 0 ) {
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			return intval($row['NumberOfGoals']);
		}
		return 0;
	}

	function getTeamNameFromId($id){
		$query = "SELECT name FROM teams where id='" . $id . "' LIMIT 1";
	  	$results = mysql_query($query) or die(mysql_error());
		$num_rows = mysql_num_rows($results);
		if ( $num_rows > 0 ){
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			return $row['name'];
		}else{
			return "";
		}
	}
	
  ?>

















