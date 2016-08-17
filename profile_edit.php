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

		<div class="edit-info">

			<h1>Edit your info</h1>

			<form class="edit-form" method="post" action="">
				<input name="name" type="text" placeholder="New Full Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'New Full Name'" maxlength="15" required>

				<input name="useremail" type="email" placeholder="New Email" onfocus="this.placeholder=''" onblur="this.placeholder = 'New Email'" required>

				<input name="userpass" type="password" placeholder="New Password" onfocus="this.placeholder=''" onblur="this.placeholder = 'New Pasword'" required>

				<input type="submit" value="Save Changes">
			</form>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/header.js"></script>
</body>

</html>
