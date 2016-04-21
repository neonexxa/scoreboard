<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';
sec_session_start();

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
        <?php 

		echo "<div class='score_stage_title'><a href='score.php'>Score</a></div>";
		
		
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G1') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G1_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1g1[] = $team11;
				$team2g1[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td colspan='2'>VS</td></tr>";
/*kat sini*/			for($i=0; $i<4;$i++) {
			
			if ((substr(getteamname($mysqli,$team1g1[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2g1[$i]),0,4) == "void")) {
			}
			else {
			echo "<tr><td class='team1cell'>" . getteamname($mysqli,$team1g1[$i]) . "</td><td class='team2cell'>" . getteamname($mysqli,$team2g1[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			
						echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G2') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G2_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1G2[] = $team11;
				$team2G2[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td colspan='2'>VS</td></tr>";
/*tukar */			for($i=0; $i<4;$i++) {
			
			if ((substr(getteamname($mysqli,$team1G2[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2G2[$i]),0,4) == "void")) {
			}
			else {
			echo "<tr><td class='team1cell'>" . getteamname($mysqli,$team1G2[$i]) . "</td><td class='team2cell'>" . getteamname($mysqli,$team2G2[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			
						echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G3') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G3_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1G3[] = $team11;
				$team2G3[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td colspan='2'>VS</td></tr>";
			for($i=0; $i<4;$i++) {
			
			if ((substr(getteamname($mysqli,$team1G3[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2G3[$i]),0,4) == "void")) {
			}
			else {
			echo "<tr><td class='team1cell'>" . getteamname($mysqli,$team1G3[$i]) . "</td><td class='team2cell'>" . getteamname($mysqli,$team2G3[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			
						echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G4') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G4_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1G4[] = $team11;
				$team2G4[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td colspan='2'>VS</td></tr>";
			for($i=0; $i<4;$i++) {
			
			if ((substr(getteamname($mysqli,$team1G4[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2G4[$i]),0,4) == "void")) {
			}
			else {
			echo "<tr><td class='team1cell'>" . getteamname($mysqli,$team1G4[$i]) . "</td><td class='team2cell'>" . getteamname($mysqli,$team2G4[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			
						echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G5') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G5_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1G5[] = $team11;
				$team2G5[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td colspan='2'>VS</td></tr>";
			for($i=0; $i<4;$i++) {
			
			if ((substr(getteamname($mysqli,$team1G5[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2G5[$i]),0,4) == "void")) {
			}
			else {
			echo "<tr><td class='team1cell'>" . getteamname($mysqli,$team1G5[$i]) . "</td><td class='team2cell'>" . getteamname($mysqli,$team2G5[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";

		?>
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
