<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';
sec_session_start();
if (login_check_participant($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
unset($_SESSION['current_page']);
$_SESSION['current_page'] = "main";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UTPHAX'14</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="templatemo_container">

<?php
include "top.php";
?>
        
    <div class="templatemo_content_top"></div>
    <div id="templatemo_content">
      <div id="templatemo_menu">
        <div class="menuleft"></div>
<?php
include 'menu.php';
?>
            <div class="menuright"></div>    	
        </div>
        
      <div id="templatemo_boxarea">
<div class="eventlogbox">

<?php

	$sql = "select time,message from noticeboard order by time asc";
	$stmt = $mysqli->stmt_init();
	$group = "%G1%";
	$data = array();
			
	if($stmt->prepare($sql)){
	$stmt->execute();

	$question = null;
	$assigned_to = null;
	$stmt->bind_result($time,$msg);
	while ($stmt->fetch()) {
		echo gmdate("h:i:s A", $time+25200);
		echo " - ";
		echo $msg;
		echo " <br/><br/> ";
				}
			}
			$stmt->close(); 

?>

</div>



	  </div>

        
    </div>
    <div class="templatemo_content_bottom"></div>
              

    	<div id="templatemo_footer">have fun! =)<a href="#"><b></b></a> <!-- Credit: www.templatemo.com --></div></div>
<!-- templatemo 026 hosting -->
<!-- 
Hosting Template 
http://www.templatemo.com/preview/templatemo_026_hosting 
-->
</body>
</html>