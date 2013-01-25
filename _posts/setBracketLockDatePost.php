

<?php
  
 include('../inc/dbConnect.php');

if (isset($_POST['round'])){
  
  $year = date("Y");
  $round = $_POST['round'];
  $date = $_POST['date']; 
  
  
  $query = "SELECT * " . 
           "FROM LockPicks " .
           "WHERE " . 
           "Round = '" . $round .  "' " .  
           "AND Year = '" . $year . "'";

  $results = mysql_query($query) or die(mysql_error());
  //$result = mysql_fetch_assoc($query);
  $num = mysql_num_rows($results);
  
  if($num >= 1) {
    $query = "UPDATE LockPicks"
    . " SET"
    . " LockDate = '" . $date . "'"
    . " WHERE "
    . " Round = '" . $round   
    . "' AND year = '" . $year . "'";
        $results = mysql_query($query) or die(mysql_error());
  }else{
    $query = "INSERT INTO LockPicks"
           . " (Year, Round, LockDate)" 
           . " VALUES"
           . " ('" . $year . "', '" . $round . "', '" . $date . "' )";
    $results = mysql_query($query) or die(mysql_error());  
  }
 
  echo "Database Updated";
}else{

    die('Error: Invaild data');

}

?>  