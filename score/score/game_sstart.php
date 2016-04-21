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
        <?php if (login_check_participant($mysqli) == false) {
		  echo "<span class='error'>You are not authorized to access this page.</span> Please <a href='index.php'>login</a>.";
		  die();
		}

	//echo $void1 = getteamref($mysqli,'void1');
	//echo $void2 = getteamref($mysqli,'void2');
		
		$teamname = $_SESSION['team_name'];
		
		if ($teamname !="void1") {
		die();
		}
		
		$currentround = get_current_round($mysqli);
		echo "<div class='maindashboard'>";
		echo "Team: " . $teamname;
		echo "<br/><br/>Current round: " . get_round_name($mysqli,$currentround);
		
		$now = time();
		
		$gamestart = $currentround . "_start";
		$gameend = $currentround . "_end";
		
		if (isset($_REQUEST['start'])) {
		$mysqli->query("UPDATE configuration SET value = '$now' where setting = '$gamestart'");
		echo "<br/><br/>Started at: $now - " . date("Y-m-d H:i:s", $now); 
		}
		
		if (isset($_REQUEST['stop'])) {
		$mysqli->query("UPDATE configuration SET value = '$now' where setting = '$gameend'");
		echo "<br/><br/>Ended at: $now - " . date("Y-m-d H:i:s", $now); 

		}
		
		
		?>
		</div></div>

        
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