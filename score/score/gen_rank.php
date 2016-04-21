<?php

$round = "G5";
$totalchal = "4";

			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . $round . "_fixture");
			$sth->execute();
			$sth->bind_result($team1db,$team2db);
			while ($arr = $sth->fetch()) {
			//echo "<br/>";
			//echo $team1db . " vs " . $team2db . " - ";
			//echo getteamscore($mysqli,'A1',$round) . " - " . getteamscore($mysqli,$team2db,$round);
				if ((getteamscore($mysqli,$team1db,$round)) > (getteamscore($mysqli,$team2db,$round)))	 {
				//echo getteamname($mysqli,$team1db) . " - " . $team1db . " Menang";
				//echo "<br/>";
				}
				elseif ((getteamscore($mysqli,$team1db,$round)) < (getteamscore($mysqli,$team2db,$round)))	 {
				//echo getteamname($mysqli,$team2db) . " - " . $team2db . " Menang";
				//echo "<br/>";
				}
				if ((getteamscore($mysqli,$team1db,$round)) == (getteamscore($mysqli,$team2db,$round)))	 {
				//echo "seri";
				//echo "<br/>";
				}
			}
			echo "<br/>";
			$matchno = 16;
			$sth = $mysqli->prepare("SELECT team1,team2 FROM " . $round . "_fixture");
			$sth->execute();
			$sth->bind_result($team1db,$team2db);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$team1[] = $team1db;
				$team2[] = $team2db;
			}

			for($i=0; $i<$matchno;$i++) {

			$team11 = getteamname($mysqli,$team1[$i]);
			$team22 = getteamname($mysqli,$team2[$i]);
			
			$team11check = substr($team11,0,4);
			$team22check = substr($team22,0,4);
			
			$teamscore11 = getteamscore($mysqli,$team1[$i],$round);
			$teamscore22 = getteamscore($mysqli,$team2[$i],$round);

			if (($team11check == "void") || ($team22check == "void")) {
			}
			
			else {
			
			if ($teamscore11 > $teamscore22)	 {
				echo $team11 . " Menang " . $team22;
				echo "<br/>";
				$mysqli->query("UPDATE rank_" . $round . " SET win = '1' where teamref = '$team1[$i]'");
				$mysqli->query("UPDATE rank_" . $round . " SET lose = '1' where teamref = '$team2[$i]'");
			}
			elseif ($teamscore11 < $teamscore22)	 {
				echo $team22 . " Menang " . $team11;
				echo "<br/>";
				$mysqli->query("UPDATE rank_" . $round . " SET win = '1' where teamref = '$team2[$i]'");
				$mysqli->query("UPDATE rank_" . $round . " SET lose = '1' where teamref = '$team1[$i]'");
			}
			if ($teamscore11 == $teamscore22)	 {
				echo $team11 . " Seri " .  $team22;
				echo "<br/>";
				
				$mysqli->query("UPDATE rank_" . $round . " SET draw = '1' where teamref = '$team2[$i]'");
				$mysqli->query("UPDATE rank_" . $round . " SET draw = '1' where teamref = '$team1[$i]'");
			}
			
			$team1chalsolved = getteamscore($mysqli, $team1[$i], $round);
			$team2chalsolved = getteamscore($mysqli, $team2[$i], $round);
			$mysqli->query("UPDATE rank_" . $round . " SET solved = '$team1chalsolved' where teamref = '$team1[$i]'");
			$mysqli->query("UPDATE rank_" . $round . " SET solved = '$team2chalsolved' where teamref = '$team2[$i]'");
			
			if ($team1chalsolved == $totalchal) { 
			$mysqli->query("UPDATE rank_" . $round . " SET strike = '1' where teamref = '$team1[$i]'"); 
			$team1time = getteamtime($mysqli, $team1[$i], $round);
			$mysqli->query("UPDATE rank_" . $round . " SET totaltime = '$team1time' where teamref = '$team1[$i]'");
			}
			elseif ($team1chalsolved < $totalchal) { 
			$team1time = getroundduration($mysqli, $round);
			$mysqli->query("UPDATE rank_" . $round . " SET totaltime = '$team1time' where teamref = '$team1[$i]'");
			}
			
			if ($team2chalsolved == $totalchal) { 
			$mysqli->query("UPDATE rank_" . $round . " SET strike = '1' where teamref = '$team2[$i]'"); 
			$team2time = getteamtime($mysqli, $team2[$i], $round);
			$mysqli->query("UPDATE rank_" . $round . " SET totaltime = '$team2time' where teamref = '$team2[$i]'");
			}
			elseif ($team2chalsolved < $totalchal) { 
			$team2time = getroundduration($mysqli, $round);
			$mysqli->query("UPDATE rank_" . $round . " SET totaltime = '$team2time' where teamref = '$team2[$i]'");
			}

			}
			
}
?>
