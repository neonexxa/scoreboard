<?php
include_once '../inc/constant.php';
include_once '../inc/commonfunc.php';
 
function sec_session_start() {
    $session_name = 'session_id'; 
    $secure = SECURE;
    $httponly = true;
    if (ini_set('session.use_only_cookies', 1) === FALSE) {
        //header("Location: ../error.php?err=Could not initiate a safe session (ini_set)");
        header("Location: index.php");
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
 
    // All login attempts are counted from the past 2 hours. 
    $valid_attempts = $now - (15 * 60);
 
    if ($stmt = $mysqli->prepare("SELECT time 
                             FROM team_login_attempts 
                             WHERE team_name = ? 
                            AND time > '$valid_attempts'")) {
        $stmt->bind_param('i', $team_name);
 
        $stmt->execute();
        $stmt->store_result();
 
        if ($stmt->num_rows > 5) {
            return true;
        } else {
            return false;
        }
    }
}

function login_check_admin($mysqli) {

    if (isset($_SESSION['username'], 
                        $_SESSION['login_string'])) {
 
        $username = $_SESSION['username'];
        $login_string = $_SESSION['login_string'];
 
        $user_browser = $_SERVER['HTTP_USER_AGENT'];
		
        if ($stmt = $mysqli->prepare("SELECT pwd 
                                      FROM judge_cred 
                                      WHERE username = ? LIMIT 1")) {
            $stmt->bind_param('i', $username);
            $stmt->execute();   
            $stmt->store_result();
			
            if ($stmt->num_rows == 1) {
                $stmt->bind_result($password);
                $stmt->fetch();
                $login_check = hash('sha512', $password . $user_browser) . "jjjjjuuuuddddggeeeee";
                if ($login_check == $login_string) {
                    return true;
                } else {
                    //echo "not logged in1";
                    return false;
                }
            } else {
           //     echo "not logged in2<br/>";
                return false;
            }
        } else {
          //  echo "not logged in3";
            return false;
        }
    } else {
       // echo "not logged in4";
        return false;
    }
}


function login_judge($username, $password, $mysqli) {
$now = time();
$client_ip = get_client_ip();
    if ($stmt = $mysqli->prepare("SELECT id, username, pwd, active FROM judge_cred WHERE username = ? LIMIT 1")) {
        $stmt->bind_param('s', $username);  
        $stmt->execute();  
        $stmt->store_result();
 
        $stmt->bind_result($id, $username, $db_password, $active);
        $stmt->fetch();
		$salt = $username . "adm";
		$password = hash('sha512', $password . $salt);
        if ($stmt->num_rows == 1) {  //if there is any result from query and the user is active
                if (($db_password == $password) && ($active)) { //if passwd from form same as from db and user is active
                    $user_browser = $_SERVER['HTTP_USER_AGENT'];
                    $teamname = cleaner1($username);
                    $_SESSION['username'] = $username;
					$_SESSION['login_string'] = hash('sha512', $password . $user_browser) . "jjjjjuuuuddddggeeeee";
					echo hash('sha512', $password . $user_browser) . "jjjjjuuuuddddggeeeee";
					$mysqli->query("INSERT INTO judge_login_log(username, ip, time) VALUES ('$username',' $client_ip', '$now')");
                    return true;
                } else {
				echo $password;
				echo "<br/>";
				echo $db_password;
                return false;
                }
        } 
		else {
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