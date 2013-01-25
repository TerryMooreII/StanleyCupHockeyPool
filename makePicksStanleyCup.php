<?php

  include('inc/header.php');
  include('inc/functions.php');
?>



   <div id="statusMessage"></div>

   <div id="showLastPickDate">
	<?php
	if ( isBracketLocked('4') ){
		echo "<script>var bracketLocked = true;</script>";
		echo "<span class=\"bracketLocked\">Bracket is locked.</span>";
	}else{
		echo "<script>var bracketLocked = false;</script>";
		echo "Picks must be made by: " . getBracketLockedDate('4');
	} 
	?>
</div>

<div id="menu">
  <ul>
    <li class="tab" title="StanelyCupFinals">Stanley Cup Finals</li>
  </ul>
</div>
<div id="bracket">
  <div id="StanleyCupBracket"  class="bracketTable">
  	<div>
      <table border="0">
      <tr>
	      <th colspan="2">
	      	<img style="width:80px;height:84px;" src="imgs/StanleyCupFinals.png" alt="stanleycup" />
	      </th>
      </tr>
	      <tr>
		      <th>Stanley Cup</th>
		      <th>Your Pick</th>
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="SR4G1A"><?php GetTeams('SR4G1A'); ?></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="SR4G1"><?php ShowPick('SR4G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="SR4G1B"><?php GetTeams('SR4G1B'); ?></td>
		      		      
	      </tr>	
      </table>  
      <br /><br />
      <table class="tieBreaker">
      	<tr>
		      <td>Tie Breaker: Total number of goals in the series? 
		      		<input type="number" min="0" max="999" id="tieBreaker" data-table="picks" 
		      		value="<?php echo getTieBreakerGoalsPick($_SESSION['userIdNumber']); ?>" />
		       </td>
	      </tr>
	      <span id="pickagain" class="error"></span>
      </table>
   </div>  
 </div>
</div>  

<?php include 'inc/footer.php'; ?>


<script type="text/javascript">
	if ( bracketLocked ){
		$('td').removeClass('pickClick').off();
		$('#tieBreaker').attr('disabled','disabled');
	}
</script>
