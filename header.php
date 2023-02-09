<?php session_start(); ?>

<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="style/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
</head>
<body>
<nav>
		<ul>
			<li>
				<a id="navLien" href="index.php">Accueil</a>
			</li>
			<li>
				<a id="navLien" href="contact.php">Contacte-moi</a>
			</li>
			<li>
				<a id="navLien" href="connection.php">Se connecter</a>
			</li>
			<li>
				<a id="navLien" href="inscription.php">S'inscrire</a>
			</li>
			<li>
				<a href="profil.php" id="navLien"><?php echo $_SESSION['pseudo']; ?></a>
			</li>
		</ul>
	</nav>
</body>