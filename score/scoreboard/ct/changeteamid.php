<?php 

require '../Nconnected.php';

$teamname=$_POST['tname'];
$newgroup=$_POST['groupnew'];
$newteamnumber=$_POST['teamnumbernew'];
$newgid=$newgroup.$newteamnumber;

$sql="UPDATE group_id_mapping SET identifier ='$newgid' WHERE team = '$teamname'";

	
			
			if ($mysqli->query($sql) === TRUE) {
				header("location:../ct.php");
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}


$mysqli->close();


?>