<?php

include('inc/header.php');
include('inc/functions.php');
?>

	<div id="points">

	<table id="pointsTable">
	<tr> 
		 <th>User</th>
		 <th>Quarter Finals</th>
		 <th>Semi Finals</th>
		 <th>Conference Finals</th>
		 <th>Stanley Cup</th>
		 <th>Total</tr>
	 </tr>

<?php
	$pointsPerRound = getPointsPerRoundArray();
	$users = getUsers();
	$previousPoints = 0;
	$highScore = 0;	
	$totalScores = array();
	$row = 0;
	foreach( $users as $id=>$fullName ){
		$totalPoints = 0;

		if ($row == 0 ){
			$class = "stripe";
			$row=1;
		}else{
			$class = "xxx";
			$row=0;
		}
		echo "<tr class=\"" . $class . "\">";
		echo "<td class=\"pointsStrong\">" . $fullName . "</td>";
		for ($round=1; $round<5; $round++){ //round numbers
			$numberOfCorrectPicks = getUsersCorrectPicksPerRound( $id,$round );
			$points = $pointsPerRound[$round] * $numberOfCorrectPicks;
			echo "<td>" .  $points . " (". $numberOfCorrectPicks . ") " ."</td>";
			$totalPoints += $points;
		}
		
		if ( $totalPoints == $previousPoints ){
			$totalScores[] = $id;
		
		}elseif ( $totalPoints	 > $previousPoints ){
			$totalScores = array();
			$totalScores[] = $id;	
			$previousPoints = $totalPoints;	
		}
			
		echo "<td class=\"highScore user" . $id ."\">" . $totalPoints . "</td>";
		echo "</tr>";
	}	

	$year = date('Y');
	if ( count($totalScores) == 1 ){
		$winner = $totalScores[0];
		//echo "<script>console.log(".$winner.")</script>";
	}else{
		$winner = "";
		$difference = -1;
		$previousDifference = 9999;
	    $winningGoalsCount = getTieBreakerGoalsWin();

		foreach ( $totalScores as $id ){
			
		    $difference = $winningGoalsCount - getTieBreakerGoalsPick($id);
		    echo "<script>console.log(D".$difference.")</script>"; 

		    if( ($difference >= 0) && ($difference < $previousDifference)  ){
		    	$previousDifference = $difference;
		    	$winner = $id;
		    }

		}
	}


	?>
	<tr>
	<td colspan="6"><br /><br /><br /><strong>Key:</strong> Points (Number of Correct Picks) Example 8 (4) </td>
	</tr>
	</table>
	</div>

	
<?php
include('inc/footer.php');
?>

<script type="text/javascript">
var a = "<?php echo $winner ?>";
//$('.user' + a ).css("background-color", "green").css("color", "white");


</script>





