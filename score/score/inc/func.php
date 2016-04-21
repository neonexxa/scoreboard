<?php

include_once 'constant.php';
include_once 'commonfunc.php';
 
function sec_session_start() {
    $session_name = 'session_id'; 
    $secure = SECURE;
    $httponly = true;
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        exit();
    }
    $cookieParams = session_get_cookie_params();
    session_set_cookie_params($cookieParams["lifetime"],
        $cookieParams["path"], 
        $cookieParams["domain"], 
        $secure,
        $httponly);
    session_name($session_name);
    session_start();          
    session_regenerate_id(); 
}

function checkbrute($team_name, $mysqli) {
    $now = time();
 
    $valid_attempts = $now - (15 * 60);
 
    if ($stmt = $mysqli->prepare("SELECT time 
                             FROM team_login_attempts 
                             WHERE team_name = ? 
                            AND time > '$valid_attempts'")) {
        $stmt->bind_param('s', $team_name);
 
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    }
}

function login_check_participant($mysqli) {

    if (isset($_SESSION['team_name'], 
                        $_SESSION['login_string'])) {
 
        $team_name = $_SESSION['team_name'];
        $login_string = $_SESSION['login_string'];
 
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
		
        if ($stmt = $mysqli->prepare("SELECT pwd FROM team_cred WHERE team_name =? LIMIT 1")) {
            $stmt->bind_param('s', $team_name);
            $stmt->execute();   
            $stmt->store_result();
			
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser) . "goodluckhavefun";
                if ($login_check == $login_string) {
                    return true;
                } else {
                 //   echo "not logged in1";
                    return false;
                }
            } else {
                //echo "not logged in2<br/>";
                return false;
            }
        } else {
            //echo "not logged in3";
            return false;
        }
    } else {
        //echo "not logged in4";
        return false;
    }
}


function login_participant($team_name, $password, $mysqli) {
    
	$now = time();
	$client_ip = get_client_ip();
    if ($stmt = $mysqli->prepare("SELECT id, team_name, pwd, active 
        FROM team_cred
       WHERE team_name = ?
        LIMIT 1")) {
    echo "<script>alert(1)</script>";   
        $stmt->bind_param('s', $team_name);  
        $stmt->execute();  
        $stmt->store_result();
 
        $stmt->bind_result($id, $teamname, $db_password, $active);
        $stmt->fetch();
		$salt = $teamname . "eth";
		$password = hash('sha512', $password . $salt);
        if ($stmt->num_rows == 1) {
            //check if acc lock
            
 
            if (checkbrute($teamname, $mysqli) == true) {
                //acc locked
                
                return false;
            } else {
                
                if (($db_password == $password) && ($active)) {
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    $teamname = cleaner1($teamname);
                    $_SESSION['team_name'] = $teamname;
					//echo $_SESSION['team_name'];
                    $_SESSION['login_string'] = hash('sha512', $password . $user_browser) . "goodluckhavefun";
					//echo hash('sha512', $password . $user_browser) . "goodluckhavefun";
					$mysqli->query("INSERT INTO team_login_success(team_name, ip, time,table_ref)
                                    VALUES ('$team_name', '$client_ip', '$now','LS')");
                    return true;

                } else {
					die("attempts failed");
                    /*echo $password;
					echo "<br/>";
					echo $db_password;
					echo "<br/>";
					echo $_SESSION['team_name'];
					echo "<br/>";
					echo $team_name;
					echo "<br/>";

*/
                    $now = time();
                    
                   
                    $mysqli->query("INSERT INTO team_login_attempts(team_name, ip, time,table_ref)
                                    VALUES ('$team_name', '$client_ip', '$now','LA')");
                    return false;
                    
                }
            }
        } else {
 			echo "try harder2";
            return false;

        }
    }
}


function esc_url($url) {
 
    if ('' == $url) {
        return $url;
    }
 
    $url = preg_replace('|[^a-z0-9-~+_.?#=!&;,/:%@$\|*\'()\\x80-\\xff]|i', '', $url);
 
    $strip = array('%0d', '%0a', '%0D', '%0A');
    $url = (string) $url;
 
    $count = 1;
    while ($count) {
        $url = str_replace($strip, '', $url, $count);
    }
 
    $url = str_replace(';//', '://', $url);
 
    $url = htmlentities($url);
 
    $url = str_replace('&amp;', '&#038;', $url);
    $url = str_replace("'", '&#039;', $url);
 
    if ($url[0] !== '/') {
        return '';
    } else {
        return $url;
    }
}


?>
