<?php
require_once 'connection.php';

if(isset($_GET)) {

	echo
		'<div>
			<div>
				<form class="form-inline" action="list.php" method="GET">
					<div class="ui form">

						<!-- Project Domain -->
						<div class="inline field">
							<label>Project Domain</label>
							<select name="domain[]" multiple="" class="label ui selection fluid dropdown">
								<option value="">All</option>';

	$q = "SELECT DISTINCT value FROM domain ORDER BY value";
	$res = $con->query($q);
	for($i = 0; $i<$res->num_rows; $i++) {
		$row = $res->fetch_assoc();
		if(in_array($row['value'],$_GET['domain']))
			echo '<option value="'.$row['value'].'" selected>'.ucwords($row['value']).'</option>';
		else
			echo '<option value="'.$row['value'].'" >'.ucwords($row['value']).'</option>';
	}

	echo
							'</select>
						</div>

						<div class="inline field">
							<label>Tools Used</label>
							<select name="tools[]" multiple="" class="label ui selection fluid dropdown">
								<option value="">All</option>';

	$q = "SELECT DISTINCT value FROM tools ORDER BY value";
	$res = $con->query($q);
	for($i = 0; $i<$res->num_rows; $i++) {
		$row = $res->fetch_assoc();
		if(in_array($row['value'],$_GET['tools']))
			echo '<option value="'.$row['value'].'" selected>'.ucwords($row['value']).'</option>';
		else
			echo '<option value="'.$row['value'].'" >'.ucwords($row['value']).'</option>';
	}

	echo
							'</select>
						</div>

						<div class="inline field">
							<label>Technique Used</label>
							<select name="technique[]" multiple="" class="label ui selection fluid dropdown">
								<option value="">All</option>';

	$q = "SELECT DISTINCT value FROM technique ORDER BY value";
	$res = $con->query($q);
	for($i = 0; $i<$res->num_rows; $i++) {
		$row = $res->fetch_assoc();
		if(in_array($row['value'],$_GET['technique']))
			echo '<option value="'.$row['value'].'" selected>'.ucwords($row['value']).'</option>';
		else
			echo '<option value="'.$row['value'].'" >'.ucwords($row['value']).'</option>';
	}

	echo
							'</select>
						</div>

						<div class="inline field">
							<label>Optimization Technique Used</label>
							<select name="opt_technique[]" multiple="" class="label ui selection fluid dropdown">
								<option value="">All</option>';

	$q = "SELECT DISTINCT value FROM optimization ORDER BY value";
	$res = $con->query($q);
	for($i = 0; $i<$res->num_rows; $i++) {
		$row = $res->fetch_assoc();
		if(in_array($row['value'],$_GET['opt_technique']))
			echo '<option value="'.$row['value'].'" selected>'.ucwords($row['value']).'</option>';
		else
			echo '<option value="'.$row['value'].'" >'.ucwords($row['value']).'</option>';
	}

	echo
							'</select>
						</div>

						<div class="inline field">
							<label>Outcome</label>
							<select name="outcome[]" multiple="" class="label ui selection fluid dropdown">
								<option value="">All</option>';

	$q = "SELECT DISTINCT value FROM outcome ORDER BY value";
	$res = $con->query($q);
	for($i = 0; $i<$res->num_rows; $i++) {
		$row = $res->fetch_assoc();
		if(in_array($row['value'],$_GET['outcome']))
			echo '<option value="'.$row['value'].'" selected>'.ucwords($row['value']).'</option>';
		else
			echo '<option value="'.$row['value'].'" >'.ucwords($row['value']).'</option>';
	}

	echo
							'</select>
						</div>
						<input type="submit" class="ui button" id="browse" value="Browse Projects">
					</div>
				</form>
			</div>
		</div>';

	$domain = '';
	$tools = '';
	$technique = '';
	$opt_technique = '';
	$outcome = '';

	$sql = "SELECT * FROM project ";
	$sql1 = "";
	$sql2 = "WHERE 1 ";
	$sql3 = "";

	if(isset($_GET['domain'])) {
		$sql1 = $sql1 . ", domain ";
		$sql2 = $sql2 . "AND project.pid = domain.pid ";
		$domain = '("' . $_GET['domain'][0].'"';
		for($i=1; $i<count($_GET['domain']); $i++) {
			$domain = $domain . ', "' . $_GET['domain'][$i] . '"';
		}
		$domain = strtolower($domain) . ')';
		$sql3 = $sql3 . " AND domain.value IN $domain";
	}

	if(isset($_GET['tools'])) {
		$sql1 = $sql1 . ", tools ";
		$sql2 = $sql2 . "AND project.pid = tools.pid ";
		$tools = '("' . $_GET['tools'][0].'"';
		for($i=1; $i<count($_GET['tools']); $i++) {
			$tools = $tools . ', "' . $_GET['tools'][$i] . '"';
		}
		$tools = strtolower($tools) . ')';
		$sql3 = $sql3 . " AND tools.value IN $tools";
	}

	if(isset($_GET['technique'])) {
		$sql1 = $sql1 . ", technique ";
		$sql2 = $sql2 . "AND project.pid = technique.pid ";
		$technique = '("' . $_GET['technique'][0].'"';
		for($i=1; $i<count($_GET['technique']); $i++) {
			$technique = $technique . ', "' . $_GET['technique'][$i] . '"';
		}
		$technique = strtolower($technique) . ')';
		$sql3 = $sql3 . " AND technique.value IN $technique";
	}

	if(isset($_GET['opt_technique'])) {
		$sql1 = $sql1 . ", optimization ";
		$sql2 = $sql2 . "AND project.pid = optimization.pid ";
		$opt_technique = '("' . $_GET['opt_technique'][0].'"';
		for($i=1; $i<count($_GET['opt_technique']); $i++) {
			$opt_technique = $opt_technique . ', "' . $_GET['opt_technique'][$i] . '"';
		}
		$opt_technique = strtolower($opt_technique) . ')';
		$sql3 = $sql3 . " AND optimization.value IN $opt_technique";
	}

	if(isset($_GET['outcome'])) {
		$sql1 = $sql1 . ", outcome ";
		$sql2 = $sql2 . "AND project.pid = outcome.pid ";
		$outcome = '("' . $_GET['outcome'][0].'"';
		for($i=1; $i<count($_GET['outcome']); $i++) {
			$outcome = $outcome . ', "' . $_GET['outcome'][$i] . '"';
		}
		$outcome = strtolower($outcome) . ')';
		$sql3 = $sql3 . " AND outcome.value IN $outcome ";
	}

	$sql = $sql . $sql1;
	$sql = $sql . $sql2;
	$sql = $sql . $sql3;
	$sql = $sql . "ORDER BY title";

	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$team = $row['size'];
			$link = (strlen($row['link']) > 60) ? substr($row['link'],0,60)."..." : $row['link'];
			// echo "<h1>".$row['summary']."</h1>";
			$title = (strlen($row['title']) > 100) ? ucwords(substr($row['title'],0,100))."..." : ucwords($row['title']);
			$summary = (strlen($row['summary']) > 300) ? substr($row['summary'],0,300)."..." : $row['summary'];

			echo
			'<div class="col-lg-4 col-sm-6 portfolio-item my-3 card-outer">
				<div class="card list-card h-100 px-2" onclick="location.href=\'project.php?id='.$row['pid'].'\'">
					<div class="card-body">
						<h4 class="card-title">'.$title.'</h4>';
			if($link) echo '<a href = ' . $row['link'] . ' target="_new" style="color:#1E70BF;">' . $link . '</a>';
			echo
						'	<hr><p class="card-text card-text-min">'.$summary.'</p><hr>';

			if($team>1) echo 'Group Project (' . $team . ' members)<br>Leader: '.$row['leader'].'<br>';
			else echo 'Individual Project<br>'.$row['leader'].'<br>';


			echo
					'</div>
				</div>
			</div>';
		}
	} else {
		echo
		'<div style="width:100%;text-align:center;">
			<h3>
				It\'s lonley in here.
				<small><br>Try searching something else...</small>
			</h3>
		</div>';
	}
}