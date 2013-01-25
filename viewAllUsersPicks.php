<?php
  include('inc/header.php');
  include('inc/functions.php');
?>

<div id="allUserPicks">
	<div id="menu">
	  <ul>
	    <li class="tabAllPicks" title="round1">Quarter Finals</li>
	    <li class="tabAllPicks" title="round2">Semi Finals</li>
	    <li class="tabAllPicks" title="round3">Conference Finals</li>
	    <li class="tabAllPicks" title="round4">Stanley Cup</li>
	  </ul>
	</div>

	
	<?php
	$year = date("Y");
	$round = 1;
	$users = getUsers();
	
	
	while ($round < 5){
		echo "<table class=\"round" . $round ."\">";	

			if ($round == 4 ){
				echo "<tr><td class=\"title\" colspan=\"9\">Stanley Cup Finals</td></tr>";
				//echo "<tr class=\"header\"><td class=\"userName\">User</td><td>Game 1</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
			}elseif ($round == 3 ){
				echo "<tr><td class=\"title\" colspan=\"9\">Conference Finals</td></tr>";
				//echo "<tr class=\"header\"><td class=\"userName\">User</td><td>Game 1</td><td>Game 2</td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
			}elseif ($round == 2 ){
				echo "<tr><td class=\"title\" colspan=\"9\">Semi Finals</td></tr>";
				//echo "<tr class=\"header\"><td class=\"userName\">User</td><td>Game 1</td><td>Game 2</td><td>Game 3</td><td>Game 4</td><td></td><td></td><td></td></tr>";
			}elseif ($round == 1 ){
				echo "<tr><td class=\"title\" colspan=\"9\">Quarter Finals</td></tr>";
				//echo "<tr class=\"header\"><td class=\"userName\">User</td><td>Game 1</td><td>Game 2</td><td>Game 3</td><td>Game 4</td><td>Game 5</td><td>Game 6</td><td>Game 7</td><td>Game 8</td></tr>";
			}
			
		if (isBracketLocked($round)){  

			foreach ($users as $id => $fullName){
				echo "<tr>";
				echo "<td class=\"userName\">" . $fullName . "</td>";	
				$picks = getUserPicksPerRound($id, $round);
				
				if (count($picks) > 0 && isBracketLocked($round)){	
					foreach ($picks as $pick){
						echo "<td><img class=\"nameBox\" src=\"imgs/teamsMedium/" . $pick . ".png\"  data-team=\"".getTeamNameFromId($pick)."\"alt=\"". getTeamNameFromId($pick)."\"/></td>";
					}
					if ($round == 4 ){
						echo "<td></td><td>" . getTieBreakerGoalsPick($id) . " Goals</td>";
					}
				}
				echo "</tr>";
			}
		
		}else{
			echo "<tr><td class=\"error\" colspan=\"9\" style=\"text-align:center\">You will not be able to view all users picks until the bracket is locked</td></tr>";
		}
		echo "<tr class=\"header\"><td ></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
		echo "</table>";	
		$round++;		
	}	
?>

</div>
<div id="showTeamName" ></div>
<?php include 'inc/footer.php' ?>

<script type="text/javascript">
	$("table").hide();
	$(".round1").show();
	
	$(".tabAllPicks").on('click', function(){
		round = $(this).attr('title');
		console.log(round)
		$("table").hide();
		$("." + round).show();

	});

</script>
	