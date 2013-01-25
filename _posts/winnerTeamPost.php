

<?php
  
include('../inc/dbConnect.php');
 
if (isset($_POST['fields'])){
  
  $year = date("Y");
  $team = $_POST['value'];
  $fields = $_POST['fields'];  //ex. ER1G1A
  
  $query = "UPDATE RoundWinningTeam"
	  . " SET"
	  . " Winner = '" . $team . "'"
	  . " WHERE "
	  . " Round = '" . $fields   
	  . "' AND Year = '" . $year . "'";

   $results = mysql_query($query) or die(mysql_error());
   	
  if (mysql_affected_rows()==0) {
    $query = "INSERT INTO RoundWinningTeam"
           . " (Year, Round, Winner)" 
           . " VALUES"
           . " ('" . $year . "', '" . $fields . "', '" . $team . "')";
    $results = mysql_query($query) or die(mysql_error());
    
  }
  
  echo "Database Updated";  
  
}else{

    die('Error: Invaild data');

}

?>