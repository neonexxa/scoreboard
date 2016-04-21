

<!DOCTYPE html>


<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Configuration</title>
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
	<body>

		<!-- Header -->
			<?php
			include "header.php";
			?>

<!-- isi/content -->
			<section id="main" class="wrapper">
					<div class="container">

<!-- team list -->
						
						<section>
							<div>
							<h4>Current Round</h4>
							<pre><code>
								<?php
									include "Nconnected.php";
									include "rc/displayround.php";
								?>
							</code></pre>
							</div>
						</section>

<!-- change round -->
						<section>
							<h3>Change Round</h3>
							<form method="post" action="rc/changeround.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="groupnew" id="groupnew">
												<option value="G1">- Round -</option>
												<option value="G1">G1</option>
												<option value="G2">G2</option>
												<option value="G3">G3</option>
												<option value="G4">G4</option>
												<option value="G5">G5</option>

												<!-- <option value="F">Final</option> -->
											</select>
										</div>
									</div>
	
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Change Round" class="special" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

						

					</div>
			</section>



		<!-- Footer -->
			<?php
			include "footer.php";
			?>

	</body>
</html>