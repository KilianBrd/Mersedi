<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>S'inscrire</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="">
		<input type="text" name="pseudo" id="pseudo" placeholder="Ton pseudo !" required><br>
		<input type="text" name="email" id="email" placeholder="Balance ton mail ma poule !" required><br>
		<input type="password" name="mdp" id="mdp" placeholder="Ton mot de passe secret" required><br>
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
