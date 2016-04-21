<?php
$xley_con = 'db is unreachable';

$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = '';
$mysql_db = 'your_database_name';


if (!@mysql_connect($mysql_host, $mysql_user, $mysql_pass)||!@mysql_select_db($mysql_db)){
        die ($xley_con);
}

$mysqli = new MySQLi($mysql_host,$mysql_user,$mysql_pass,$mysql_db);

?>

