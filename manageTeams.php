<?php
  include('inc/header.php');
  include('inc/functions.php');
?>


<div id="teams">
	
	<table>
	<tr>
	<th>Name</th><th>Conference</th><th>Small</th><th>Medium</th><th>Active</th>
	</tr>
	<?php
		
		$query = "SELECT * FROM teams order by id;";
		$results = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($results,  MYSQL_ASSOC)) {

			echo "<tr data-id=\"" . $row['id'] . "\">";
			echo "<td>" . $row['name']. "</td>";
			echo "<td>" . $row['conference']. "</td>";
			echo "<td><img src=\"imgs/teamsSmall/" . $row['id']. ".png\" alt=\"".$row['name']."\" /></td>";
			echo "<td><img src=\"imgs/teamsMedium/" . $row['id']. ".png\" alt=\"".$row['name']."\" /></td>";
			
			//Active?
			$checked = "false";
			if ( $row['active'] == 1 ){
				$checked = 'true';
			}

			echo "<td><input type=\"checkbox\" CHECKED=". $checked ."\"  /></td>";
			echo "</tr>";		

		}
	?>
	</table>
</div>




<?php include 'inc/footer.php' ?>