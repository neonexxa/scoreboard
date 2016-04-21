<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once '../inc/constant.php';
include_once '../inc/commonfunc.php';
include_once 'admin_func.php';
sec_session_start();
if (login_check_admin($mysqli) == true) {
    $logged = 'in';
} else {
    $logged = 'out';
}
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
        <?php if (login_check_admin($mysqli) == true) : ?>
            <p>Welcome <?php echo htmlentities($_SESSION['username']); ?>!</p>
            <p>
<?php
if(isset($_POST['submit'])) 
{ 
    $teamname = cleaner2($_POST['teamname']);
	$password = cleaner2($_POST['password']); 
	$university = cleaner2($_POST['university']);
	
	$salt = $teamname . "eth";
	$password = hash('sha512', $password . $salt);
	
	$mysqli->query("INSERT INTO team_cred(team_name, university, pwd, active) VALUES ('$teamname',' $university', '$password', 1)");
	
	echo "Team added:</br><ul>Teamname:<b>";
	echo $teamname;
	echo "</b><br/>University: <b>";
	echo $university;
	echo "</b><br/>Password: <b>";
	echo $password;
	echo "</b><br/></ul>";
	
	echo "<a href=" . $_SERVER['PHP_SELF'] . ">add more</a>";
	
}
if(!isset($_POST['submit'])) {
echo '<fieldset><form method="post" action=" ' . $_SERVER['PHP_SELF'] . '">
   Team Name: <input type="text" name="teamname"><br/><br/>
   University: <input type="text" name="university"><br/><br/>
   Password: <input type="text" name="password"><br/><br/>
   <input type="submit" name="submit" value="Add Team	"><br>
</form></fieldset> ';
}
?>

            </p>
        <?php else : ?>
            <p>
                <span class="error">You are not authorized to access this page.</span> Please <a href="index.php">login</a>.
				<?php
				echo "asdasd";
				echo htmlentities($_SESSION['username']);
				?>
				
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