<?php
  session_start();  
 include('../inc/dbConnect.php');

if (isset($_POST['round']) && isset($_SESSION['userIdNumber'])){
  
  $year = date("Y");
  $round = $_POST['round'];
  $team = $_POST['team'];  //ex. ER1G1A
  $userNameId = $_SESSION['userIdNumber'];
  
  $query = "SELECT * " . 
           "FROM Picks " .
           "WHERE " . 
           "round = '" . $round .  "' " .
           "AND user = '" . $userNameId .  "' " .  
           "AND Year = '" . $year . "'";

  $results = mysql_query($query) or die(mysql_error());
  //$result = mysql_fetch_assoc($query);
  $num = mysql_num_rows($results);
  //echo $num;
  if($num >= 1) {
    //echo "\nUpdate\n";
    $query = "UPDATE Picks"
        .  " SET"
        .  " pick = (select id from teams where name = '" . $team . "') "
        .  " WHERE "
        .  " round = '" . $round
        .  "' AND user = '" . $userNameId  
        .  "' AND year = '" . $year . "'";
        $results = mysql_query($query) or die(mysql_error());
  }else{
    //echo "\nInsert\n";
    $query = "INSERT INTO Picks"
           . " (Year, round, pick, user)" 
           . " VALUES"
           . " ('" . $year . "', '" . $round . "', (select id from teams where name = '" . $team . "'), '" . $userNameId . "' )";
    $results = mysql_query($query) or die(mysql_error());  
  }
 
  echo "Database Updated";
}else{

    die('Error: Invaild data');

}

?>  