<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';
sec_session_start();

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Refresh" content="text/html; charset=utf-8" />
<title>UTPHAX'14</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script>
	function Autoreload(t){
		setTimeout("location.reload(true);", t);
	}
</script>
</head>
<body onload="Javascript:Autoreload(8000);">
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
        <?php 

		include "score_overall.php";

		?>
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
