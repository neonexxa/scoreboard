<?php

$flag = $_REQUEST['f'];
echo $flag;
echo "<br/>";
$salt = substr($flag, 1, 1) . "!";
$flag = hash('sha512', $flag . $salt);

echo $salt;
echo "<br/>";
echo $flag;
/*
echo "----<br/><br/>";

$flag = 'j1'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j2'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j3'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j4'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j5'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j6'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j7'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j8'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j9'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j10'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j11'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j12'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j13'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j14'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j15'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j16'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j17'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j18'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j19'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j20'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j21'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j22'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j23'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j24'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j25'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j26'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j27'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j28'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j29'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j30'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j31'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j32'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j33'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j34'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j35'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j36'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j37'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j38'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j39'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j40'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j41'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j42'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j43'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
$flag = 'j44'; $salt = substr($flag, 1, 1) . "!"; $flag = hash('sha512', $flag . $salt); echo $flag . "<br/>";
*/
?>
