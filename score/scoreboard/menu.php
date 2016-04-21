

<!DOCTYPE html>


<!--
	Transit by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>MENU</title>
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
							<h3>Question Bank</h3>
							<h4>List of questions</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Nombo</th>
											<th>Question</th>
											<th>Q(ID)</th>
											<th>Q(points)</th>
											<th>Q(flag)</th>											
										</tr>
									</thead>
									<tbody>
										<?php
										include "Nconnected.php";
										include "menu/questionlist.php";
										?>
									</tbody>
									<tfoot>
										<tr>
											<td><strong>Total</strong></td>
											<td><strong>Number of Question</strong></td>
											
											<?php
											echo "<td><strong>$l Question</strong></td>";

											?>

										</tr>
									</tfoot>
								</table>
							</div>
						</section>

<br><br>
<!-- tukar mapping id -->

						<section>
							<h3>Change Question ID</h3>
							<form method="post" action="menu/changeqid.php">

								
								
								<h5>Old ID</h5>

								<div class="12u$">
										<input type="text" name="oldqid" id="oldqid" value="" placeholder="Q(ID)" />
								</div>
								<br>

								<h5>New ID</h5>
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<div class="select-wrapper">
											<select name="newqlevel" id="newqlevel">
												<option value="">- Group -</option>
												<option value="F">final</option>
												<option value="SF">semi final</option>
												<option value="QF">quater final</option>
												<option value="G">group</option>
											</select>
										</div>
									</div>
									<div class="6u$ 12u$(4)">
										<div class="select-wrapper">
											<select name="newground" id="newground">
												<option value="">- Group Round -</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>
									</div>

									<div class="6u$ 12u$(4)">
										<div class="select-wrapper">
											<select name="newqnumber" id="newqnumber">
												<option value="">- Q(number) -</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
												<option value="9">9</option>
											</select>
										</div>
									</div>

									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Change ID" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>


<!-- add Q -->
						<section>
							<h3>Add new question</h3>
							<form method="post" action="menu/addquestion.php">
								<div class="row uniform 50%">
									<div class="6u 12u$(4)">
										<input type="text" name="qadd" id="qadd" value="" placeholder="Questiton Address" />
									</div>
									<div class="6u$ 12u$(4)">
										<input type="password" name="bendera" id="bendera" value="" placeholder="flaggu" />
									</div>
									<div class="6u 12u$(4)">
										<input type="text" name="qid" id="qid" value="" placeholder="Q(ID)" />
									</div>
									<div class="6u$ 12u$(4)">
										<input type="text" name="qpoint" id="qpoint" value="" placeholder="Q(points)" />
									</div>
									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Add Question" class="special" /></li>
											<li><input type="reset" value="Reset" /></li>
										</ul>
									</div>
								</div>
							</form>
						</section>
<!-- noticeboard -->
<br><br>
						
						<section>
							<h3>Clue</h3>
							<h4>Noticeboard</h4>
							<div class="table-wrapper">
								<table class="alt">
									<thead>
										<tr>
											<th>Nombo</th>
											<th>Clue</th>											
										</tr>
									</thead>
									<tbody>
										<?php
										include "Nconnected.php";
										include "menu/noticelist.php";
										?>
									</tbody>
									<tfoot>
										<tr>
											<td><strong>Total</strong></td>
											
											<?php
											echo "<td><strong>$l clues</strong></td>";

											?>

										</tr>
									</tfoot>
								</table>
							</div>
						</section>

<!--add clue-->
						<section>
							<h3>Add clue</h3>
							<form method="post" action="menu/addclue.php">
								<div class="row uniform 50%">

									<div class="2u 12u$(4)">
										<input type="text" name="cid" id="cid" value="" placeholder="C(ID)" />
									</div>


									<div class="10u$ 12u$(4)">
										<input type="text" name="clue" id="clue" value="" placeholder="Clue" />
									</div>

									
									<div class="12u$">
										<ul class="actions">
											<li><input type="submit" value="Add Clue" class="special" /></li>
											
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