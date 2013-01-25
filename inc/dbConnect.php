
<?php
#connect to database
$db_host="localhost";
$db_user="root";
$db_pass="tlmii2";
$database="stanleycup";

$dbconnect = mysql_connect($db_host, $db_user, $db_pass);

mysql_select_db($database, $dbconnect);
?>
