<?php
include_once '../inc/constant.php';
include_once 'admin_func.php';
sec_session_start();
 
if (isset($_REQUEST['username'], $_REQUEST['p'])) {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['p']; 
echo $username . ":";
echo $password;
echo "<br/>";
    if (login_admin($username, $password, $mysqli) == true) {
        // Login success 
        header('Location: admin.php');
		echo "betul";
    } else {
        // Login failed 
        //header('Location: ../login.php?error=1');
		echo "tak betul";
    }
} else {
    // The correct POST variables were not sent to this page. 
    echo 'Invalid Request';
}


?>