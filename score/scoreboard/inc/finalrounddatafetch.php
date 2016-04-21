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

?>