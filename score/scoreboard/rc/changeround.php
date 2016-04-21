<?php 

require '../Nconnected.php';

$round=$_POST['groupnew'];
$sql="UPDATE configuration SET value ='$round' WHERE setting = 'current_round'";

		
			if ($mysqli->query($sql) === TRUE) {
				header("location:../rc.php");
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}


$mysqli->close();


?>