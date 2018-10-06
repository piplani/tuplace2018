<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TU Placement</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>
	<link rel='stylesheet' href='css/style.css'>
</head>
<body>
	<a href="contact.php"><div id="contact-us">Contact Us</div></a>
	<div class="jumbotron jumbotron-main mb-4" style="height: 180px;">
		<center>
			<h1>ProjecTU</h1>
			<h3><i>Thapar's Project Meta-Repository</i></h3>
		</center>
	</div>
	<div class="container">
		<div class="row">
			<?php
				require_once 'connection.php';
				if(isset($_GET['id'])) {
					$pid = $_GET['id'];
					$sql = "SELECT pid, title, summary, size, leader, link FROM project WHERE project.pid = $pid";
					$result = $con->query($sql);

					if ($result->num_rows == 1) {

						$row = $result->fetch_assoc();
						$team = ($row['size'] > 1) ? 'Group Project ('.$row['size'].' members)' : 'Individual Project';
						echo
						'<div class="col-lg-8">
							<h1 class="mt-4">
								<i class="fas fa-arrow-alt-circle-left" onclick="back(); return false;"></i>&nbsp;&nbsp;P1'.
								$pid.'. '.
								$row['title'].
							'</h1>
							<div title="Hidden for privacy concerns" style="cursor:default;">
								<p class="lead">
									Developer(s): '.substr($row['leader'],0,10)."...".
							'	</p>
							</div>
							<hr>
							<p>'.$team.'</p>
							<p>'.$row['summary'].'</p>';
						if($row['link']) echo
							'<hr><p>Project Link: <a href="'.$row['link'].'" target="_new" style="color:#1E70BF;">'.$row['link'].'</a></p>';
						echo
						'</div>';

						echo '
						<div class="col-md-4">';

						$sql = "SELECT value FROM domain WHERE pid = $pid";
						$domainRes = $con->query($sql);

						if($domainRes->num_rows > 0) {
							echo '
							<div class="card my-4">
								<h6 class="card-header">Domain</h6>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							$i = 0;
							for(; $i< ($domainRes->num_rows / 2); $i++) {
								$domainRow = $domainRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?domain[]='.$domainRow['value'].'">'.ucwords($domainRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							for(; $i < $domainRes->num_rows ; $i++) {
								$domainRow = $domainRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?domain[]='.$domainRow['value'].'">'.ucwords($domainRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
									</div>
								</div>
							</div>';
						}

						$sql = "SELECT value FROM outcome WHERE pid = $pid";
						$outcomeRes = $con->query($sql);

						if($outcomeRes->num_rows > 0) {
							echo '
							<div class="card my-4">
								<h6 class="card-header">Outcome</h6>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							$i = 0;
							for(; $i< ($outcomeRes->num_rows / 2); $i++) {
								$outcomeRow = $outcomeRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?outcome[]='.$outcomeRow['value'].'">'.ucwords($outcomeRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							for(; $i < $outcomeRes->num_rows ; $i++) {
								$outcomeRow = $outcomeRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?outcome[]='.$outcomeRow['value'].'">'.ucwords($outcomeRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
									</div>
								</div>
							</div>';
						}

						$sql = "SELECT value FROM tools WHERE pid = $pid";
						$toolsRes = $con->query($sql);

						if($toolsRes->num_rows > 0) {
							echo '
							<div class="card my-4">
								<h6 class="card-header">Tools</h6>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							$i = 0;
							for(; $i< ($toolsRes->num_rows / 2); $i++) {
								$toolsRow = $toolsRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?tools[]='.$toolsRow['value'].'">'.ucwords($toolsRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							for(; $i < $toolsRes->num_rows ; $i++) {
								$toolsRow = $toolsRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?tools[]='.$toolsRow['value'].'">'.ucwords($toolsRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
									</div>
								</div>
							</div>';
						}

						$sql = "SELECT value FROM technique WHERE pid = $pid";
						$techniqueRes = $con->query($sql);

						if($techniqueRes->num_rows > 0) {
							echo '
							<div class="card my-4">
								<h6 class="card-header">Techniques Used</h6>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							$i = 0;
							for(; $i< ($techniqueRes->num_rows / 2); $i++) {
								$techniqueRow = $techniqueRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?technique[]='.$techniqueRow['value'].'">'.ucwords($techniqueRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							for(; $i < $techniqueRes->num_rows ; $i++) {
								$techniqueRow = $techniqueRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?technique[]='.$techniqueRow['value'].'">'.ucwords($techniqueRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
									</div>
								</div>
							</div>';
						}

						$sql = "SELECT value FROM optimization WHERE pid = $pid";
						$optimizationRes = $con->query($sql);

						if($optimizationRes->num_rows > 0) {
							echo '
							<div class="card my-4">
								<h6 class="card-header">Optimization Techniques</h6>
								<div class="card-body">
									<div class="row">
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							$i = 0;
							for(; $i< ($optimizationRes->num_rows / 2); $i++) {
								$optimizationRow = $optimizationRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?opt_technique[]='.$optimizationRow['value'].'">'.ucwords($optimizationRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
										<div class="col-lg-6">
											<ul class="list-unstyled mb-0">';
							for(; $i < $optimizationRes->num_rows ; $i++) {
								$optimizationRow = $optimizationRes->fetch_assoc();
								echo
												'<li>
													<a href="list.php?opt_technique[]='.$optimizationRow['value'].'">'.ucwords($optimizationRow['value']).'</a>
												</li>';
							}
							echo
											'</ul>
										</div>
									</div>
								</div>
							</div>';
						}

					}
				}
			?>
		</div>

	</div>

	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="js/main.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
