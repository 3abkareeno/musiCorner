<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Welcome Back!</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,900" rel="stylesheet">
	<link rel="stylesheet" href="css/normalize.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<div class="container signin">
		<img class="logo" src="img/Logo.png" alt="LOGO">
		<form class="signup card" method="post" action="action.html">
			<h1>Login</h1>
			<p class="validation">Wrong Email/Password !</p>
			<input name="useremail" type="email" placeholder="Email" onfocus="this.placeholder=''" onblur="this.placeholder = 'Email'" required>
			<input name="userpass" type="password" placeholder="Password" onfocus="this.placeholder=''" onblur="this.placeholder = 'Pasword'" required>
			<input type="submit" value="Login">
		</form>
	</div>
</body>

</html>
