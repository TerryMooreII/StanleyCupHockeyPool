<?php

  include('inc/header.php');
  include('inc/functions.php');
?>



   <div id="statusMessage"></div>

<div id="showLastPickDate">
	<?php

	if ( isBracketLocked('1') ){
		echo "<script>var bracketLocked = true;</script>";
		echo "<span class=\"bracketLocked\">Bracket is locked.</span>";
	}else{
		echo "<script>var bracketLocked = false;</script>";
		echo "Picks must be made by: " . getBracketLockedDate('1');
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
		      <th>Quarter Finals</th>
		      <th>Your Pick</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR1G1A"><?php GetTeams('WR1G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR1G1"><?php ShowPick('WR1G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="WR1G1B"><?php GetTeams('WR1G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR1G2A"><?php GetTeams('WR1G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR1G2"><?php ShowPick('WR1G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="WR1G2B"><?php GetTeams('WR1G2B'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR1G3A"><?php GetTeams('WR1G3A'); ?></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR1G3"><?php ShowPick('WR1G3') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="WR1G3B"><?php GetTeams('WR1G3B'); ?></td>
		      <td  class=""></td>
		      	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR1G4A"><?php GetTeams('WR1G4A'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR1G4"><?php ShowPick('WR1G4') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="WR1G4B"><?php GetTeams('WR1G4B'); ?></td>
		      <td></td>
		      
	      </tr>
      </table>    
 </div>


  <div id="EasternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsEastern.jpg" /></th></tr>
	      <tr>
		      <th>Quarter Finals</th>
		      <th>Your Pick</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER1G1A"><?php GetTeams('ER1G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER1G1"><?php ShowPick('ER1G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="ER1G1B"><?php GetTeams('ER1G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER1G2A"><?php GetTeams('ER1G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER1G2"><?php ShowPick('ER1G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="ER1G2B"><?php GetTeams('ER1G2B'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER1G3A"><?php GetTeams('ER1G3A'); ?></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER1G3"><?php ShowPick('ER1G3') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="ER1G3B"><?php GetTeams('ER1G3B'); ?></td>
		      <td  class=""></td>
		      	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER1G4A"><?php GetTeams('ER1G4A'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER1G4"><?php ShowPick('ER1G4') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickClick" data-bracket="ER1G4B"><?php GetTeams('ER1G4B'); ?></td>
		      <td></td>
		      
	      </tr>
      </table>    
 </div>
</div>  




<?php include 'inc/footer.php'; ?>


<script type="text/javascript">
	if ( bracketLocked ){
		console.log("Removing class")
		$('td').removeClass('pickClick').off();
	}
</script>







