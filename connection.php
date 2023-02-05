<!DOCTYPE html>
<html>
<head>
	<title>Se connecter</title>
	<meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
<?php require "header.php"; ?>
	<form method="post" action="">
        <h1> Connecte-toi !</h1>
		<input type="text" name="pseudo" id="pseudo" placeholder="Ton pseudo !" required><br>
		<input type="password" name="mdp" id="mdp" placeholder="Ton mot de passe secret" required><br>
		<input type="submit" name="formsend" id="formsend">
        <p> Tu n'as pas encore de compte ?</p><a href="inscription.php"> Clique ici ou j'te clique</a>
	</form>
</body>
</html>

<?php
session_start();
include "database.php";
if(isset($_POST['formsend'])) {
    if(!empty($_POST['pseudo']) and !empty($_POST['mdp'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $mdp = ($_POST['mdp']);

        $recupUser = $bdd -> prepare('select mdp as password, pseudo as pseudo,id as id from utilisateur where pseudo = ?');
        $recupUser->execute(array($pseudo));
        $res = $recupUser->fetch(PDO::FETCH_ASSOC);

        $mdpHash = $res["password"];
        $idUser = $res["id"];
        if ($recupUser->rowCount() > 0){
            if(password_verify($mdp, $mdpHash)){
                echo "c'est tout bon " . $pseudo;
                $_SESSION['pseudo']=$pseudo;
                $_SESSION['mdp'] = $mdp;
                $_SESSION['id'] = $idUser;
            } else {
                echo "mot de passe incorrect";
            }
        } else {
            echo "pseudo incorrect";
        }
    }else {
        echo "Rempli tous les champs, de suite";
    }
} else {
    $pseudo = " ";
}