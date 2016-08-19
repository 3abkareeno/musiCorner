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

<body id="home">

	<?php
		include '_header.html';
	?>

	<div class="container cf">
		<div class="sidebar">
			<div class="card mini-profile">
				<img src="img/default-pp.jpg" alt="" class="photo">
				<a class="profile" href="#">
					<p class="name">Abdelrahman Osama</p>
				</a>
				<p class="info">you suggested 25 song</p>
				<a href="profile_edit.html" class="edit"><i class="fa fa-pencil" aria-hidden="true"></i>Edit info</a>
			</div>
			<ul class="buttons">
				<li class="music">Discover New Songs</li>
				<li class="friends">Friends Suggestions</li>
			</ul>
		</div>
		<div class="card feed">
			<div class="music-content">
				<p class="mood">Happy</p>
				<hr/>
				<div class="song card">
					<img src="img/song-demo.jpg" alt="Can't Feel my Face" class="pic">
					<p class="name">Can't Feel my Face</p>
					<p class="info">by <span>The Week End</span></p>
					<a href="#" target="_blank" class="yt-link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
				</div>
			</div>
			<div class="friends-content">
				<p class="no-friends">You have no friends...<br/>Check out these <span>new songs</span>!</p>
				<div class="friend">
					<div class="profile">
						<div class="pic"></div>
						<p class="name">Mostafa Nabil <span>has suggested these songs</span></p>
					</div>
					<div class="latest-music">
						<!-- Maximum 3 songs -->
						<div class="song card">
							<img src="img/song-demo.jpg" alt="Can't Feel my Face" class="pic">
							<p class="name">Can't Feel my Face</p>
							<p class="info">by <span>The Week End</span></p>
							<a href="#" target="_blank" class="yt-link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						</div>
						<div class="song card">
							<img src="img/song-demo.jpg" alt="Can't Feel my Face" class="pic">
							<p class="name">Can't Feel my Face</p>
							<p class="info">by <span>The Week End</span></p>
							<a href="#" target="_blank" class="yt-link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						</div>
						<div class="song card">
							<img src="img/song-demo.jpg" alt="Can't Feel my Face" class="pic">
							<p class="name">Can't Feel my Face</p>
							<p class="info">by <span>The Week End</span></p>
							<a href="#" target="_blank" class="yt-link"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
						</div>
					</div>
					<a class="cta" href="#">View Profile</a>
				</div>
				<hr/>
			</div>
		</div>
	</div>

	<script src="js/jquery.js"></script>
	<script src="js/header.js"></script>
	<script type="text/javascript">
		$("document").ready(function() {
			$("#home .music-content").show();
			$("#home .friends-content").hide();

			if($(window).width() > 750){
				var sidebarWidth = $(".container").width() * 29 / 100;
				$(".sidebar").width(sidebarWidth);
			}

			$(window).resize(function() {
				if($(window).width() > 750){
					sidebarWidth = $(".container").width() * 29 / 100;
					$(".sidebar").width(sidebarWidth);
				}else{
					$(".sidebar").removeAttr('style');
				}
			});

			$("#home .sidebar ul.buttons li.music").click(function() {
				$("#home .music-content").show();
				$("#home .friends-content").hide();
			});
			$("#home .friends-content span").click(function() {
				$("#home .music-content").show();
				$("#home .friends-content").hide();
			});
			$("#home .sidebar ul.buttons li.friends").click(function() {
				$("#home .music-content").hide();
				$("#home .friends-content").show();
			});
		});
	</script>
</body>

</html>
