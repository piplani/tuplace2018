<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TU Placement</title>
	<link rel="stylesheet"  type="" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="UTF-8">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.css'>
	<link rel='stylesheet' href='css/style.css'>
</head>
<body>
	<div class="jumbotron">
		<h1>Thapar University</h1>
		<h2>ML Projects</h2>
	</div>
	<div class="container">
		<form action="projects.php" method="GET">
			<div class="ui form">
				<div id="advanced-toggle">Advanced&nbsp;&nbsp;<div id="arrow">&#9660;</div></div>

				<!-- Project Domain -->
				<div class="inline field">
					<label>Project Domain</label>
					<select name="domain[]" multiple="" class="label ui selection fluid dropdown">
						<option value="">All</option>
						<option value="Image Processing">Image Processing</option>
						<option value="Audio Processing">Audio Processing</option>
						<option value="Video Processing">Video Processing</option>
						<option value="Text Processing">Text Processing</option>
						<option value="Blockchain">Blockchain</option>
						<option value="Recommendation System">Recommendation System</option>
						<option value="Time Series">Time Series</option>
						<option value="Finance">Finance</option>
						<option value="Health Care">Health Care</option>
						<option value="1Device Development">Device Development</option>
						<option value="1Geospatial">Geospatial</option>

					</select>
				</div>

				<div id="advanced" style="display: none;">
					<div class="inline field">
						<label>Tools Used</label>
						<select name="tools[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value="R">R</option>
							<option value="Python">Python</option>
							<option value="Matlab">Matlab</option>
							<option value="C">C</option>
							<option value="TensorFlow">TensorFlow</option>
							<option value="Pytorch">Pytorch</option>
							<option value="Keras">Keras</option>
							<option value="OPenCv">OPenCv</option>
							<option value="Yolo">Yolo</option>

						</select>
					</div>

					<div class="inline field">
						<label>Technique Used</label>
						<select name="technique[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value="ML">ML</option>
							<option value="CNN">CNN</option>
							<option value="RNN">RNN</option>
							<option value="LSTM">LSTM</option>
							<option value="GAN">GAN</option>
							<option value="Hybrid Method">Hybrid Method</option>
						</select>
					</div>

					<div class="inline field">
						<label>Optimization Technique Used</label>
						<select name="opt_technique[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value="GA">GA</option>
							<option value="PSO">PSO</option>
							<option value="DE">DE</option>
							<option value="GD">GD</option>
							<option value="Adam">Adam</option>
						</select>
					</div>

					<div class="inline field">
						<label>Outcome</label>
						<select name="outcome[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value="Website">Website</option>
							<option value="App">App</option>
							<option value="Command Line Interface">Command Line Interface</option>
							<option value="Device">Device</option>
						</select>
					</div>

				</div>
				<div class="ui button" id="clear">Clear Filters</div>
				<input type="submit" class="ui button" value="Browse Projects">
			</div>
		</form>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/semantic-ui@2.2.13/dist/semantic.min.js'></script>
<script src='js/main.js'></script>
<script >
	$('.label.ui.dropdown').dropdown();
	$('.no.label.ui.dropdown').dropdown({useLabels: false });
	$('#clear').on('click', function () {
		$('.ui.dropdown').dropdown('restore defaults');
	});
</script>
</html>