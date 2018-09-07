

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TU Placement</title>
	<link rel="stylesheet"  type="" href="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<style>
	/*body {background-color: powderblue;}*/
	h1   {color: blue;}
	/*p    {color: red;}*/
	
	.col-half-offset{
    margin-left:4.166666667%
	}
	</style>
	<!-- Project Domain -->
	<form action="" method="get">
		<div class="container">
	    	<div class="row" style="border: 1px">
	        	<div class="col-xs-2" id="p1">
	    			<b>Project Domain</b><br>
					<input type="checkbox" name="ip" value="Bike"> Image Processing<br>
			  		<input type="checkbox" name="ap" value="Car" > Audio Processing<br>
			  		<input type="checkbox" name="vp" value="Bike"> Video Processing<br>
			  		<input type="checkbox" name="tp" value="Bike"> Text Processing<br>
			  		<input type="checkbox" name="bc" value="Bike"> Blockchain<br>
			  		<input type="checkbox" name="rs" value="Bike"> Recommendation System<br>
			  		<input type="checkbox" name="ts" value="Bike"> Time Series<br>
			  		<input type="checkbox" name="fi" value="Bike"> Finance<br>
			  		<input type="checkbox" name="hc" value="Bike"> Health Care<br>
			  		<input type="checkbox" name="dd" value="Bike"> Device Development<br>
			  		<input type="checkbox" name="gs" value="Bike"> Geospatial<br>    		
	        	</div>
	        	<div class="col-xs-2 col-half-offset" id="p2">
	    			<b>Tool Used</b><br>
				  		<input type="checkbox" name="r" value="Bike"> R<br>
				  		<input type="checkbox" name="py" value="Bike"> Python<br>
				  		<input type="checkbox" name="m" value="Bike"> Matlab<br>
				  		<input type="checkbox" name="cpp" value="Bike"> C/C++/Java<br>
				  		<input type="checkbox" name="tf" value="Bike"> TensorFlow<br>
				  		<input type="checkbox" name="pyt" value="Bike"> Pytorch<br>
				  		<input type="checkbox" name="ke" value="Bike"> Keras<br>
				  		<input type="checkbox" name="cv" value="Bike"> OPenCv<br>
				  		<input type="checkbox" name="yo" value="Bike"> Yolo<br>    		
	        	</div>
	        	<div class="col-xs-2 col-half-offset" id="p3">
	        		<b>Technique Used</b><br>
			  		<input type="checkbox" name="r" value="Bike"> ML<br>
			  		<input type="checkbox" name="r" value="Bike"> CNN<br>
			  		<input type="checkbox" name="r" value="Bike"> RNN<br>
			  		<input type="checkbox" name="r" value="Bike"> LSTM<br>
			  		<input type="checkbox" name="r" value="Bike"> GAN<br>
			  		<input type="checkbox" name="r" value="Bike"> Hybrid Method<br>

	        	</div>
	        	<div class="col-xs-2 col-half-offset" id="p4">
	        		<b>Optimization Technique</b><br>
					<input type="checkbox" name="r" value="Bike"> GA<br>
					<input type="checkbox" name="r" value="Bike"> PSO<br>
					<input type="checkbox" name="r" value="Bike"> DE<br>
					<input type="checkbox" name="r" value="Bike"> GD<br>
					<input type="checkbox" name="r" value="Bike"> Adam<br>

	        	</div>
	        	<div class="col-xs-2 col-half-offset" id="p5">
	        		<b>Outcome</b><br>
					<input type="checkbox" name="r" value="Bike"> Website<br>
					<input type="checkbox" name="r" value="Bike"> App<br>
					<input type="checkbox" name="r" value="Bike"> Command Line Interface<br>
					<input type="checkbox" name="r" value="Bike"> Device<br>
	        	</div>
	    	</div>
		</div>
  		<input type="submit" value="Submit">
	</form>
</body>

<?php
	if(isset($_GET['Submit'])){
		echo "<h1> hello</h1>";
		foreach ($_GET as $key => $value) {
			echo "<h1>".$key." ". $value."</h1>";
		}
	}

?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>