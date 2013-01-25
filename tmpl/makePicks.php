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
		      <td class="bbb"><?php GetTeams('Western', 'WR1G1A'); ?></td>
		      <td></td>
		      <td></td>
		      <td></td>
	      </tr>
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb winner"><?php GetTeams('Western', 'WR2G1A'); ?></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      
	      <tr>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR1G1B'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb"><?php GetTeams('Western', 'WR3G1A'); ?></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><?php GetTeams('Western', 'WR1G2A'); ?></td>
		      <td  class="bbr"></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR2G1B'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR1G2B'); ?></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>
	      <tr>
		      <td></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb"><?php GetTeams('Western', 'WR4G1A'); ?></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><?php GetTeams('Western', 'WR1G3A'); ?></td>
		      <td></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb"><?php GetTeams('Western', 'WR2G2A'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR1G3B'); ?></td>
		      <td  class="bbr"></td>
		      <td  class="bbr"></td>
		      <td></td>	
	      </tr>
	      <tr>
		      <td></td>
		      <td  class="bbr"></td>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR3G1A'); ?></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb"><?php GetTeams('Western', 'WR1G4A'); ?></td>
		      <td  class="bbr"></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbr"></td>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR2G2B'); ?></td>
		      <td></td>
		      <td></td>
	      </tr>	
	      <tr>
		      <td class="bbb bbr"><?php GetTeams('Western', 'WR2G2B'); ?></td>
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
	<td class="bbb"><?php GetTeams('Western', 'WR2G2B');GetTeams('Eastern', 'WR2G2B'); ?></td>
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
		    <td class="bbb"><?php GetTeams('Eastern', 'ER1G1A'); ?></td>
		    <td></td>
		    <td></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER2G1A'); ?></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    
	    <tr>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER1G1B'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER3G1A'); ?></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER1G2A'); ?></td>
		    <td  class="bbr"></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER2G1B'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER1G2B'); ?></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>
	    <tr>
		    <td></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER4G1A'); ?></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER1G3A'); ?></td>
		    <td></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER2G2A'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER1G3B'); ?></td>
		    <td  class="bbr"></td>
		    <td  class="bbr"></td>
		    <td></td>	
	    </tr>
	    <tr>
		    <td></td>
		    <td  class="bbr"></td>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER3G1A'); ?></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb"><?php GetTeams('Eastern', 'ER1G4A'); ?></td>
		    <td  class="bbr"></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbr"></td>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER2G2B'); ?></td>
		    <td></td>
		    <td></td>
	    </tr>	
	    <tr>
		    <td class="bbb bbr"><?php GetTeams('Eastern', 'ER1G4B'); ?></td>
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
  		$num_rows = mysql_num_rows($results);
	  	if ($num_rows > 0 ) {
		  	$query = "SELECT name FROM teams where id='" . $team . "' LIMIT 1";
		  	$results = mysql_query($query) or die(mysql_error());
		
			$row = mysql_fetch_array($results,  MYSQL_ASSOC);
			echo $row['name'];
		} 	   
	  }
	
    }

  ?>


  <!-- Javascript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery. fall back to local if necessary -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
  <script>!window.jQuery && document.write(unescape('%3Cscript src="js/libs/jquery-1.4.2.js"%3E%3C/script%3E'))</script>
  
  
  <!-- scripts concatenated and minified via ant build script-->
  <script src="js/plugins.js"></script>
  <script src="js/script.js"></script>
  <!-- end concatenated and minified scripts-->
  
  
  <!--[if lt IE 7 ]>
    <script src="js/libs/dd_belatedpng.js"></script>
    <script> DD_belatedPNG.fix('img, .png_bg'); //fix any <img> or .png_bg background-images </script>
  <![endif]-->

<script>
    $("#WesternBracket").hide();
    $("#StanleyCupBracket").hide();
  
  	


  	$('.bbb').on('click', function(){
  		$this = $(this);
  		var selectedTeam = $this.text();
  		console.log("Selected Team: " + selectedTeam);
  		console.log("Text: " + $this.parent('table').children('.bbb .bbr').text());

  	});


  	$("select").change(function() {
      // save the field's new value
      $.post("bracketPost.php", { fields: $(this).attr('id'), value: $(this).val() }, 
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