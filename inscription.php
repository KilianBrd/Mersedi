<!DOCTYPE html>
<html>
<head>
	<title>S'inscrire</title>
	<meta charset="utf-8">
	<?php require "header.php"; ?>
</head>
<body id="bodyInscription" class="bosyInscription">
	<form id="formInscription" method="post" action="../backend/inscriptionBackEnd.php">
		<div id="titreInscription">
			<h1>Aller, inscris toi, on est bien</h1>
		</div>
		<input type="text" name="pseudo" id="pseudo" class="inp-anim" placeholder="Ton pseudo !" required><br>
		<input type="text" name="email" id="email" class="inp-anim" required placeholder="Balance ton mail ma poule !"><br>
		<input type="password" name="mdp" id="mdp" class="inp-anim" required placeholder="Ton mot de passe secret!"><br>
		<input type="submit" name="formsend" id="formsend">
	</form>
</body>
