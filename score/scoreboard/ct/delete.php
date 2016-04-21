<?php 

require '../Nconnected.php';

$group=$_POST['group'];
$teamnumber=$_POST['teamnumber'];
$gid=$group.$teamnumber;


$sth = $mysqli->prepare("SELECT team FROM group_id_mapping WHERE identifier = '$gid'");
			$sth->execute();
			$sth->bind_result($namedb);
			$question_solved = array();
			while ($arr = $sth->fetch()) {
				$tname[] = $namedb;
				$m=$m+1;
								
			}


//$hehe="SELECT team FROM group_id_mapping WHERE identifier = '$gid'";
$dsql="DELETE FROM team_cred WHERE team_name = '$tname'";
//$result=mysql_query($sql);
$dsql2="DELETE FROM group_id_mapping WHERE identifier = '$gid'";




if ($mysqli->query($dsql) === TRUE) {

	$mysqli->query($dsql2);
	echo "<script>alert('$gid');</script>";
	header("location:../ct.php");
    
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();


?>