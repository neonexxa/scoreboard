<ul>
        <?php if (login_check_admin($mysqli) == true) : ?>
<li><a href="admin.php" class="current">Admin Dashboard</a></li>
		<li><a href="rank_update.php">Update Rank</a></li>
<li><a href="#">Team Logs</a></li>
<li><a href="add_msg.php">Add Message</a></li>
<li><a href="#">Spare</a></li>
<li><a href="tubik.php">Logout</a></li>
        <?php else : ?>
        <?php endif; ?>
</ul>

