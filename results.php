<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Search Results</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body id="results">

	<?php
		include '_header.html';
	?>

	<div class="container card cf">
		<h1><i class="fa fa-search"></i> Search results for "Happy"</h1>

		<p class="category">Music</p>
		<hr/>
		<div class="music-results">
			<div class="song card">
				<img src="img/song-demo.jpg" alt="Can't Feel my Face" class="pic">
				<p class="name">Can't Feel my Face</p>
				<p class="info">by <span>The Week End</span></p>
				<a href="#" target="_blank" class="yt-link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
			</div>
		</div>


		<p class="category">People</p>
		<hr/>
		<div class="people-results">
			<a href="#">
				<div class="account card">
					<img src="img/default-pp.jpg" alt="" class="photo">
					<p class="name">Mostafa Nabil</p>
				</div>
				<div class="account card">
					<img src="img/default-pp.jpg" alt="" class="photo">
					<p class="name">Mahmoud Amin</p>
				</div>
			</a>
		</div>

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/header.js"></script>
</body>

</html>
