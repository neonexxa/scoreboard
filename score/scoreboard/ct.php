

<!DOCTYPE html>


<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Team Settings</title>
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
							<h3>Tournament Team Setting</h3>
							<h4>List of teams</h4>
							<div class="table-wrapper">
								<table>
									<thead>
										<tr>
											<th>Nombo</th>
											<th>Name Team</th>
											<th>Group ID</th>
										</tr>
									</thead>
									<tbody>
										<?php
										include "Nconnected.php";
										include "ct/namelist.php";
										?>
									</tbody>
									<tfoot>
										<tr>
											<td><strong>Total</strong></td>
											<td><strong>Number of Teams</strong></td>
											
											<?php
											echo "<td><strong>$l Teams</strong></td>";

											?>

										</tr>
									</tfoot>
								</table>
							</div>
						</section>


<!-- tukar mapping id -->

						<section>
							<h3>Change Team ID</h3>
							<form method="post" action="ct/changeteamid.php">

								<div class="12u$">
										<input type="text" name="tname" id="tname" value="" placeholder="Team Name" />
								</div>
								<br>

								<h5>New ID</h5>
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="groupnew" id="groupnew">
												<option value="">- Group -</option>
												<option value="A">Group A</option>
												<option value="B">Group B</option>
												<option value="C">Group C</option>
												<option value="D">Group D</option>
												<option value="E">Group E</option>
												<option value="F">Group F</option>
												<option value="G">Group G</option>
												<option value="H">Group H</option>
											</select>
										</div>
									</div>

									<div class="6u$ 12u$(4)">
										<div class="select-wrapper">
											<select name="teamnumbernew" id="teamnumbernew">
												<option value="">- Team No -</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
										</div>
									</div>

								



									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Change ID" class="special" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>


<!-- team generate -->
						<section>
							<h3>Create Team Login</h3>
							<form method="post" action="ct/create.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<input type="text" name="name" id="name" value="" placeholder="Team Name" />
									</div>
									<div class="6u$ 12u$(4)">
										<input type="password" name="password" id="password" value="" placeholder="password" />
									</div>
									<div class="12u$">
										<input type="text" name="university" id="university" value="" placeholder="University/Institue Name" />
									</div>
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="group" id="group">
												<option value="">- Group -</option>
												<option value="A">Group A</option>
												<option value="B">Group B</option>
												<option value="C">Group C</option>
												<option value="D">Group D</option>
												<option value="E">Group E</option>
												<option value="F">Group F</option>
												<option value="G">Group G</option>
												<option value="H">Group H</option>
											</select>
										</div>
									</div>
									<div class="6u$ 12u$(4)">
										<div class="select-wrapper">
											<select name="teamnumber" id="teamnumber">
												<option value="">- Team No -</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
										</div>
									</div>

									<!--
									<div class="4u 12u$(3)">
										<input type="radio" id="priority-low" name="priority" checked>
										<label for="priority-low">Low Priority</label>
									</div>
									<div class="4u 12u$(3)">
										<input type="radio" id="priority-normal" name="priority">
										<label for="priority-normal">Normal Priority</label>
									</div>
									<div class="4u$ 12u$(3)">
										<input type="radio" id="priority-high" name="priority">
										<label for="priority-high">High Priority</label>
									</div>
								
									<div class="6u 12u$(3)">
										<input type="checkbox" id="copy" name="copy">
										<label for="copy">Email me a copy of this message</label>
									</div>
								
									<div class="6u$ 12u$(3)">
										<input type="checkbox" id="human" name="human" checked>
										<label for="human">I am a human and not a robot</label>
									</div>
									<div class="12u$">
										<textarea name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
									</div>-->
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Create Team" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>

<!--delete team list-->
						<section>
							<h3>Delete Team</h3>
							<form method="post" action="ct/delete.php">
								<div class="row uniform 50%">

									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="group" id="group">
												<option value="">- Group -</option>
												<option value="A">Group A</option>
												<option value="B">Group B</option>
												<option value="C">Group C</option>
												<option value="D">Group D</option>
												<option value="E">Group E</option>
												<option value="F">Group F</option>
												<option value="G">Group G</option>
												<option value="H">Group H</option>
											</select>
										</div>
									</div>

									<div class="6u$ 12u$(4)">
										<div class="select-wrapper">
											<select name="teamnumber" id="teamnumber">
												<option value="">- Team No -</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
										</div>
									</div>

									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Delete Team" class="special" /></li>
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