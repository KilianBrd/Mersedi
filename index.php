<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mersedi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<?php require "header.php" ?>
	<h1 id="titre">Mersedi Blog</h1>
	<?php echo "<p> Bienvenue " . $_SESSION['pseudo']; ?><br>
	<a href ="deconnexion.php">
		<button>Se déconnecter</button>
	</a>
</body>
</html>
