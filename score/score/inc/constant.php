<?php
error_reporting(1);
define("HOST", "localhost");    
define("USER", "root");    
define("PASSWORD", "");  
define("DATABASE", "dabatase");  
define("CAN_REGISTER", "any");
define("DEFAULT_ROLE", "member");
define("SECURE", FALSE); 
define("KEYY", "!4a4l3ng"); 

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
?>
