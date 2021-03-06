<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>musiCorner</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="landing-container">
		<header class="cf">
			<button type="button" onclick="location.href = 'signin.php';" name="login">Login</button>
		</header>
		<div class="container">
			<img class="logo" src="img/Logo.png" alt="LOGO">
			<h1>Discover new music!</h1>
			<form class="signup" method="post" action="action.html">
				<input name="name" type="text" placeholder="Full Name" onfocus="this.placeholder=''" onblur="this.placeholder = 'Full Name'" maxlength="15" required>

				<input name="username" type="text" placeholder="Username" onfocus="this.placeholder=''" onblur="this.placeholder = 'Username'" maxlength="15" required></input>
				<p class="validation">Username alredy exists !</p>

				<input name="useremail" type="email" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email'" required>
				<p class="validation">Email alredy registered !</p>

				<input name="userpass" type="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder = 'Pasword'" required>

				<input type="submit" value="Sign up">


				<p class="login">or <a href="signin.php">Login</a></p>
			</form>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script type="text/javascript">
		$("document").ready(function(){
			$(".landing-container").height($(window).height());

			$(window).resize(function(){
			  $(".landing-container").height($(window).height());
			});


		});
	</script>
</body>

</html>
