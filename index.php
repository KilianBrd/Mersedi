<!DOCTYPE html>
<html>
<head>
	<title>Mersedi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<nav>
		<ul>
			<li>
				<a href="#">Accueil</a>
			</li>
			<li>
				<a href="contact.html">Contacte-moi</a>
			</li>
			<li>
				<a href="connection.html">Se connecter</a>
			</li>
			<li>
				<a href="inscription.php">S'inscrire</a>
			</li>
		</ul>
	</nav>
	<h1>Mersedi Blog</h1>
	<form method="post" action="connection.php">
		<input type="text" name="mail">
		<input type ="text" name="mdp">
		<input type="submit" name="submit">
	</form>
	<?php
	echo "lol";
	?>
</body>
</html>