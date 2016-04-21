<?php 

require '../Nconnected.php';

$oldqid=$_POST['oldqid'];
$questionlevel=$_POST['newqlevel'];
$groupround=$_POST['newground'];
$questionnumber=$_POST['newqnumber'];
$table="bank_soalan";
$newqid=$questionlevel.$questionnumber;
$gnewqid=$questionlevel.$groupround.$questionnumber;

$sql="UPDATE bank_soalan SET assigned_to ='$newqid' WHERE assigned_to = '$oldqid'";
$gsql="UPDATE bank_soalan SET assigned_to ='$gnewqid' WHERE assigned_to = '$oldqid'";

		if ($questionlevel === 'G'){
			
			if ($mysqli->query($gsql) === TRUE) {
				header("location:../menu.php");
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		} else {
			if ($mysqli->query($sql) === TRUE) {
				header("location:../menu.php");
			    
			} else {
			    echo "Error: " . $sql . "<br>" . $mysqli->error;
			}
		}

$mysqli->close();


?>