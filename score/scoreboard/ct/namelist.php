<?php
/*$sth = $mysqli->prepare("SELECT * FROM team_cred ");
			$sth->execute();
			$sth->bind_result($iddb,$tmdb,$passdb,$logindb,$unidb,$playdb,$xtivedb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$number[] = $iddb;
				$teamname[] = $tmdb;
				$password[] = $passdb;
				$playing[] = $playdb;
								
			}
*/
			$m=0;
$sth = $mysqli->prepare("SELECT * FROM group_id_mapping  order by identifier asc");
			$sth->execute();
			$sth->bind_result($identdb,$mapdb,$teamdb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$teamname[] = $teamdb;
				$mapid[] = $mapdb;
				$m=$m+1;
								
			}

for($i=0; $i<$m;$i++) {

	$l=$i+1;
echo "
										<tr>
											<td>$l</td>
											<td>$teamname[$i]</td>
											<td>$mapid[$i]</td>
										</tr>
										";
									}
$mysqli->close();
?>