<?php			
			$sth = $mysqli->prepare("SELECT *, ( FQ1 + FQ2 + FQ3 + FQ4 + FQ5 + FQ6 + FQ7 + FQ8 + FQ9 + BONUS) AS total FROM F_fixture where team_ref != 'qref' order by total desc");
			$sth->execute();
			$sth->bind_result($iddb,$refdb,$teamrefdb,$Q1db,$Q2db,$Q3db,$Q4db,$Q5db,$Q6db,$Q7db,$Q8db,$Q9db,$QBdb,$totaldb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$teamref[] = $teamrefdb;
				$Q1[] = $Q1db;
				$Q2[] = $Q2db;
				$Q3[] = $Q3db;
				$Q4[] = $Q4db;
				$Q5[] = $Q5db;
				$Q6[] = $Q6db;
				$Q7[] = $Q7db;
				$Q8[] = $Q8db;
				$Q9[] = $Q9db;
				$QB[] = $QBdb;
				$total[] = $totaldb;				
			} 
			
			
			echo "<div class='scoreboard_final'>";
			echo "
			<table><tr><td rowspan='2'>Team</td><td colspan='10'>Challenge</td><td rowspan='2'><b>TOTAL</b></td></tr>
			<tr>
			<td><b>1</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 1) . " pts</span></td>
			<td><b>2</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 2) . " pts</span></td>
			<td><b>3</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 3) . " pts</span></td>
			<td><b>4</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 4) . " pts</span></td>
			<td><b>5</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 5) . " pts</span></td>
			<td><b>6</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 6) . " pts</span></td>
			<td><b>7</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 7) . " pts</span></td>
			<td><b>8</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 8) . " pts</span></td>
			<td><b>9</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 9) . " pts</span></td>
			<td><b>Bonus</b><br/><span class='scoreboard_final_points'>" . getchalpoints($mysqli, 'B') . " pts</span></td>
			</tr>";
			for($i=0; $i<21;$i++) {
			echo "<tr>
			<td>" . getteamname($mysqli,$teamref[$i]) . "</td>
			<td>" . scoreboardtick($Q1[$i]) . "</td>
			<td>" . scoreboardtick($Q2[$i]) . "</td>
			<td>" . scoreboardtick($Q3[$i]) . "</td>
			<td>" . scoreboardtick($Q4[$i]) . "</td>
			<td>" . scoreboardtick($Q5[$i]) . "</td>
			<td>" . scoreboardtick($Q6[$i]) . "</td>
			<td>" . scoreboardtick($Q7[$i]) . "</td>
			<td>" . scoreboardtick($Q8[$i]) . "</td>
			<td>" . scoreboardtick($Q9[$i]) . "</td>
			<td>" . scoreboardtick($QB[$i]) . "</td>
			<td>$total[$i]</td>
			</tr>
			";
			}
			echo "</table></div>";
			?>