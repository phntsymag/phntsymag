<?php
session_start();

include("connection.php");
include("functions.php");

$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>
	<title>My website</title>
</head>

<body>
	<div><strong>Hello, <?php echo $user_data['user_name']; ?></strong><br>

		<h3>This is the index page</h3><br>
		<p>See the <a href="gallery.html">Gallery</a></p>
		<p>Read the <a href="blog.html">Blog</a></p>
		<a href="logout.php">Logout</a>
		<br>
	</div>
	<footer><a href="sitemap.html">site map</a></footer>
</body>

<style>
	html {
		background-color: lightgreen;
		background-image: radial-gradient(red, blue, green);
	}

	a {
		font-size: smaller;
		font-style: italic;
		color: black;
	}

	body {
		min-height: 100vh;
		display: flex;
		flex-direction: column;
		text-align: center;
	}

	footer {
		margin-top: auto;
	}

	div {
		width: 300px;
		height: 100px;
		text-align: center;

	}
</style>

</html>