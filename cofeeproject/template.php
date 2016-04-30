<!DOCTYPE html>
<html lang="EN">
<head>
	<title> cofee website</title>
	<meta charset="utf-8">
    <link rel="stylesheet" href="stylesheet/layout.css" type="text/css" media="all">

</head>
<style>

</style>
<body>
	<div id="wrapper">
		<div id="banner">

		</div>
		<nav id="navigation">
          <img src="images/im3.jpg" height="60px;">
			<ul id="nav">
				<li><a href="index.php">Home</a></li>
				<li><a href="">Cofee</a></li>
				<li><a href="">ShOP</a></li>
				<li><a href="">About</a></li>
			</ul>

		</nav>
		<div id="content_area">
			<?php echo $content; ?>
		</div>
		<div id="sidebar">
		</div>
	</div>

	<footer>
		<p> All rights reserved </p>
	</footer>
</body>
</html>