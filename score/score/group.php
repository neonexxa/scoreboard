<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
/*
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

			$sth = $mysqli->prepare("SELECT teamref,totaltime,solved,strike,lose,draw,win FROM rank_G1");
			$sth->execute();
			$sth->bind_result($G1_teamrefdb,$G1_totaltimedb,$G1_solveddb,$G1_strikedb,$G1_losedb,$G1_drawdb,$G1_windb);
			while ($arr = $sth->fetch()) {
				$G1_teamref[] = $G1_teamrefdb;
				$G1_totaltime[] = $G1_totaltimedb;
				$G1_solved[] = $G1_solveddb;
				$G1_strike[] = $G1_strikedb;
				$G1_lose[] = $G1_losedb;
				$G1_draw[] = $G1_drawdb;
				$G1_win[] = $G1_windb;
			} 
			
			$sth = $mysqli->prepare("SELECT teamref,totaltime,solved,strike,lose,draw,win FROM rank_G2");
			$sth->execute();
			$sth->bind_result($G2_teamrefdb,$G2_totaltimedb,$G2_solveddb,$G2_strikedb,$G2_losedb,$G2_drawdb,$G2_windb);
			while ($arr = $sth->fetch()) {
				$G2_teamref[] = $G2_teamrefdb;
				$G2_totaltime[] = $G2_totaltimedb;
				$G2_solved[] = $G2_solveddb;
				$G2_strike[] = $G2_strikedb;
				$G2_lose[] = $G2_losedb;
				$G2_draw[] = $G2_drawdb;
				$G2_win[] = $G2_windb;
			} 
			
			$sth = $mysqli->prepare("SELECT teamref,totaltime,solved,strike,lose,draw,win FROM rank_G3");
			$sth->execute();
			$sth->bind_result($G3_teamrefdb,$G3_totaltimedb,$G3_solveddb,$G3_strikedb,$G3_losedb,$G3_drawdb,$G3_windb);
			while ($arr = $sth->fetch()) {
				$G3_teamref[] = $G3_teamrefdb;
				$G3_totaltime[] = $G3_totaltimedb;
				$G3_solved[] = $G3_solveddb;
				$G3_strike[] = $G3_strikedb;
				$G3_lose[] = $G3_losedb;
				$G3_draw[] = $G3_drawdb;
				$G3_win[] = $G3_windb;
			} 
			
			$sth = $mysqli->prepare("SELECT teamref,totaltime,solved,strike,lose,draw,win FROM rank_G4");
			$sth->execute();
			$sth->bind_result($G4_teamrefdb,$G4_totaltimedb,$G4_solveddb,$G4_strikedb,$G4_losedb,$G4_drawdb,$G4_windb);
			while ($arr = $sth->fetch()) {
				$G4_teamref[] = $G4_teamrefdb;
				$G4_totaltime[] = $G4_totaltimedb;
				$G4_solved[] = $G4_solveddb;
				$G4_strike[] = $G4_strikedb;
				$G4_lose[] = $G4_losedb;
				$G4_draw[] = $G4_drawdb;
				$G4_win[] = $G4_windb;
			} 

			$sth = $mysqli->prepare("SELECT teamref,totaltime,solved,strike,lose,draw,win FROM rank_G5");
			$sth->execute();
			$sth->bind_result($G5_teamrefdb,$G5_totaltimedb,$G5_solveddb,$G5_strikedb,$G5_losedb,$G5_drawdb,$G5_windb);
			while ($arr = $sth->fetch()) {
				$G5_teamref[] = $G5_teamrefdb;
				$G5_totaltime[] = $G5_totaltimedb;
				$G5_solved[] = $G5_solveddb;
				$G5_strike[] = $G5_strikedb;
				$G5_lose[] = $G5_losedb;
				$G5_draw[] = $G5_drawdb;
				$G5_win[] = $G5_windb;
			} 
			$group = array("A", "B", "C", "D", "E", "F", "G", "H");
			$groupno = 0;
			
			echo "<div class='group_title'>Group" . $group[$groupno] . "</div>";
			echo "<div class='scoreboard'>";
			echo "<table><tr><td>team ref</td><td>team name</td><td>totaltime</td><td>solved</td><td>strike</td><td>lose</td><td>draw</td><td>win</td><td>points</td></tr>";
			for($i=0; $i<40;$i++) {
			$G_teamref[$i] = $G1_teamref[$i];
			if (substr(getteamname($mysqli,$G_teamref[$i]),0,4) != "void") {

			$G_totaltime[$i] = $G1_totaltime[$i] + $G2_totaltime[$i] + $G3_totaltime[$i] + $G4_totaltime[$i] + $G5_totaltime[$i];
			$G_solved[$i] = $G1_solved[$i] + $G2_solved[$i] + $G3_solved[$i] + $G4_solved[$i] + $G5_solved[$i];
			$G_strike[$i] = $G1_strike[$i] + $G2_strike[$i] + $G3_strike[$i] + $G4_strike[$i] + $G5_strike[$i];
			$G_lose[$i] = $G1_lose[$i] + $G2_lose[$i] + $G3_lose[$i] + $G4_lose[$i] + $G5_lose[$i];
			$G_draw[$i] = $G1_draw[$i] + $G2_draw[$i] + $G3_draw[$i] + $G4_draw[$i] + $G5_draw[$i];
			$G_win[$i] = $G1_win[$i] + $G2_win[$i] + $G3_win[$i] + $G4_win[$i] + $G5_win[$i];
			
			$points = 3*($G_win[$i]) + 1*($G_draw[$i]);
			echo "<tr><td>" . $G_teamref[$i] . "</td><td>" . getteamname($mysqli,$G_teamref[$i]) . "</td><td>" . $G_totaltime[$i] . "</td><td>" . $G_solved[$i] . "</td><td>" . $G_strike[$i] . "</td><td>" . $G_lose[$i] . "</td><td>" . $G_draw[$i] . "</td><td>" . $G_win[$i] . "</td><td>" . $points . "</td></tr>";
			}
			else { "</table></div>"; }
			if ((substr($G_teamref[$i],-1) == 5) && ($G_teamref[$i] != 'H5')) {
				++$groupno;
				echo "</table></div><div class='group_title'>Group" . $group[$groupno] . "</div><div class='scoreboard'><table><tr><td>team ref</td><td>team name</td><td>totaltime</td><td>solved</td><td>strike</td><td>lose</td><td>draw</td><td>win</td><td>points</td></tr>"; 
			}
			}
			
			
			
			echo "</table></div>";
*/			
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
