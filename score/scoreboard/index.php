<!DOCTYPE html>
<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Score Board</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
	</head>
	<body class="landing">

		<!-- Header -->
			<?php
			include "header.php";
			?>

		<!-- Banner -->
			<section id="banner">
				<h2>Scoreboard Interface</h2>
				<p>Graphical editor of UTPHAX scoreboard</p>
				<ul class="actions">
					<li>
						<a href="../mobile/" class="button big">Client Page</a>
					</li>
				</ul>
			</section>

		<!-- One -->
			<section id="one" class="wrapper style1 special">
				<div class="container">
					<header class="major">
						<h2>Action kamen</h2>
						<p>Choose your action</p>
					</header>
					<div class="row 150%">
						<div class="4u 12u$(medium)">
							<a href="ct.php">
							<section class="box">
								<i class="icon big rounded color1 fa-cloud"></i>
								<h3>Create Teams</h3>
								<p>CREATE and DELETE team names from the scoreboard</p>
							</section>
							</a>
						</div>
						<div class="4u 12u$(medium)">
							<a href="menu.php">
							<section class="box">
								<i class="icon big rounded color9 fa-desktop"></i>
								<h3>MENU</h3>
								<p>Question setup, clue, marks, question round, etc.</p>
							</section>
							</a>
						</div>
						<div class="4u$ 12u$(medium)">
							<a href="rc.php">
							<section class="box">
								<i class="icon big rounded color6 fa-rocket"></i>
								<h3>Round Configuration</h3>
								<p>Round setting</p>
							</section>
							</a>
						</div>
					</div>
				</div>
			</section>

		

		<!-- Footer -->
			<?php
			include "footer.php";
			?>

	</body>
</html>