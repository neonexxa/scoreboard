<?php
include_once 'constant.php';
include_once 'func.php';
sec_session_start();
 
if (isset($_REQUEST['current_passwd'], $_REQUEST['password1'], $_REQUEST['password2'])) {
    $team_name = $_SESSION['team_name'];
    $current_passwd = $_REQUEST['current_passwd']; 
    $password1 = $_REQUEST['password1']; 
    $password2 = $_REQUEST['password2']; 

	    if ($stmt = $mysqli->prepare("SELECT id, team_name, pwd, active 
        FROM team_cred
       WHERE team_name = ?
        LIMIT 1")) {
        $stmt->bind_param('s', $team_name);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($id, $teamname, $db_password, $active);
        $stmt->fetch();
		$salt = $teamname . "eth";
		$current_passwd = hash('sha512', $current_passwd . $salt);
		//echo $teamname;
		if ($password1 != $password2) { 
		echo "passwd not match"; 
		header('Location: ../changepass.php?xok=1');
		}
		else {
		$newpassword = hash('sha512', $password1 . $salt);
		
			if ($db_password == $current_passwd) {
				echo "$newpassword";
				$mysqli->query("update team_cred set pwd = '$newpassword' where team_name= '$teamname'");
				echo "<script>alert('password changed')</script>";
				header('Location: ../changepass.php?ok=1');
			} else {
				echo $db_password;
				echo "salah<br/>";
				echo $current_passwd;
				header('Location: ../changepass.php?xok=1');
			}
        }
		}
        } else {

	header('Location: ../changepass.php');

}
 



?>