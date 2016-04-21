<?php
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}

function getteamref($mysqli,$teamname) { //get group_id-mapping
    if ($stmt = $mysqli->prepare("select identifier from group_id_mapping where team= ?")) {
        $stmt->bind_param('s', $teamname);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($teamref);
        $stmt->fetch();
		return $teamref;
		$stmt->close();
		}
}

function getteamname($mysqli, $teamref) {
    if ($stmt = $mysqli->prepare("select team from group_id_mapping where identifier= ?")) {
        $stmt->bind_param('s', $teamref);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($teamname);
        $stmt->fetch();
		return $teamname;
		$stmt->close();
		}
}
/*
function encryptt($plaintext) {
	$key = pack('H*', "e3de57b53584fa2e1ab77e6452cb27c2632bd57e8b54763051cef08bc55abe0d");
	$key_size =  strlen($key);
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $ciphertext = mcrypt_encrypt(MCRYPT_RIJNDAEL_128, $key, $plaintext, MCRYPT_MODE_CBC, $iv);
    $ciphertext = $iv . $ciphertext;
    $ciphertext_base64 = base64_encode($ciphertext);
	return $ciphertext_base64;
}
*/

function encryptt($pure_string,$encryption_key) {
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, $encryption_key, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
	$encrypted_string = base64_encode($encrypted_string);
    return $encrypted_string;
}

function decryptt($encrypted_string,$encryption_key) {
	$encrypted_string = base64_decode($encrypted_string);
    $iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    $decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, $encryption_key, $encrypted_string, MCRYPT_MODE_ECB, $iv);
    return $decrypted_string;
}

function checkflag($mysqli, $question_string, $assigned_to, $flag,$team,$flagasal) {
	$flagasal = base64_encode($flagasal);
    $now = time();
	$teamref = getteamref($mysqli, $team);
	$current_round = get_current_round($mysqli);
	$current_round_solved = $current_round . "_solved";
	$current_round_attempts = $current_round . "_attempts";

	$querysolved = "select soalan_ref,team_ref from $current_round_solved where soalan_ref = '$assigned_to' AND team_ref = '$teamref'";
	if ($result = $mysqli->query($querysolved)) {
		$row = $result->fetch_assoc();
		$row_cnt = $result->num_rows;
		$result->close();
		if ($row_cnt > 0 ) {
			return "solved";
		}
	}
	
	$cooldown = $now - (30);
	$queryattempts = "select soalan_ref,team_ref from $current_round_attempts where soalan_ref = team_ref = '$teamref' AND time > '$cooldown'";
	if ($result = $mysqli->query($queryattempts)) {
		$row_cnt = $result->num_rows;
		$result->close();
		if ($row_cnt > 50 ) {
		$mysqli->query("INSERT INTO $current_round_attempts(team_ref, soalan_ref, time,table_ref)
						VALUES ('$teamref', '$assigned_todb', '$now','GA')");
		return "attempts";
		}
	}
    if ($stmt = $mysqli->prepare("select question,assigned_to,flag,points from bank_soalan where assigned_to=?")) {
		$stmt->bind_param('s', $assigned_to);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($questiondb,$assigned_todb,$flagdb,$points);
        $stmt->fetch();
		$stmt->close();
		$salt = substr($flag, 1, 1) . "!";

		$flag = hash('sha512', $flag . $salt);
		//echo $questiondb;
		$questiondb_string = substr($questiondb, 0, 5);
		if (($questiondb_string == $question_string) &&  ($flag == $flagdb)) {
			$mysqli->query("INSERT INTO $current_round_solved(team_ref, soalan_ref, time,table_ref,stringssubmitted)
							VALUES ('$teamref', '$assigned_todb', '$now','GS','$flagasal')");
			if ($current_round == "F") {
			$mysqli->query("UPDATE F_fixture SET $assigned_todb = '$points' where team_ref = '$teamref'");
			}
			return "true";
		}
		else {
			$mysqli->query("INSERT INTO $current_round_attempts(team_ref, soalan_ref, time,table_ref,stringssubmitted)
							VALUES ('$teamref', '$assigned_todb', '$now','GA','$flagasal')");
			return "false";
		}
		
		}
}

function get_current_round($mysqli) {
if ($stmt = $mysqli->prepare("select value from configuration where setting=?")) {
		$value= "current_round";
		$stmt->bind_param('s', $value);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($current_round);
        $stmt->fetch();
		$stmt->close();
		return $current_round;
		}

}

function get_round_name($mysqli,$round) {
if ($stmt = $mysqli->prepare("select title from game_round where round_ref=?")) {
		$stmt->bind_param('s', $round);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($round_name);
        $stmt->fetch();
		$stmt->close();
		return $round_name;
		}
}

function getteamscore($mysqli, $teamref, $round) {
    if ($stmt = $mysqli->prepare("select count(*) from " . $round . "_solved where team_ref=?")) {
        $stmt->bind_param('s', $teamref);  
		$stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($teamscore);
        $stmt->fetch();
		return $teamscore;
		$stmt->close();
		}
}

function getteamtime($mysqli, $teamref, $round) {
	$sth = $mysqli->prepare("SELECT time FROM " . $round . "_solved where team_ref = '$teamref' order by time desc limit 1");
	$sth->execute();
	$sth->store_result();
	$sth->bind_result($time);
	$sth->fetch();
	$starttime = getroundstarttime($mysqli, $round);
	if ($time <1) {
	return 0;
	}
	else {return $time - $starttime; }
}

function getroundduration($mysqli, $round) {
	return getroundendtime($mysqli, $round) - getroundstarttime($mysqli, $round);
}

function getroundstarttime($mysqli, $round) {
    if ($stmt = $mysqli->prepare("select value from configuration where setting=?")) {
		$roundstart = $round . "_start";
        $stmt->bind_param('s', $roundstart);  
		$stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($roundstartime);
        $stmt->fetch();
		return $roundstartime;
		$stmt->close();
		}
}

function getroundendtime($mysqli, $round) {
    if ($stmt = $mysqli->prepare("select value from configuration where setting=?")) {
		$roundend = $round . "_end";
        $stmt->bind_param('s', $roundend);  
		$stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($roundendtime);
        $stmt->fetch();
		return $roundendtime;
		$stmt->close();
		}
}




function getchalpoints($mysqli, $chalno) {
    if ($stmt = $mysqli->prepare("select points from bank_soalan where assigned_to = ?")) {
		$chalno = "FQ" . $chalno;
        $stmt->bind_param('s', $chalno);  
		$stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($chalpoints);
        $stmt->fetch();
		return $chalpoints;
		$stmt->close();
		}
}

function checkifplaywithvoid($mysqli,$teamref) {
	$void1 = getteamref($mysqli,'void1');
	$void2 = getteamref($mysqli,'void2');
	
	$sth = $mysqli->prepare("SELECT team1,team2 FROM `G1_fixture` where team1='$void1' or team2='$void2'");
	$sth->execute();
	$sth->bind_result($team1,$team2);
	$question_solved = array();
	while ($arr = $sth->fetch()) {
		if(($team1 == $teamref) && ($team2 == $void1)) {
		return 0;
		}
		elseif(($team2 == $teamref) && ($team1 == $void1)) {
		return 0;
		}
		elseif(($team1 == $teamref) && ($team1 == $void2)) {
		return 0;
		}
		elseif(($team2 == $teamref) && ($team1 == $void2)) {
		return 0;
		}
	} 

	return 1;
}

function checkifplaying($mysqli, $teamname) {
	$teamref = getteamref($mysqli,$teamname);
	$currentround = get_current_round($mysqli);
	
	if (checkifplaywithvoid($mysqli,$teamref)) { 
	
	//$sth = $mysqli->prepare("SELECT team1 FROM " . $currentround . "_fixture union SELECT team2 FROM " . $currentround . "_fixture");
	//$sth->execute();
	//$sth->bind_result($team);
	$question_solved = array();
	//while ($arr = $sth->fetch()) {
	//	$allteam[] = $team;
	//} 
	if (in_array($teamref, $allteam)) {
    return "1";
	}
	else {
	return "1";//0
	}
	}
	
	else {
	return "0";
	}
}


function scoreboardtick($chalstatus) {
if ($chalstatus > 1) {
return "<img src='images/green_tick.png'/>";
}
elseif ($chalstatus < 1) {
return "-";
}
}

function cleaner1($toclear) {
return $toclear;
}

function cleaner2($toclear) {  //validation on input from form.
return $toclear;
}

function cleaner3($toclear) {  //validation on input from POST
return $toclear;
}


?>
