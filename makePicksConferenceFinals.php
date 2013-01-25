<?php

  include('inc/header.php');
  include('inc/functions.php');
?>


  
   <div id="statusMessage"></div>

   <div id="showLastPickDate">
	<?php
	if ( isBracketLocked('3') ){
		echo "<script>var bracketLocked = true;</script>";
		echo "<span class=\"bracketLocked\">Bracket is locked.</span>";
	}else{
		echo "<script>var bracketLocked = false;</script>";
		echo "Picks must be made by: " . getBracketLockedDate('3');
	} 
	?>
</div>
<div id="menu">
  <ul>
    <li class="tab" title="EasternBracket">Eastern Conference</li>
    <li class="tab" title="WesternBracket">Western Conference</li>
  </ul>
</div>
<div id="bracket" class="bracketTable" >
  <div id="WesternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsWestern.jpg" /></th></tr>
	      <tr>
		      <th>Conference Finals</th>
		      <th>Your Pick</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="WR3G1A"><?php GetTeams('WR3G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="WR3G1"><?php ShowPick('WR3G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="WR3G1B"><?php GetTeams('WR3G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class=""></td>
		      
	      </tr>	
      </table>    
 </div>


  <div id="EasternBracket">
      <table border="0">
	      <tr><th colspan="2"><img src="imgs/teamsEastern.jpg" /></th></tr>
	      <tr>
		      <th>Conference Finals</th>
		      <th>Your Pick</th>
		      
	      </tr>
	      <tr>
		      <td class="bbb pickClick" data-bracket="ER3G1A"><?php GetTeams('ER3G1A'); ?></td>
		      <td></td>
		      
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb" data-bracket="ER3G1"><?php ShowPick('ER3G1') ?></td>
		      
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr pickClick"  data-bracket="ER3G1B"><?php GetTeams('ER3G1B'); ?></td>
		      <td  class=""></td>
		      
	      </tr>	
	      
      </table>    
 </div>
</div>  
</div> <!--! end of #container -->

<?php include 'inc/footer.php'; ?>


<script type="text/javascript">
	if ( bracketLocked ){
		$('td').removeClass('pickClick').off();
	}
</script>
