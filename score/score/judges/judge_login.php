<?php
include_once '../inc/constant.php';
include_once 'judge_func.php';
sec_session_start();
 
if (isset($_REQUEST['username'], $_REQUEST['p'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['p']; 
echo $username . ":";
echo $password;
echo "<br/>";
    if (login_judge($username, $password, $mysqli) == true) {
        // Login success 
        header('Location: judge.php');
		//echo "betul";
    } else {
        // Login failed 
        header('Location: index.php');
		//echo "tak betul";
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}


?>