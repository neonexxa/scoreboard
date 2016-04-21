<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';
sec_session_start();
if (login_check_participant($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
unset($_SESSION['current_page']);
$_SESSION['current_page'] = "main";
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UTPHAX'14</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />

</head>
<body>
<div id="templatemo_container">

<?php
include "top.php";
?>
        
    <div class="templatemo_content_top"></div>
    <div id="templatemo_content">
      <div id="templatemo_menu">
        <div class="menuleft"></div>
<?php
include 'menu.php';
?>
            <div class="menuright"></div>    	
        </div>
        
      <div id="templatemo_boxarea">
        <?php if (login_check_participant($mysqli) == true) : ?>
<div class="eventlogbox">

<?php
	$current_round = get_current_round($mysqli);
	$teamname = $_SESSION["team_name"];
	$teamref = getteamref($mysqli,$teamname);
	$sql = "SELECT * FROM team_login_success where team_name='$teamname'  union all SELECT * FROM team_login_attempts where team_name='$teamname' union all SELECT * FROM " . $current_round . "_attempts where team_ref='$teamref' union all SELECT * FROM " . $current_round . "_solved where team_ref='$teamref' ORDER BY 4 desc";
	//$sql = "SELECT * FROM $current_round_solved WHERE assigned_to LIKE ?";
	$stmt = $mysqli->stmt_init();
			$group = "%$current_round%";
			$data = array();
			
			if($stmt->prepare($sql)){
			//$stmt->bind_param('ssss', $group);
			$stmt->execute();

			$question = null;
			$assigned_to = null;
			$stmt->bind_result($satu,$dua,$tiga,$empat,$lima,$enam);
			$nochal = 0;
			while ($stmt->fetch()) {
				echo gmdate("h:i:s A", $empat+25200);
				echo " - ";
				if ($lima == "LA")
					echo "Failed login attempts from $dua";
				else if ($lima == "LS")
					echo "Successfully login by $tiga";
				else if ($lima == "GA")
					echo "Incorrect flag submitted - Challenge " . substr($dua,-1);
				if ($lima == "GS")
					echo "Correct flag submitted - Challenge " . substr($dua,-1);
				echo "<br/>";
				}
			}
			$stmt->close(); 

?>

</div>


        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
            </p>
        <?php endif; ?>
	  </div>

        
    </div>
    <div class="templatemo_content_bottom"></div>
              

    	<div id="templatemo_footer">have fun! =)<a href="#"><b></b></a> <!-- Credit: www.templatemo.com --></div></div>
<!-- templatemo 026 hosting -->
<!-- 
Hosting Template 
http://www.templatemo.com/preview/templatemo_026_hosting 
-->
</body>
</html>