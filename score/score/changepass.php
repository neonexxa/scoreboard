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
        <?php if (login_check_participant($mysqli) == false) {
		  echo "<span class='error'>You are not authorized to access this page.</span> Please <a href='index.php'>login</a>.";
		  die();
		}

		$teamname = $_SESSION['team_name'];
				
		?>

		<div id="login-form">
        <h3>Change Password</h3>
 <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
		
		if (isset($_GET['ok'])) {
            echo '<br/><br/>Password Changed...';
        }
		
		if (isset($_GET['xok'])) {
            echo '<br/><br/>Something Wrong..';
        }
		
		
        if ((!isset($_GET['ok'])) && (!isset($_GET['xok']))){
		
        echo '<fieldset>

		
        <form action="inc/process_changepass.php" method="post" name="changepass_form">                      
            Current Password: <input type="password" name="current_passwd" /><br/>
            New Password: <input type="password" 
                             name="password1" 
                             id="password1"/>
            New Password, again: <input type="password" 
                             name="password2" 
                             id="password2"/>
            <input type="submit" 
                   value="Change!" 
                   /> 
        </form>

        </fieldset>';
		}
		?>
    </div>
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