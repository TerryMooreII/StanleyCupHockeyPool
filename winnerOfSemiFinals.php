<?php

  include('inc/header.php');
  include('inc/functions.php');
  adminRequired($_SESSION['userIdNumber']);
?>



   <div id="statusMessage"></div>
   <div id="lockoutDateDiv">
	<?php
		createLockBracketForm('2');
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
		      <th>Winner</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickSelect" data-bracket="WR2G1A"><?php GetTeamsDropDown('Western', 'WR2G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="WR2G1"><?php GetTeamsDropDown('Western', 'WR2G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickSelect"  data-bracket="WR2G1B"><?php GetTeamsDropDown('Western', 'WR2G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="WR2G2A"><?php GetTeamsDropDown('Western', 'WR2G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="WR2G2"><?php GetTeamsDropDown('Western', 'WR2G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="WR2G2B"><?php GetTeamsDropDown('Western', 'WR2G2B'); ?></td>
		      <td></td>
		      
	      </tr>
      </table>    
 </div>


  <div id="EasternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsEastern.jpg" /></th></tr>
	      <tr>
		      <th>Semi Finals</th>
		      <th>Winner</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickSelect" data-bracket="ER2G1A"><?php GetTeamsDropDown('Eastern', 'ER2G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="ER2G1"><?php GetTeamsDropDown('Eastern', 'ER2G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickSelect"  data-bracket="ER2G1B"><?php GetTeamsDropDown('Eastern', 'ER2G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb pickSelect" data-bracket="ER2G2A"><?php GetTeamsDropDown('Eastern', 'ER2G2A'); ?></td>
		      <td  class=""></td>
		  </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winnerSelect" data-bracket="ER2G2"><?php GetTeamsDropDown('Eastern', 'ER2G2') ?></td>
		      
	      </tr>	
	      <tr>
		      <td class="bbb bbr pickSelect" data-bracket="ER2G2B"><?php GetTeamsDropDown('Eastern', 'ER2G2B'); ?></td>
		      <td></td>
		      
	      </tr>
	      
      </table>    
 </div>
</div>  




<?php include 'inc/footer.php'; ?>