<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>By The Nerds | Kansas City Nerd Collective</title>
	<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<link href="css/styles.css" rel="stylesheet" />
</head>
<body>
 <video autoplay loop muted poster="img/poster.png" id="bgvid">
	<source src="video/wgo.mp4" type="video/mp4">
	<source src="video/wgo.webm" type="video/webm">
</video>

<div class="overlay">
	<h1>We're too busy enjoying this tasty video, but we'll create a real website soon.</h1>
	<h2>- The Nerds</h2>

	<h3>Unmute this glorious video.</h3>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
$('h3').on('click', function() {
	$('#bgvid').prop('muted', false);
});
</script>
 
</body>
</html>