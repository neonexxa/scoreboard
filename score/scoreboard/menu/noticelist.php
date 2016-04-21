<?php

			$m=0;
$sth = $mysqli->prepare("SELECT id,message FROM noticeboard  ");
			$sth->execute();
			$sth->bind_result($iddb,$mesdb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$number[] = $iddb;
				$message[] = $mesdb;
				$m=$m+1;
								
			}

for($i=0; $i<$m;$i++) {

	$l=$i+1;
echo "
										<tr>
											<td>$number[$i]</td>
											<td>$message[$i]</td>
										</tr>
										";
									}
$mysqli->close();
?>