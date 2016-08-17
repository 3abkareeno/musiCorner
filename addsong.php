<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Add a new Song</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
</head>

<body id="add">

	<?php
		include '_header.html';
	?>

	<div class="container card cf">

		<h1><i class="fa fa-music"></i></h1>
		<h1>Add a new Song</h1>

		<form class="add" method="post">
			<input name="songname" type="text" placeholder="Song Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Song Name'" required>

			<input name="artist" type="text" placeholder="Artist" onfocus="this.placeholder=''" onblur="this.placeholder = 'Artist'" required>


			<input name="link" type="text" placeholder="Youtube Link" onfocus="this.placeholder=''" onblur="this.placeholder = 'Youtube Link'" required>

			<div class="group">
				<label>Song Picture</label>
				<input name="photo" type="file">
			</div>

			<div class="group">
				<label>Mood</label>
				<select>
					<option value="sad">Sad</option>
					<option value="happy">Happy</option>
				</select>
			</div>


			<input type="submit" value="Add">

		</form>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/header.js"></script>
</body>

</html>
