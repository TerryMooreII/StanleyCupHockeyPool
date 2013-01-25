<?php
session_start();
   include 'inc/dbConnect.php';
   include('inc/functions.php');
  
?>



 <?php
 $admin = 0;
 if ( isset($_SESSION['userIdNumber']) ){
 	//admin = 1
 	$admin = isAdmin($_SESSION['userIdNumber']);
 }
    if ( isset( $_GET['id']) && $_GET['id'] != 'register' ){
    	
      

      $query = "SELECT * FROM Users WHERE id='" . $_GET['id'] . "'";
      $results = mysql_query($query) or die(mysql_error());

      while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
		$fullName = $row['FullName'];
		$emailAddress = $row['EmailAddress'];
		$isAdmin = $row['isAdmin'];
		$userId = $row['UserName'];
		$password = $row['password'];
		$action = 'u';
      }
    }else{
      $fullName = "";
      $emailAddress = "";
      $isAdmin = "FALSE";
      $userId = "";
      $password = "";
      $passMsg = "";
      $action = 'i';
     }
  ?>
  <div id="usersDropDown">
  		
      <table>
	 <tr>
	    <td class="alignRight bold">Full Name:</td>
	    <td><input type="text" id="fullName" name="fullName" value="<?php echo $fullName ?>" /></td>
	 </tr>

	 <?php
	 	if ( $admin == 1 || $_GET['id'] != 'register' ){
	 ?>
	 
	 <tr>
	    <td class="alignRight bold">User ID:</td>
	    <td>
		    <input type="text" name="userId" id="userId" value="<?php echo $userId ?>" />
		 
		<span class="errMsg"> </span>    
	    </td>
	 </tr>
	 <?php
	}else{
		?>
		<input type="hidden" name="userId" id="userId" value="<?php echo $userId ?>" />

	<?php
	}
	?>

	 <tr>
	    <td class="alignRight bold">Email Address:</td>
	    <td>
	    	<input type="text" id="emailAddress" name="emailAddress" value="<?php echo $emailAddress ?>" />
	    </td>
	 </tr>
	 <tr>
	    <td class="alignRight bold">Password:</td>
	    <td>
	    	<input type="password" id="password" name="password" value="<?php echo $password ?>" /><br /><?php //echo $pwdMsg ?>
	    </td>
	 </tr>
	 <?php
	 	if ( $admin == true  ){
	 ?>
	 <tr>
	    <td class="alignRight bold">Make Admin:</td>
	    <?php
	    if ($isAdmin == "TRUE"){ ?>
	      <td><input type="checkbox" id="isAdmin" name="isAdmin" value="TRUE" CHECKED/></td>
	    <?php
	    }else{
	    ?>
	      <td><input type="checkbox" id="isAdmin" name="isAdmin"  /></td>
	    <?php
	    }
	    } ?>
	 </tr>
	 <tr>
	    <td colspan="2" align="center">
	    <input type="hidden" id="id" name="id" value="<?php if ( isset($_GET['id']) ) {echo $_GET['id']; } ?>" />
	    <input type="hidden" id="action" name="action" value="<?php echo $action ?>" />
	    <input  type="button" id="submit" name="submit" value="Add/Update"/>
	 </tr>
	</table>
	</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.js"></script>
<script src="js/brackets.js"></script>
<script type="text/javascript">
	
	/*$('#fullName').on('change', enableButton);
	//$('#userId').on('change', enableButton);
	$('#emailAddress').on('change', enableButton);
	$('#password').on('change', enableButton);
	//$('#userId').on('change', enableButton);


		
	function enableButton(){
		fullName = $('#fullName').val();
		//userId = $('#userId').val();
		emailAddress = $('#emailAddress').val();
		password = $('#password').val();
		id = $('#id').val();
		console.log('id: ' + id);
		if ( fullName != '' && emailAddress != '' && password != '' ){
			
				console.log('here2');
				$('#submit').removeAttr('disabled');
			
		}
	}
*/
function enableButton(){
	return
}	



</script>







