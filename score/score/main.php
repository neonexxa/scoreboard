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
		$currentround = get_current_round($mysqli);
		echo "<div class='maindashboard'><span class='noticeboard'>[ <a href='noticeboard.php'>Noticeboard</a> ] </span><br/><br/>";
		echo "Team: " . $teamname;
		echo "<br/><br/>Current round: " . get_round_name($mysqli,$currentround);
		
		//echo getroundendtime($mysqli, $currentround);
		
		if (($currentround !="F") && ($currentround !="x")){
		if (checkifplaying($mysqli,$teamname)) {
		echo "<br/><br/>";
		$teamref = getteamref($mysqli,$teamname);
		if ($stmt = $mysqli->prepare("select team1, team2 from " . $currentround . "_fixture where team1=? or team2=?")) {
		$stmt->bind_param('ss', $teamref,$teamref);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($team1,$team2);
        $stmt->fetch();
		$stmt->close();
		}
		echo "<div class='box_score_main'>";
		echo "<table><tr><td>";
		//echo $teamname;
		echo @getteamname($mysqli,$team1);
		echo "</td><td>";
		echo @getteamname($mysqli,$team2);
		echo "</td></tr><tr><td class='score_figure'>" . @getteamscore($mysqli,$team1,$currentround) . "</td><td class='score_figure'>" . @getteamscore($mysqli,$team2,$currentround) . "</td></tr>";
		//echo "</td></tr><tr><td class='score_figure'>" . @getteamscore($mysqli,$team1,$currentround) . "</td><td class='score_figure'>" ."</td></tr>";
		echo "</table>";
		echo "</div>";
		}
		
		if (($currentround =="F") && ($currentround !="x")){ 
					include "final_scoreboard.php";
		}
		
		if ($currentround =="x") { echo "<br/><br/><div class='box_score_main'><table><tr><td id='box_score_main'>Get a break</td></tr></table></div>";}
		}
		
		else { echo "<br/><br/><b>You are not playing this match.</b>"; }
		
		?>
		</div></div>
		<br/>
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