<?php

$username = $_REQUEST['u'];
$password = $_REQUEST['p'];
$salt = $username . "nexxa";
//$salt = $username . "eth";
$password = hash('sha512', $password . $salt);

echo $username;
echo "<br/>";
echo $password;

?>
