<?php
require_once 'connection.php';

if(isset($_GET)) {

	$domain = '()';
	$tools = '()';
	$technique = '()';
	$opt_technique = '()';
	$outcome = '()';

	if(isset($_GET['domain'])) {
		$domain = '("' . $_GET['domain'][0].'"';
		for($i=1; $i<count($_GET['domain']); $i++) {
			$domain = $domain . ', "' . $_GET['domain'][$i] . '"';
		}
		$domain = strtolower($domain) . ')';
		// echo $domain;
	}

	if(isset($_GET['tools'])) {
		$tools = '("' . $_GET['tools'][0].'"';
		for($i=1; $i<count($_GET['tools']); $i++) {
			$tools = $tools . ', "' . $_GET['tools'][$i] . '"';
		}
		$tools = strtolower($tools) . ')';
		// echo $tools;
	}

	if(isset($_GET['technique'])) {
		$technique = '("' . $_GET['technique'][0].'"';
		for($i=1; $i<count($_GET['technique']); $i++) {
			$technique = $technique . ', "' . $_GET['technique'][$i] . '"';
		}
		$technique = strtolower($technique) . ')';
		// echo $technique;
	}

	if(isset($_GET['opt_technique'])) {
		$opt_technique = '("' . $_GET['opt_technique'][0].'"';
		for($i=1; $i<count($_GET['opt_technique']); $i++) {
			$opt_technique = $opt_technique . ', "' . $_GET['opt_technique'][$i] . '"';
		}
		$opt_technique = strtolower($opt_technique) . ')';
		// echo $opt_technique;
	}

	if(isset($_GET['outcome'])) {
		$outcome = '("' . $_GET['outcome'][0].'"';
		for($i=1; $i<count($_GET['outcome']); $i++) {
			$outcome = $outcome . ', "' . $_GET['outcome'][$i] . '"';
		}
		$outcome = strtolower($outcome) . ')';
		// echo $outcome;
	}

	$sql = "SELECT * FROM project, domain, optimization, technique, tools, outcome WHERE project.pid = domain.pid AND  project.pid = optimization.pid AND  project.pid = technique.pid AND  project.pid = tools.pid AND domain.value IN $domain AND technique.value IN $technique AND optimization.value IN $opt_technique AND tools.value IN $tools AND outcome.value IN $outcome ";
	echo $sql;

	$result = $con->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		}
	} else {
		echo "0 results";
	}
	// $tools = ;
	// $technique = ;
	// $opt_technique = ;
	// $outcome = ;
	// $query = "SELECT * FROM project WHERE ";
}