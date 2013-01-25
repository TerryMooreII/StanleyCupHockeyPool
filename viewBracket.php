<?php
  include('inc/header.php');
  include('inc/functions.php');
?>


   <div id="statusMessage"></div>
<!--<div id="menu">
  <ul>
    <li class="tab" title="EasternBracket">Eastern Conference</li>
    <li class="tab" title="WesternBracket">Western Conference</li>
    <li class="tab" title="StanleyCupBracket">Stanley Cup</li>
  </ul>
</div>-->
<div class="bracketTable" id="bracketFull">
  
      <table border="0">
	      <tr><th colspan="4"><img src="imgs/teamsWestern.jpg" /></th></tr>
	      <tr>
		      <th>Quarter Finals</th>
		      <th>Semi Finals</th>
		      <th>Conference Finals</th>
		      <th>Stanley Cup Finals</th>
	      </tr>
	      <tr>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR1G1A'); ?></td>
		      <td></td>
		      <td></td>
		      <td></td>
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR2G1A'); ?></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR1G1B'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR3G1A'); ?></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR1G2A'); ?></td>
		      <td  class="bbr"></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR2G1B'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR1G2B'); ?></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'SR4G1A'); ?></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR1G3A'); ?></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR2G2A'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR1G3B'); ?></td>
		      <td  class="bbr"></td>
		      <td  class="bbr"></td>
		      <td></td>	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR3G1B'); ?></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR1G4A'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR2G2B'); ?></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR1G4B'); ?></td>
		      <td></td>
		      <td></td>
		      <td></td>
	      </tr>
      </table>    
 
    <table>
      <tr>
      
	<th colspan="3"><img style="width:80px;height:84px;" src="imgs/StanleyCupFinals.png" alt="stanleycup" />Stanley Cup Winner</th>
	<td colspan="1" class="bbb"><?php ShowTeamsBrackets('Western', 'SR4G1')?></td>
      

      </tr>
      </table>


    <table border="0">
	    <tr><th colspan="4"><img src="imgs/teamsEastern.jpg" /></th></tr>
	    <tr>
		    <th>Quarter Finals</th>
		    <th>Semi Finals</th>
		    <th>Conference Finals</th>
		    <th>Stanley Cup Finals</th>
	    </tr>
	    <tr>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER1G1A'); ?></td>
		    <td></td>
		    <td></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER2G1A'); ?></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    
	    <tr>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER1G1B'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER3G1A'); ?></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER1G2A'); ?></td>
		    <td  class="bbr"></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER2G1B'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER1G2B'); ?></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'SR4G1B'); ?></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER1G3A'); ?></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER2G2A'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER1G3B'); ?></td>
		    <td  class="bbr"></td>
		    <td  class="bbr"></td>
		    <td></td>	
	    </tr>
	    <tr>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER3G1B'); ?></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER1G4A'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER2G2B'); ?></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER1G4B'); ?></td>
		    <td></td>
		    <td></td>
		    <td></td>
	    </tr>
    </table>    


</div>  

<?php include 'inc/footer.php' ?>