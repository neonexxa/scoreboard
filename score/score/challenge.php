<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<script src="js/jquery.min.js"></script>
<script src="js/form_chal.js"></script>
<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';

sec_session_start();

if (login_check_participant($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>IhackUTP</title>
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

			<?php
			/*
			$queryround = "select round_ref from game_round where round_ref = (select value from configuration where setting='current_round')";
			if ($result = $mysqli->query($queryround)) {
				$row = $result->fetch_assoc();
				$result->close();
			}
			*/
			$current_round = get_current_round($mysqli);
		$teamname = $_SESSION['team_name'];
		$teamref = getteamref($mysqli,$teamname);
		if ($stmt = $mysqli->prepare("select team1, team2 from " . $current_round . "_fixture where team1=? or team2=?")) {
		$stmt->bind_param('ss', $teamref,$teamref);  
        $stmt->execute();  
        $stmt->store_result();
        $stmt->bind_result($team1,$team2);
        $stmt->fetch();
		$stmt->close();	
		}
		
		if ((@getteamscore($mysqli,$team1,$current_round) >=10) || (@getteamscore($mysqli,$team2,$current_round) >=10)) {
		echo "<div class='notice'>Your match has ended.<br/>Contact administrator for more details, if you want.</div><br/><br/>";
		}
		
		elseif ($current_round =="x") { echo "<br/><br/><div class='box_score_main'><table><tr><td id='box_score_main'>Get a break</td></tr></table></div><br/><br/><br/>";}
		
		else {
		if (checkifplaying($mysqli,$teamname)) {
			include "round_" . $current_round . ".php";
		}
		
		else { echo "<br/><br/><b>Have a rest first.</b>"; }
		
		}			
			?>
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
