<?php 

require '../Nconnected.php';

$name=$_POST['name']; 
$mypassword=$_POST['password']; 
$university=$_POST['university'];
$group=$_POST['group'];
$teamnumber=$_POST['teamnumber'];
$table="team_cred";
$gid=$group.$teamnumber;



/* string filter
$name = stripslashes($name);
$mypassword = stripslashes($mypassword);
$name = mysql_real_escape_string($name);
$mypassword = mysql_real_escape_string($mypassword);

*/

//encryption
$garam = $name . "eth";
$mypassword = hash('sha512', $mypassword . $garam);



$sql="INSERT INTO team_cred(team_name,pwd,university,is_playing,active) VALUES ('$name','$mypassword','$university','1','1')";
//$result=mysql_query($sql);
$sql2="INSERT INTO group_id_mapping(identifier,team) VALUES ('$gid','$name')";

if ($mysqli->query($sql) === TRUE) {
	$mysqli->query($sql2);
	echo "<script>alert('$gid');</script>";
	header("location:../ct.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();


?>