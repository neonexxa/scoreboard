<?php 

require 'connected.php';

$satu=$_POST['email']; 
$mypassword=$_POST['pass']; 
$table="wad";

$satu = stripslashes($satu);
$mypassword = stripslashes($mypassword);
$satu = mysql_real_escape_string($satu);
$mypassword = mysql_real_escape_string($mypassword);
$sql="SELECT * FROM `$table` WHERE `email`='$satu' and `password`='$mypassword'";
$result=mysql_query($sql);

$count=mysql_num_rows($result);


if($count==1){
				session_register("satu");
				session_register("mypassword"); 
				header("location:login_success.php");
				}
				else {
				echo "Wrong Username or Password";
			}

?>
