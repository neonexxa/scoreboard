<?php
  #$lnk = mysql_connect("localhost","root","12haneefa34");
  $lnk = mysql_connect("localhost","root","") or die("Failed to connect");
  $db = mysql_select_db('dabatase',$lnk) or die("X leh select db");
?>
