<head>
<script src="js/jquery.1.7.1.js "></script>
<script src="js/form_chal.js "></script>
</head>
			<?php			
			$queryround = "select title from game_round where round_ref='G5'";
			echo "<br/>";
			
			$teamref = getteamref($mysqli,$_SESSION['team_name']);
			
			$sth = $mysqli->prepare("SELECT soalan_ref FROM G5_solved where team_ref = '$teamref'");
			$sth->execute();
			$sth->bind_result($soalan_ref);
			$i=0;
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$question_solved[] = $soalan_ref;
			} 

			$sql = "SELECT question, assigned_to, released FROM bank_soalan WHERE assigned_to LIKE ? order by assigned_to";
			$stmt = $mysqli->stmt_init();
			$group = "%G5%";
			$data = array();
			
			if($stmt->prepare($sql)){
			$stmt->bind_param('s', $group);
			$stmt->execute();

			$question = null;
			$assigned_to = null;
			$stmt->bind_result($question,$assigned_to,$released);
			$nochal = 0;
			echo "<div id='chalbox'>";
			while ($stmt->fetch()) {
				$statuschal = "";
				$endingtag = "";
				
				if ($released =='0') {
					$statuschal = "<img src='../images/lock.png' title='Challenge is yet to be released'/>";
					$endingtag = "<br/>";
				}
				
				if (in_array($assigned_to, $question_solved) && ($statuschal == "")) {
					$statuschal = "<img src='../images/green_tick.png' title='Solved'/>";
					$endingtag = "<br/>";
				}
					echo "<span id='head1'>Challenge " . ++$nochal . "</span><span style='padding-left:115px'id='status_chal" . $nochal . "'>$statuschal</span><br/>" . $endingtag;
				if ($statuschal == "") {
					echo "<div id='chalbox_chal" . $nochal . "' class='chalbox_individual'>";
					echo $question;
					$stringg = $question . "::::" . $assigned_to;
					$encryptd = encryptt($stringg, KEYY);
					$encryptd = rawurlencode($encryptd);
					$md5str = md5($encryptd);
					echo "<form id='chal" . $nochal . "' method='POST'>";
					echo "<input id='flag_chal" . $nochal . "'class='flagfield' name='flag' type='text' placeholder='Enter Flag for Challenge " . $nochal . " here' />";
					echo "<input id='submit" . $nochal . "' type='submit' value='submit'>";
					echo "<input id='identifier_chal" . $nochal . "' name='identifier' value='$encryptd' hidden='true'/>";
					echo "</form></div><br/><br/>";
				}
			}
			echo "</div>";
			$stmt->close(); 
}
		
			?>