<?php 

require '../Nconnected.php';

$clueid=$_POST['cid'];
$hint=$_POST['clue'];


$sql="INSERT INTO noticeboard(id,message) VALUES ('$clueid','$hint')";
			
			if ($mysqli->query($sql) === TRUE) {
				header("location:../menu.php");
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		

$mysqli->close();


?>