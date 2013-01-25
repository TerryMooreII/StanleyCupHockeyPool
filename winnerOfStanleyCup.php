<?php

  include('inc/header.php');
  include('inc/functions.php');
  adminRequired($_SESSION['userIdNumber']);
?>


<div id="statusMessage"></div>
<div id="lockoutDateDiv">
	<?php
		createLockBracketForm('4');
	?>
</div>
<div id="menu">
  <ul>
    <li class="tab" title="StanleyCupBracket">Stanley Cup Finals</li>
  </ul>
</div>
<div id="bracket"  class="bracketTable" style="height:100%">
  <div id="StanleyCupBracket" style="height:100%">
      <table border="0">
	      <tr><th colspan="2"><img style="width:80px;height:84px;" src="imgs/StanleyCupFinals.png" alt="stanleycup" /></th></tr>
	      <tr>
		      <th>Stanley Cup</th>
		      <th>Winner</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickSelect" data-bracket="SR4G1A"><?php GetTeamsDropDown('Western', 'SR4G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="SR4G1"><?php GetTeamsDropDown('StanleyCup', 'SR4G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickSelect"  data-bracket="SR4G1B"><?php GetTeamsDropDown('Eastern', 'SR4G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      
      </table>
      
      <table class="tieBreaker">
      <tr>
		      <td >Tie Breaker: Total number of goals in the series? 
		      		<input type="number" min="1" max="999" id="tieBreaker" data-table="win" value="<?php echo getTieBreakerGoalsWin(); ?>" />
		       </td>
	      </tr>

      </table> 
          
 </div>
</div>  

<?php include 'inc/footer.php'; ?>











