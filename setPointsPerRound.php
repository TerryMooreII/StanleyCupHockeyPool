<?php
  include('inc/header.php');
  include('inc/functions.php');
  
  adminRequired($_SESSION['userIdNumber']);

?>

  <div id="statusMessage"></div>
  
  <div id="pointsPerRound">
      
		<table>
   			<tr>
   				<td colspan='2'>Set Points Per Round</td>
  			</tr>
   			<tr>
   				<td>Quarter Finals</td>
   				<td><input type="number" min="0" max="99" id="Round1" value="<?php echo getPointsPerRound('1') ?>" /></td>
  			</tr>
   			<tr>
   				<td>Semi Finals</td>
   				<td><input type="number" min="0" max="99" id="Round2" value="<?php echo getPointsPerRound('2') ?>" /></td>
  			</tr>
  			<tr>
   				<td>Conference Finals</td>
   				<td><input type="number" min="0" max="99" id="Round3" value="<?php echo getPointsPerRound('3') ?>" /></td>
  			</tr>
  			<tr>
   				<td>Stanley Cup Finals</td>
   				<td><input type="number" min="0" max="99" id="Round4" value="<?php echo getPointsPerRound('4') ?>" /></td>
  			</tr>
  			<tr>
   				<td colspan='2'><input type="button" id="submitPointsPerRound" value="Submit" /></td>
  			</tr>
  			<tr>
  				<td colspan="2" id="msg"> </td>
  			</td>
   		</table>
	</div>



<?php
	include 'inc/footer.php';
?>

