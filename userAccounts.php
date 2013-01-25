<?php
  include('inc/header.php');
  include('inc/functions.php');
  
  adminRequired($_SESSION['userIdNumber']);

?>


  <div id="statusMessage"></div>


  <div id="addNewUser">
      
      <div id="menu">
      	<ul>
      		<li><a href="#" class="editUser" data-label="Add" data-edit="<?php echo "register"?>">Add New User</a></li>
      	</ul>
      </div>

      <table class="bracketTable">
	<tr>
	  <th>Full Name</th><th>User ID</th><th>E-Mail Address</th><th>Admin</th><th>Modify</th>
	</tr>		
	
	 <?php
	   $query = "SELECT * FROM Users";
	   $results = mysql_query($query) or die(mysql_error());
	
	   while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {
	   ?>
	    <tr class="bbb">
	      <td><?php echo $row['FullName']; ?></td>
	      <td><?php echo $row['UserName']; ?></td>
	      <td><?php echo $row['EmailAddress']; ?></td>
	      <?php
	      if ($row['isAdmin'] == 'TRUE'){
		$admin = "&radic;";
	      }else{
		$admin = "";
	      }
	      ?>
	      <td><?php echo $admin; ?></td>
	      <td><a href="#" class="editUser" data-label="Update" data-edit="<?php echo $row['id'];?>">Edit</a> /
	      <a href="#" class=deleteUser id=<?php echo $row['id'];?>>Delete</a>
	      </td>
	    </tr>
	   <?php
	   }
	  ?>
      </table>

  </div> 

<?php include 'inc/footer.php' ?>

<script type="text/javascript">




</script>














