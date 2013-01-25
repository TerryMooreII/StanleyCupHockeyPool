<?php
  include('inc/header.php');
  include('inc/functions.php');
?>


  <div id="container">
   <div id="statusMessage"></div>
<!--<div id="menu">
  <ul>
    <li class="tab" title="EasternBracket">Eastern Conference</li>
    <li class="tab" title="WesternBracket">Western Conference</li>
    <li class="tab" title="StanleyCupBracket">Stanley Cup</li>
  </ul>-->
</div>
<div id="bracket">
  <div id="Western">
      <table border="0">
	      <tr><td colspan="4" class="table-title">Western Conference</td></tr>
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
		      <td class="bbb"><?php ShowTeamsBrackets('Western', 'WR4G1A'); ?></td>
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
		      <td class="bbb bbr"><?php ShowTeamsBrackets('Western', 'WR3G1A'); ?></td>
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
 </div>

<div id="StanleyCup">
 
    <table>
      <tr>
	<td></td>
	<td  class="table-title">Stanley Cup Winner</td>
	<td class="bbb"><?php ShowTeamsBrackets('Western', 'SR4G1')?></td>
      </tr>
      </table>

</div>

<div id="Eastern">

    <table border="0">
	    <tr><td colspan="4" class="table-title">Eastern Conference</td></tr>
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
		    <td class="bbb"><?php ShowTeamsBrackets('Eastern', 'ER4G1A'); ?></td>
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
		    <td class="bbb bbr"><?php ShowTeamsBrackets('Eastern', 'ER3G1A'); ?></td>
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
</div>  
</div>
<?php include 'inc/footer.php' ?>