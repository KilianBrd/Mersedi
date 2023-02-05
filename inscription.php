<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>S'inscrire</title>
	<meta charset="utf-8">
	<?php require "header.php"; ?>
</head>
<body id="bodyInscription" class="bosyInscription">
	<form id="formInscription" method="post" action="">
		<div id="titreInscription">
			<h1>Aller, inscris toi, on est bien</h1>
		</div>
		<label for="pseudo" id="labelPseudo">Ton pseudo !</label>
		<input type="text" name="pseudo" id="pseudo" class="inp-anim" required><br>
		<label for="email" id="labelEmail">Balance ton mail ma poule !</label>
		<input type="text" name="email" id="email" class="inp-anim" required><br>
		<label for="mdp" id="labelMdp">Ton mot de passe secret !</label>
		<input type="password" name="mdp" id="mdp" class="inp-anim" required><br>
		<input type="submit" name="formsend" id="formsend">
	</form>
</body>
<?php

include "database.php";
if(isset($_POST['formsend'])){
	if (!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
		$pseudo = htmlspecialchars($_POST['pseudo']);
		$email = htmlspecialchars($_POST['email']);
		$mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
		$insertUser = $bdd -> prepare('INSERT INTO utilisateur(pseudo, email, mdp) VALUES(?, ?, ?)');
		$insertUser -> execute(array($pseudo, $email, $mdp));

		$recupUser = $bdd -> prepare('select * from utilisateur where pseudo = ? and mdp = ? and email = ?');
		$recupUser->execute(array($pseudo, $mdp, $email));
		if ($recupUser->rowCount() > 0) {
			$_SESSION['pseudo'] = $pseudo;
			$_SESSION['mdp'] = $mdp;
			$_SESSION['id'] = $recupUser->fetch()['id'];
		}
		echo $_SESSION['pseudo'];
	}else {
		echo "Rempli tout !";
	}
}
