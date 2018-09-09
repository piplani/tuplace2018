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
				<div id="advanced-toggle">Advanced&nbsp;&nbsp;<div id="arrow">&#9660;</div></div>

				<!-- Project Domain -->
				<div class="inline field">
					<label>Project Domain</label>
					<select name="domain[]" multiple="" class="label ui selection fluid dropdown">
						<option value="">All</option>
						<option value="audio processing"> Audio Processing </option>
						<option value="blockchain">Blockchain</option>
						<option value="classification"> Classification </option>
						<option value="deep learning"> Deep Learning </option>
						<option value="device development"> Device Development </option>
						<option value="finance"> Finance </option>
						<option value="geo informatics"> Geo Informatics </option>
						<option value="health care"> Health Care </option>
						<option value="image processing"> Image Processing </option>
						<option value="information retrieval"> Information Retrieval </option>
						<option value="machine learning"> Machine Learning </option>
						<option value="optimization"> Optimization </option>
						<option value="real time processing"> Real time Processing </option>
						<option value="recommendation system"> Recommendation System </option>
						<option value="text processing"> Text Processing </option>
						<option value="time series"> Time Series </option>
						<option value="video processing"> Video Processing </option>
						<option value="web-scraping"> Web-Scraping </option>
					</select>
				</div>

				<div id="advanced" style="display: none;">
					<div class="inline field">
						<label>Tools Used</label>
						<select name="tools[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value="assembly">Assembly</option>
							<option value="aws">AWS</option>
							<option value="beautifulsoup">BeautifulSoup</option>
							<option value="c/c++/java">C/C++/Java</option>
							<option value="gensim">Gensim</option>
							<option value="graphlab create">Graphlab Create</option>
							<option value="iexmap">IEXMAP</option>
							<option value="keras">Keras</option>
							<option value="matlab">MatLab</option>
							<option value="numpy">Numpy</option>
							<option value="opencv">OpenCV</option>
							<option value="os">OS</option>
							<option value="pandas">Pandas</option>
							<option value="python">Python</option>
							<option value="pytorch">Pytorch</option>
							<option value="r">R</option>
							<option value="rasa">Rasa</option>
							<option value="scikit-learn">scikit-Learn</option>
							<option value="scipy">Scipy</option>
							<option value="tensorflow">Tensorflow</option>
							<option value="terrier">Terrier</option>
							<option value="tkinter">Tkinter</option>
						</select>
					</div>

					<div class="inline field">
						<label>Technique Used</label>
						<select name="technique[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value = "ARIMA"> ARIMA </option>
							<option value = "artificial neural network"> Artificial Neural Network </option>
							<option value = "CNN"> CNN </option>
							<option value = "collaborative filtering"> Collaborative Filtering </option>
							<option value = "count vectorizer"> Count Vectorizer </option>
							<option value = "GAN"> GAN </option>
							<option value = "hybrid"> Hybrid </option>
							<option value = "image segmentation"> Image Segmentation </option>
							<option value = "keras retinanet"> Keras Retinanet </option>
							<option value = "LSTM"> LSTM </option>
							<option value = "matplotlib"> Matplotlib </option>
							<option value = "ML"> ML </option>
							<option value = "naive bayes classifier"> Naive Bayes Classifier </option>
							<option value = "neural network"> Neural Network </option>
							<option value = "numpy"> Numpy </option>
							<option value = "pandas"> Pandas </option>
							<option value = "rain forest"> Rain Forest </option>
							<option value = "RNN"> RNN </option>
							<option value = "SAE"> SAE </option>
							<option value = "seaborn"> Seaborn </option>
							<option value = "sentiment analysis"> Sentiment Analysis </option>
							<option value = "statistical analysis"> Statistical Analysis </option>
							<option value = "tf-idf vectorizer"> Tf-idf Vectorizer </option>
							<option value = "web scraping"> Web Scraping </option>
							<option value = "word2vec"> word2vec </option>
							<option value = "other"> Other </option>
						</select>
					</div>

					<div class="inline field">
						<label>Optimization Technique Used</label>
						<select name="opt_technique[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value = "ADAM"> ADAM </option>
							<option value = "ALO"> ALO </option>
							<option value = "Bayesian Optimization"> Bayesian Optimization </option>
							<option value = "DE"> DE </option>
							<option value = "GA"> GA </option>
							<option value = "GD"> GD </option>
							<option value = "GWO"> GWO </option>
							<option value = "Locality sensitive hashing"> Locality Sensitive Hashing </option>
							<option value = "MVO"> MVO </option>
							<option value = "NADAM"> NADAM </option>
							<option value = "NLP"> NLP </option>
							<option value = "PSO"> PSO </option>
							<option value = "SCA"> SCA </option>
							<option value = "SG"> SG </option>
							<option value = "SGD"> SGD </option>
							<option value = "WOA"> WOA </option>
							<option value = "XGBOOST"> XGBOOST </option>
						</select>
					</div>

					<div class="inline field">
						<label>Outcome</label>
						<select name="outcome[]" multiple="" class="label ui selection fluid dropdown">
							<option value="">All</option>
							<option value = "algorithm"> Algorithm </option>
							<option value = "app"> App </option>
							<option value = "audio"> Audio </option>
							<option value = "brain"> Brain </option>
							<option value = "cli"> CLI </option>
							<option value = "desktop application"> Desktop Application </option>
							<option value = "device"> Device </option>
							<option value = "gui"> GUI </option>
							<option value = "image"> Image </option>
							<option value = "model"> Model </option>
							<option value = "publication"> Publication </option>
							<option value = "research paper"> Research paper </option>
							<option value = "script"> Script </option>
							<option value = "website"> Website </option>
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