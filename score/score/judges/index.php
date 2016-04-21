<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once '../inc/constant.php';
include_once 'judge_func.php';
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
<style type="text/css">
<!--
.style1 {
	font-size: 22px;
	color: #fb6e26;
}
-->
</style>
        <script type="text/JavaScript" src="../js/sha512.js"></script> 
        <script type="text/JavaScript" src="../js/forms.js"></script> 
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
 <div id="login-form">
        <h3>Login</h3>
 <?php
        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }
        ?> 
        <fieldset>

        <form action="judge_login.php" method="post" name="login_form">                      
            Username: <input type="text" name="username" /><br/>
            Password: <input type="password" 
                             name="password" 
                             id="password"/>
            <input type="submit" 
                   value="Login" 
                   onclick="formhash(this.form, this.form.password);" /> 
        </form>

        </fieldset>
    </div>
	  </div>

        
    </div>
    <div class="templatemo_content_bottom"></div>
    	<div id="templatemo_footer">have fun! =)<a href="#"><b></b></a> <!-- Credit: www.templatemo.com --></div></div>

</body>
</html>