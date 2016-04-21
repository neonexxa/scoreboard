<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';
sec_session_start();
if (login_check_participant($mysqli) == false) {
echo "not login";
}

if (isset($_REQUEST['flag'], $_REQUEST['id'])) {
	$id = cleaner3($_REQUEST['id']);
	$flagasal = $flag;
	$flag = cleaner3($_REQUEST['flag']);
	$flagasal = $flag;
	$team = $_SESSION['team_name'];
	//echo $team;
	//echo "<br/>";
	
	$dcryptd = decryptt($id,KEYY);
	//echo "<br/>";
	//echo $dcryptd;
	$splitt = explode("::::", $dcryptd);
	$question = $splitt[0];
	$assigned_to = trim($splitt[1]);
	
	$verify_question = substr($question, 0, 5);
	//echo $verify_question;
	//echo "<br/>";

	//echo checkflag($mysqli,$verify_question,$assigned_to,$flag);
	echo checkflag($mysqli,$verify_question,$assigned_to,$flag,$team,$flagasal);
	//$flag_status = checkflag($mysqli,$verify_question,$assigned_to,$flag,$team);
	//echo $flag_status;
	/*
	if ($flag_status == true) {
		echo "true";
	}
	else if ($flag_status == "solved") {
		echo "solved";
		}
	else if ($flag_status == false) {
		echo "false";
		}
		*/
	} 	

	else {
		echo '';
}

?>