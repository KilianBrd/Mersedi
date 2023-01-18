<!DOCTYPE html>
<html>
<head>
	<title>Se connecter</title>
	<meta charset="utf-8">
</head>
<body>
	<form method="post" action="">
		<input type="text" name="pseudo" id="pseudo" placeholder="Ton pseudo !" required><br>
		<input type="password" name="mdp" id="mdp" placeholder="Ton mot de passe secret" required><br>
		<input type="submit" name="formsend" id="formsend">
	</form>
</body>
</html>

<?php
include "database.php";

if(isset($_POST['formsend'])) {
    if(!empty($_POST['pseudo']) and !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = ($_POST['mdp']);

        $recupUser = $bdd -> prepare('select mdp as password, pseudo as pseudo from utilisateur where pseudo = ?');
        $recupUser->execute(array($pseudo));
        $res = $recupUser->fetch(PDO::FETCH_ASSOC);

        echo $res['mdp'];


        if ($recupUser->rowCount() > 0){
            if(password_verify($mdp, $mdpHash)){
                echo "c'est tout bon";
            }
        } else {
            echo "mot de passe ou pseudo incorrect";
        }
    }else {
        echo "Rempli tous les champs, de suite";
    }
} 