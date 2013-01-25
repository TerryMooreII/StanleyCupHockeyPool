

<?php
  
include('../inc/dbConnect.php');

if (isset($_POST['fields'])){
  
  $year = date("Y");
  $team = $_POST['value'];
  $fields = $_POST['fields'];  //ex. ER1G1A
  
  $query = "UPDATE Brackets"
	  . " SET"
	  . " Team = '" . $team . "'"
	  . " WHERE "
	  . " round = '" . $fields   
	  . "' AND year = '" . $year . "'";

   $results = mysql_query($query) or die(mysql_error());
   	
  if (mysql_affected_rows()==0) {
    $query = "INSERT INTO Brackets"
           . " (Year, Round, Team)" 
           . " VALUES"
           . " ('" . $year . "', '" . $fields . "', '" . $team . "')";
    $results = mysql_query($query) or die(mysql_error());
    
  }

  $conference = substr($fields, 0,1);
  $round = substr($fields, 2, 1);
  $game = substr($fields, 4, 2);//WR1G1A
  $rank = 0;

  if ($round == '1'){
    switch ($game) {
      case "1A":
        $rank=1;
        break;
      case "2A":
        $rank=2;
        break;
      case "3A":
        $rank=3;
        break;
      case "4A":
        $rank=4;
        break;
      case "1B":
        $rank=8;
        break;
      case "2B":
        $rank=7;
        break;
      case "3B":
        $rank=6;
        break;
      case "4B":
        $rank=5;
        break;
      default:
        $rank=0;
        break;
    }  

    //Update ranking
      $query = "UPDATE Rank"
      . " SET"
      . " Team = '" . $team . "'"
      . " WHERE "
      . " conference = '" . $conference . "'" 
      . " AND rank = '" . $rank   
      . "' AND year = '" . $year . "'";

     $results = mysql_query($query) or die(mysql_error());
      
    if (mysql_affected_rows()==0) {
      $query = "INSERT INTO Rank"
             . " (Year, Rank, Team, Conference)" 
             . " VALUES"
             . " ('" . $year . "', '" . $rank . "', '" . $team . "', '" . $conference . "')";
      $results = mysql_query($query) or die(mysql_error());
      
    }
  }
  echo "Database Updated";  
  
}else{
    
    die('Error: Invaild data');

}

?>