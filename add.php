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
		<center>
			<h1>ProjecTU</h1>
			<h3><i>Thapar's Project Meta-Repository</i></h3>
		</center>
	</div>
	<div class="container">
		<form action="list.php" method="GET">
			<div class="ui form">

				<div class="inline field">
					<label>Title</label><br>
					<input type="text" name="title" class="label ui fluid" style="width: 100%;" placeholder="eg: Activity Detection Using Barometer Sensor Outputs ">
				</div>

				<div class="inline field">
					<label>Summary</label><br>
					<textarea name="summary" class="label ui fluid"></textarea>
				</div>

				<div class="inline field">
					<label>Team Size</label><br>
					<small>(Choose 1 for Individual Projects)</small><br>
					<input type="number" name="size" class="label ui fluid" style="width: 100%;" value="1"><br>
				</div>

				<div class="inline field">
					<label>Title</label><br>
					<input type="text" name="title" class="label ui fluid" style="width: 100%;">
				</div>

				<input type="submit" class="ui button" value="Submit">
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