<?php
  include('inc/header.php');
?>


  <div id="container">
   <div id="statusMessage"></div>
<div id="menu">
  <ul>
    <li class="tab" title="EasternBracket">Eastern Conference</li>
    <li class="tab" title="WesternBracket">Western Conference</li>
    <li class="tab" title="StanleyCupBracket">Stanley Cub</li>
  </ul>
</div>
<div id="bracket">
  <div id="WesternBracket">
      <table border="0">
	      <tr><td colspan="4" class="table-title">Western Conference</td></tr>
	      <tr>
		      <th>Quarter Finals</th>
		      <th>Semi Finals</th>
		      <th>Conference Finals</th>
		      <th>Stanley Cup Finals</th>
	      </tr>
	      <tr>
		      <td class="bbb"><select name="WR1G1A" id="WR1G1A"><?php GetTeams('Western', 'WR1G1A'); ?></select></td>
		      <td></td>
		      <td></td>
		      <td></td>
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb"><select name="WR2G1A" id="WR2G1A"><?php GetTeams('Western', 'WR2G1A'); ?></select></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr"><select name="WR1G1B" id="WR1G1B"><?php GetTeams('Western', 'WR1G1B'); ?></select></td>
		      <td  class="bbr"></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb"><select name="WR3G1A" id="WR3G1A"><?php GetTeams('Western', 'WR3G1A'); ?></select></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><select name="WR1G2A" id="WR1G2A"><?php GetTeams('Western', 'WR1G2A'); ?></select></td>
		      <td  class="bbr"></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb bbr"><select name="WR2G1B" id="WR2G1B"><?php GetTeams('Western', 'WR2G1B'); ?></select></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><select name="WR1G2B" id="WR1G2B"><?php GetTeams('Western', 'WR1G2B'); ?></select></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb"><select name="WR4G1A" id="WR4G1A"><?php GetTeams('Western', 'WR4G1A'); ?></select></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><select name="WR1G3A" id="WR1G3A"><?php GetTeams('Western', 'WR1G3A'); ?></select></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb"><select name="WR2G2A" id="WR2G2A"><?php GetTeams('Western', 'WR2G2A'); ?></select></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><select name="WR1G3B" id="WR1G3B"><?php GetTeams('Western', 'WR1G3B'); ?></select></td>
		      <td  class="bbr"></td>
		      <td  class="bbr"></td>
		      <td></td>	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb bbr"><select name="WR3G1A" id="WR3G1A"><?php GetTeams('Western', 'WR3G1A'); ?></select></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><select name="WR1G4A" id="WR1G4A"><?php GetTeams('Western', 'WR1G4A'); ?></select></td>
		      <td  class="bbr"></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb bbr"><select name="WR2G2B" id="WR2G2B"><?php GetTeams('Western', 'WR2G2B'); ?></select></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><select name="WR1G4B" id="WR2G2B"><?php GetTeams('Western', 'WR2G2B'); ?></select></td>
		      <td></td>
		      <td></td>
		      <td></td>
	      </tr>
      </table>    
 </div>

<div id="StanleyCupBracket">
 
    <table>
      <tr>
	<td></td>
	<td  class="table-title">Stanley Cup Winner</td>
	<td class="bbb"><select name="SR4G1A" id="SR4G1A"><?php GetTeams('Western', 'WR2G2B');GetTeams('Eastern', 'WR2G2B'); ?></select></td>
	<td></td>
	<td>`</td>
      </tr>
      </table>

</div>

<div id="EasternBracket">

    <table border="0">
	    <tr><td colspan="4" class="table-title">Eastern Conference</td></tr>
	    <tr>
		    <th>Quarter Finals</th>
		    <th>Semi Finals</th>
		    <th>Conference Finals</th>
		    <th>Stanley Cup Finals</th>
	    </tr>
	    <tr>
		    <td class="bbb"><select name="ER1G1A" id="ER1G1A"><?php GetTeams('Eastern', 'ER1G1A'); ?></select></td>
		    <td></td>
		    <td></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb"><select name="ER2G1A" id="ER2G1A"><?php GetTeams('Eastern', 'ER2G1A'); ?></select></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    
	    <tr>
		    <td class="bbb bbr"><select name="ER1G1B" id="ER1G1B"><?php GetTeams('Eastern', 'ER1G1B'); ?></select></td>
		    <td  class="bbr"></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb"><select name="ER3G1A" id="ER3G1A"><?php GetTeams('Eastern', 'ER3G1A'); ?></select></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><select name="ER1G2A" id="ER1G2A"><?php GetTeams('Eastern', 'ER1G2A'); ?></select></td>
		    <td  class="bbr"></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb bbr"><select name="ER2G1B" id="ER2G1B"><?php GetTeams('Eastern', 'ER2G1B'); ?></select></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><select name="ER1G2B" id="ER1G2B"><?php GetTeams('Eastern', 'ER1G2B'); ?></select></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb"><select name="ER4G1A" id="ER4G1A"><?php GetTeams('Eastern', 'ER4G1A'); ?></select></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><select name="ER1G3A" id="ER1G3A"><?php GetTeams('Eastern', 'ER1G3A'); ?></select></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb"><select name="ER2G2A" id="ER2G2A"><?php GetTeams('Eastern', 'ER2G2A'); ?></select></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><select name="ER1G3B" id="ER1G3B"><?php GetTeams('Eastern', 'ER1G3B'); ?></select></td>
		    <td  class="bbr"></td>
		    <td  class="bbr"></td>
		    <td></td>	
	    </tr>
	    <tr>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb bbr"><select name="ER3G1A" id="ER3G1A"><?php GetTeams('Eastern', 'ER3G1A'); ?></select></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><select name="ER1G4A" id="ER1G4A"><?php GetTeams('Eastern', 'ER1G4A'); ?></select></td>
		    <td  class="bbr"></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb bbr"><select name="ER2G2B" id="ER2G2B"><?php GetTeams('Eastern', 'ER2G2B'); ?></select></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><select name="ER1G4B" id="ER1G4B"><?php GetTeams('Eastern', 'ER1G4B'); ?></select></td>
		    <td></td>
		    <td></td>
		    <td></td>
	    </tr>
    </table>    

  </div>
</div>  
</form>



  
    <footer>

    </footer>
  </div> <!--! end of #container -->

  <?php
    function GetTeams($conference, $fields){
	  //if ($fields == ''){ 
	   //   return; 
	  //}
	  $year = date("Y");
	  $conference2 = substr($fields, 0, 1);
	  if ($conference2 == 'E') {
	      $conference2 = "Eastern";
	  }elseif($conference2 == 'W') {
	      $conference2 = "Western";
	  }else{
	      //die("Error: Invalid conference type.");
	  }

	  $table = substr($fields, 2, 1);
	  if ($table == "1"){
	      $table = "Round1Teams";
	  }elseif ($table == "2"){
	      $table = "Round2Teams";
	  }elseif ($table == "3"){
		$table = "Round3Teams";
	  }elseif ($table == "4"){
		$table = "Round4Teams";
	  }else{
	      //die("Error: Invalid Round type.");
	  }

	  $game = substr($fields, 4,2);
	  
	  $query = "SELECT * FROM " . $table . " WHERE conference = '" . $conference2  
							  . "' AND game = '" . $game 
							  . "' AND year = '" . $year . "'";
	
	  $results = mysql_query($query) or die(mysql_error());
	  while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
	    $team = $row['Team'];
	   
	  }
        $query = "SELECT * FROM teams where conference = '" . $conference . "' order by name";
        $results = mysql_query($query) or die(mysql_error());
	
	echo "<option></option>";
        while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
            if (intval($team) == $row['id']) {
		      ?>
		      <option SELECTED value=" <?php echo $row['id']; ?> " ><?php echo $row['name']; ?></option>
	      	<?php
		    }else{
		      ?>
		      <option value=" <?php echo $row['id']; ?> "><?php echo $row['name']; ?> </option>
		      <?php
		    }
        }
    }

  ?>


  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
  
 
<script>
  $("#WesternBracket").hide();
  $("#StanleyCupBracket").hide();
  
  $("select").change(function() {
      // save the field's new value
      $.post("_posts/bracketPost.php", { fields: $(this).attr('id'), value: $(this).val() }, 
	function(data){
	    //alert("Response: " + data );
	    $("#statusMessage").html("<p>"+ data + "</p>");
	    $("#statusMessage").fadeIn("fast", function () {
	      $("#statusMessage").fadeOut(2000);
	    });
      });
    });

  $(".tab").click(function() {
    var tab = $(this).attr("title");
    if (tab == "EasternBracket"){
      $("#EasternBracket").show();
      $("#WesternBracket").hide();
      $("#StanleyCupBracket").hide();
    }else if (tab == "WesternBracket"){
      $("#EasternBracket").hide();
      $("#WesternBracket").show();
      $("#StanleyCupBracket").hide();
    }else if (tab == "StanleyCupBracket"){
      $("#EasternBracket").hide();
      $("#WesternBracket").hide();
      $("#StanleyCupBracket").show();
    } 
  });

</script>
  
</body>
</html>