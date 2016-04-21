<?php
include_once 'constant.php';
include_once 'func.php';
sec_session_start();
 
if (isset($_REQUEST['team_name'], $_REQUEST['p'])) {
    $team_name = $_REQUEST['team_name'];
    $password = $_REQUEST['p']; 
echo $team_name;
	echo $password;
    if (login_participant($team_name, $password, $mysqli) == true) {
        // Login success 
        header('Location: ../main.php');
        
    } else {
        // Login failed
        die("why"); 
        header('Location: ../index.php');
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}



?>
