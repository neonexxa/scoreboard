<?php

			$m=0;
$sth = $mysqli->prepare("SELECT value FROM configuration  WHERE setting = 'current_round'");
			$sth->execute();
			$sth->bind_result($crdb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$round[] = $crdb;
				$m=$m+1;
								
			}

for($i=0; $i<$m;$i++) {

	$l=$i+1;
		
$sth = $mysqli->prepare("SELECT title FROM game_round  WHERE round_ref = '$round[$i]'");
			$sth->execute();
			$sth->bind_result($crnamedb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$roundname[] = $crnamedb;
												
			}
							echo "$roundname[$i]";


							
					}

$mysqli->close();

?>