<?php
include($_SERVER['DOCUMENT_ROOT'].'/utphax/mysqlconnection.php');
$em="";
if(isset($_POST['Login']))
{
$username=$_POST['username'];
$password=$_POST['password'];

		$result=mysql_query("select * from users where username='$username' and password='$password' ") or die(mysql_error());;
		if(mysql_num_rows($result))
		{
		$data=mysql_fetch_array($result);
		#print $data;
		echo "Congratz you get to bypass the login :) The flag is   here ---> <a href='/utphax/fl46.php'>flagXD</a>";
		#sleep(1);
		#header("Location: fl46.php");
		}
		else
		{
		$em="HAHAHAHA salah!!!!";
		}
}
?>


<form action="sani.php" method="post">
<h1>Easy</h1>
<table> 
<tr><td>UserName: </td><td><input type="text" name="username" /></td></tr>
<tr><td>Password :</td><td><input type="password" name="password"/></td></tr>
<tr><td><input type="submit" name="Login" value="Login"/></td></tr>
<?php
print $em;
?>
<br>
</table>  
</form>

