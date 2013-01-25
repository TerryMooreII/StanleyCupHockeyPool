<?php

  include('inc/header.php');
  include('inc/functions.php');
  adminRequired($_SESSION['userIdNumber']);	
?>



   <div id="statusMessage"></div>

<div id="lockoutDateDiv">
	<?php
		createLockBracketForm('1');
	?>
</div>

<div id="menu">
  <ul>
    <li class="tab" title="EasternBracket">Eastern Conference</li>
    <li class="tab" title="WesternBracket">Western Conference</li>
  </ul>
</div>
<div id="bracket" class="bracketTable">
  <div id="WesternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsWestern.jpg" /></th></tr>
	      <tr>
		      <th>Quarter Finals</th>
		      <th>Winner</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickSelect" data-bracket="WR1G1A"><?php GetTeamsDropDown('Western', 'WR1G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="WR1G1"><?php GetTeamsDropDown('Western', 'WR1G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickSelect"  data-bracket="WR1G1B"><?php GetTeamsDropDown('Western', 'WR1G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="WR1G2A"><?php GetTeamsDropDown('Western', 'WR1G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="WR1G2"><?php GetTeamsDropDown('Western', 'WR1G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="WR1G2B"><?php GetTeamsDropDown('Western', 'WR1G2B'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="WR1G3A"><?php GetTeamsDropDown('Western', 'WR1G3A'); ?></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="WR1G3"><?php GetTeamsDropDown('Western', 'WR1G3') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="WR1G3B"><?php GetTeamsDropDown('Western', 'WR1G3B'); ?></td>
		      <td  class=""></td>
		      	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="WR1G4A"><?php GetTeamsDropDown('Western', 'WR1G4A'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="WR1G4"><?php GetTeamsDropDown('Western', 'WR1G4') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="WR1G4B"><?php GetTeamsDropDown('Western', 'WR1G4B'); ?></td>
		      <td></td>
		      
	      </tr>
      </table>    
 </div>


  <div id="EasternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsEastern.jpg" /></th></tr>
	      <tr>
		      <th>Quarter Finals</th>
		      <th>Winner</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickSelect" data-bracket="ER1G1A"><?php GetTeamsDropDown('Eastern', 'ER1G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="ER1G1"><?php GetTeamsDropDown('Eastern', 'ER1G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickSelect"  data-bracket="ER1G1B"><?php GetTeamsDropDown('Eastern', 'ER1G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="ER1G2A"><?php GetTeamsDropDown('Eastern', 'ER1G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="ER1G2"><?php GetTeamsDropDown('Eastern', 'ER1G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="ER1G2B"><?php GetTeamsDropDown('Eastern', 'ER1G2B'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="ER1G3A"><?php GetTeamsDropDown('Eastern', 'ER1G3A'); ?></td>
		      <td></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="ER1G3"><?php GetTeamsDropDown('Eastern', 'ER1G3') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="ER1G3B"><?php GetTeamsDropDown('Eastern', 'ER1G3B'); ?></td>
		      <td  class=""></td>
		      	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="ER1G4A"><?php GetTeamsDropDown('Eastern', 'ER1G4A'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="ER1G4"><?php GetTeamsDropDown('Eastern', 'ER1G4') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="ER1G4B"><?php GetTeamsDropDown('Eastern', 'ER1G4B'); ?></td>
		      <td></td>
		      
	      </tr>
      </table> 
       
 </div>
 <br />   <br />  
</div>  



<?php include 'inc/footer.php'; ?>