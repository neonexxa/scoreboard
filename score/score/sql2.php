<?php 
include('./mysqlconnection.php');

//Displaying the content of Post
if(isset($_GET['id']))
{
	$result=mysql_query("select * from posts where postid=".$_GET['id']) or die(mysql_error());
	if(mysql_num_rows($result)>0)
	{
		while($row=mysql_fetch_array($result))
		{
		echo "<B style='font-size:22px'>Title: ".$row['title']."</B>";
		echo "<br/>-  Posted By ".$row['user'];	
		echo "<br/><br/>Content:<br/>".$row['content']."<br />";
		}
	}

}


