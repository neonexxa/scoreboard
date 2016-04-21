<head>
<script src="js/jquery.1.7.1.js "></script>
<script src="js/form_chal.js "></script>
</head>
<div id="scoreoverallbox">
			<?php
			echo "<span class='title'>Current Round</span> [ <a href='fixture.php'>Fixture</a> ] <br/>";
			$current_round = get_current_round($mysqli);
			$matchno = 5;
			if ($current_round == 'QF') { $matchno = 8; }
			if ($current_round == 'SF') { $matchno = 4; }
			if (($current_round != 'F') && ($current_round != 'x')) { 
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . $current_round . "_fixture");
			$sth->execute();
			$sth->bind_result($team1current,$team2current);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1currentround[] = $team1current;
				$team2currentround[] = $team2current;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'> ihackutp </td><td class='team2cell'>Team</td></tr>";
			for($i=0; $i<$matchno;$i++) {
			
			$team11 = getteamname($mysqli,$team1currentround[$i]);
			$team22 = getteamname($mysqli,$team2currentround[$i]);
			
			$team11check = substr($team11,0,4);
			$team22check = substr($team22,0,4);

			if (($team11check == "void") || ($team22check == "void")) {
			}
			
			else {
			
			echo "<tr><td>" . $team11 . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1currentround[$i], $current_round) . " - " . getteamscore($mysqli, $team2currentround[$i], $current_round) . "</td><td>" . $team22 . "</td></tr>";

			}
			}
			echo "</table></div>";
			}
			else {
			if ($current_round != 'x') {
			include "final_scoreboard.php";
			}
			}
			/*
			if ($current_round != 'x') {
			if ($current_round == "G1") {
			$showg1 = $showg2 = $showg3 = $showg4 = $showg5 = $showqf = $showsf = 0;
			}
			else {
			echo "<br/><br/><span class='title'>Previous Round</span></br>";
			}
			
			if ($current_round == "G2") {
			$showg2 = $showg3 = $showg4 = $showg5 = $showqf = $showsf = 0;
			$showg1 = 1;
			}
			
			if ($current_round == "G3") {
			$showg3 = $showg4 = $showg5 = $showqf = $showsf = 0;
			$showg2 = $showg1 = 1;
			}
			
			if ($current_round == "G4") {
			$showg4 = $showg5 = $showqf = $showsf = 0;
			$showg3 = $showg2 = $showg1 = 1;
			}

			if ($current_round == "G5") {
			$showg5 = $showqf = $showsf = 0;
			$showg4 = $showg3 = $showg2 = $showg1 = 1;
			}
			
			if ($current_round == "QF") {
			$showqf = $showsf = 0;
			$showg5 = $showg4 = $showg3 = $showg2 = $showg1 = 1;
			}			

			if ($current_round == "SF") {
			$showsf = 0;
			$showqf = $showg5 = $showg4 = $showg3 = $showg2 = $showg1 = 1;
			}	
			
			if ($current_round == "F") {
			$showsf = $showqf = $showg5 = $showg4 = $showg3 = $showg2 = $showg1 = 1;
			}
			
			if ($showsf) {
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'SF') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "SF_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1sf[] = $team11;
				$team2sf[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr><tr>";
			for($i=0; $i<4;$i++) {
			echo "<td>" . getteamname($mysqli,$team1sf[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1sf[$i], 'SF') . " - " . getteamscore($mysqli, $team2sf[$i], 'SF') . "</td><td>" . getteamname($mysqli,$team2sf[$i]) . "</td></tr>";
			}
			echo "</table></div>";
			}
			if ($showqf) {
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'QF') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "QF_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1qf[] = $team11;
				$team2qf[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr><tr>";
			for($i=0; $i<8;$i++) {
			echo "<td>" . getteamname($mysqli,$team1qf[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1qf[$i], 'QF') . " - " . getteamscore($mysqli, $team2qf[$i], 'QF') . "</td><td>" . getteamname($mysqli,$team2qf[$i]) . "</td></tr>";
			}
			echo "</table></div>";
			}
			if ($showg5) {
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G5') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G5_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1g5[] = $team11;
				$team2g5[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr><tr>";
			for($i=0; $i<16;$i++) {
			if ((substr(getteamname($mysqli,$team1g5[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2g5[$i]),0,4) == "void")) {
			}
			else {
			echo "<td>" . getteamname($mysqli,$team1g5[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1g5[$i], 'G5') . " - " . getteamscore($mysqli, $team2g5[$i], 'G5') . "</td><td>" . getteamname($mysqli,$team2g5[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			}
			if ($showg4) {
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G4') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G4_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1g4[] = $team11;
				$team2g4[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr><tr>";
			for($i=0; $i<16;$i++) {
			if ((substr(getteamname($mysqli,$team1g4[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2g4[$i]),0,4) == "void")) {
			}
			else {
			echo "<td>" . getteamname($mysqli,$team1g4[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1g4[$i], 'G4') . " - " . getteamscore($mysqli, $team2g4[$i], 'G4') . "</td><td>" . getteamname($mysqli,$team2g4[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			}
			if ($showg3) {
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G3') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G3_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1g3[] = $team11;
				$team2g3[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr><tr>";
			for($i=0; $i<16;$i++) {
			if ((substr(getteamname($mysqli,$team1g3[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2g3[$i]),0,4) == "void")) {
			}
			else {
			echo "<td>" . getteamname($mysqli,$team1g3[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1g3[$i], 'G3') . " - " . getteamscore($mysqli, $team2g3[$i], 'G3') . "</td><td>" . getteamname($mysqli,$team2g3[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			}
			if ($showg2) {
			echo "<div class='score_stage_title'>" . get_round_name($mysqli,'G2') . "</div>";
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . "G2_fixture");
			$sth->execute();
			$sth->bind_result($team11,$team22);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1g2[] = $team11;
				$team2g2[] = $team22;
			} 
			echo "<div class='scoreboard'>";
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr><tr>";
			for($i=0; $i<16;$i++) {
			if ((substr(getteamname($mysqli,$team1g2[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2g2[$i]),0,4) == "void")) {
			}
			else {
			echo "<td>" . getteamname($mysqli,$team1g2[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1g2[$i], 'G2') . " - " . getteamscore($mysqli, $team2g2[$i], 'G2') . "</td><td>" . getteamname($mysqli,$team2g2[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			}
			if ($showg1) {
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
			echo "<table><tr><td class='team1cell'>Team</td><td class='midcell'>VS</td><td class='team2cell'>Team</td></tr>";
			for($i=0; $i<16;$i++) {
			
			if ((substr(getteamname($mysqli,$team1g1[$i]),0,4) == "void") || (substr(getteamname($mysqli,$team2g1[$i]),0,4) == "void")) {
			}
			else {
			echo "<tr><td>" . getteamname($mysqli,$team1g1[$i]) . "</td><td class='scorecell'>" . getteamscore($mysqli, $team1g1[$i], 'G1') . " - " . getteamscore($mysqli, $team2g1[$i], 'G1') . "</td><td>" . getteamname($mysqli,$team2g1[$i]) . "</td></tr>";
			}
			}
			echo "</table></div>";
			}
			}
			*/
			?>
</div>
