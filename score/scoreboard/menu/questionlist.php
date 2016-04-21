<?php
			$m=0;
$sth = $mysqli->prepare("SELECT question, flag, points, assigned_to FROM bank_soalan  order by assigned_to asc");
			$sth->execute();
			$sth->bind_result($quesdb,$flagdb,$pointdb,$qiddb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$question[] = $quesdb;
				$qflag[] = $flagdb;
				$marks[] = $pointdb;
				$qid[] = $qiddb;
				$m=$m+1;
								
			}

for($i=0; $i<$m;$i++) {

	$l=$i+1;
echo "
										<tr>
											<td>$l</td>
											<td>$question[$i]</td>
											<td>$qid[$i]</td>
											<td>$marks[$i]</td>
											<td>$qflag[$i]</td>
										</tr>
										";
									}

$mysqli->close();

?>