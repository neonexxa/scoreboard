<ul>
        <?php if (login_check_admin($mysqli) == true) : ?>
<li><a href="admin.php" class="current">Judge Dashboard</a></li>
		<li><a href="subpage.html">spare</a></li>
<li><a href="#">spare</a></li>
<li><a href="#">Spare</a></li>
<li><a href="#">Spare</a></li>
<li><a href="tubik.php">Logout</a></li>
        <?php else : ?>
        <?php endif; ?>
</ul>

