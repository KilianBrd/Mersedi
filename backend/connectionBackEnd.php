<?php
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
                header('Location: ./index.php');
            } else {
                echo "mot de passe incorrect";
            }
        } else {
            echo "pseudo incorrect";
        }
    }else {
        echo "Rempli tous les champs, de suite";
    }
}