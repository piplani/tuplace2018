<?php
require_once 'connection.php';

if(isset($_GET)) {

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
	// echo $sql;

	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo '<b>' . $row['title'] . '</b><br>' . $row['summary'];
		}
	} else {
		echo "No projects found";
	}
}