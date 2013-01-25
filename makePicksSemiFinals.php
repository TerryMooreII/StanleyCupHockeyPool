<?php

  include('inc/header.php');
  include('inc/functions.php');
?>



   <div id="statusMessage"></div>

   <div id="showLastPickDate">
	<?php
	if ( isBracketLocked('2') ){
		echo "<script>var bracketLocked = true;</script>";
		echo "<span class=\"bracketLocked\">Bracket is locked.</span>";
	}else{
		echo "<script>var bracketLocked = false;</script>";
		echo "Picks must be made by: " . getBracketLockedDate('2');
	} 
	?>
</div>

<div id="menu">
  <ul>
    <li class="tab" title="EasternBracket">Eastern Conference</li>
    <li class="tab" title="WesternBracket">Western Conference</li>
  </ul>
</div>
<div id="bracket"  class="bracketTable">
  <div id="WesternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsWestern.jpg" /></th></tr>
	      <tr>
		      <th>Semi Finals</th>
		      <th>Your Pick</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR2G1A"><?php GetTeams('WR2G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR2G1"><?php ShowPick('WR2G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="WR2G1B"><?php GetTeams('WR2G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR2G2A"><?php GetTeams('WR2G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR2G2"><?php ShowPick('WR2G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="WR2G2B"><?php GetTeams('WR2G2B'); ?></td>
		      <td></td>
		      
	      </tr>
      </table>    
 </div>


  <div id="EasternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsEastern.jpg" /></th></tr>
	      <tr>
		      <th>Semi Finals</th>
		      <th>Your Pick</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER2G1A"><?php GetTeams('ER2G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER2G1"><?php ShowPick('ER2G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="ER2G1B"><?php GetTeams('ER2G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER2G2A"><?php GetTeams('ER2G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER2G2"><?php ShowPick('ER2G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="ER2G2B"><?php GetTeams('ER2G2B'); ?></td>
		      <td></td>
		      
	      </tr>
	      
      </table>    
 </div>
</div> 


<?php include 'inc/footer.php'; ?>


<script type="text/javascript">
	if ( bracketLocked ){
		$('td').removeClass('pickClick').off();
	}
</script>
