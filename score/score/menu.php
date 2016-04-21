<ul>
        <?php if (login_check_participant($mysqli) == true) {
echo '<li><a href="main.php">Main</a></li>
<li><a href="challenge.php">Challenges</a></li>
<li><a href="eventlog.php">Team\'s Event Logs</a></li>
<li><a href="score.php">Scoreboard</a></li>
<!--<li><a href="group.php">Group</a></li>-->
<li><a href="changepass.php">Change Password</a></li>
<li><a href="tubik.php">Logout</a></li>';
}
else {
echo '<li><a href="index.php">Main</a></li>
<li><a href="score.php">Scoreboard</a></li>
<li><a href="group.php">Group</a></li>';
}
?>
</ul>

