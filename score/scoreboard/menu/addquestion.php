<?php 

require '../Nconnected.php';

$qaddress=$_POST['qadd'];
$benderamerah=$_POST['bendera'];
$qid=$_POST['qid'];
$qpoint=$_POST['qpoint'];
$table="bank_soalan";


$sql="INSERT INTO bank_soalan(question,flag,points,assigned_to) VALUES ('$qaddress','$benderamerah','$qpoint','$qid')";
			
			if ($mysqli->query($sql) === TRUE) {
				header("location:../menu.php");
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		

$mysqli->close();


?>