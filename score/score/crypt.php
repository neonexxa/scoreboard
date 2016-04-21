<?php
include_once 'inc/constant.php';
include_once 'inc/func.php';

$dcryptd = decryptt($_GET['q'],KEYY);
echo $dcryptd;

?>