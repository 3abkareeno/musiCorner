<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Abdelrahman Osama</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body id="profile">

	<?php
		include '_header.html';
	?>

	<div class="container card cf">
		<img src="img/default-pp.jpg" alt="" class="main-photo">
		<p class="full-name">Abdelrahman Osama</p>

		<a class="follow" href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>FOLLOW</a>
		<a class="edit" href="#"><i class="fa fa-pencil" aria-hidden="true"></i>EDIT INFO</a>

		<div class="song-list">
			<h1>recommends these songs</h1>
			<p class="mood">Happy</p>
			<hr/>
			<div class="song card">
				<img src="img/song-demo.jpg" alt="Can't Feel my Face" class="pic">
				<p class="name">Can't Feel my Face</p>
				<p class="info">by <span>The Week End</span></p>
				<button class="yt-link" onclick="location.href = '#';" name="login"><i class="fa fa-youtube-play" aria-hidden="true"></i></button>
			</div>
		</div>

	</div>

	<script src="js/jquery.js"></script>
	<script src="js/header.js"></script>
</body>

</html>
