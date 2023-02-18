<?php
require "header.php";
require "backend/database.php";
session_start();
?>

<h1 class="changeMdpTitre"> Change ton mot de passe</h1>
<form method="post">
    <label for="ancienMdp"> Ton ancien mot de passe :</label>
    <input type="text" name="ancienMdp">
    <label for="nouveauMdp">Ton nouveau mot de passe :</label>
    <input type="text" name="nouveauMdp">
    <input type="submit">
</form>

<?php
$idUser = $_SESSION['id'];
$recupMdp = $bdd -> prepare('SELECT mdp from utilisateur where id = ?');
$recupMdp -> execute(array($idUser));
$res = $recupMdp->fetch(PDO::FETCH_ASSOC);
$ancienMdp = $res['mdp'];
$verifMdp = $_POST['ancienMdp'];
if(password_verify($verifMdp, $ancienMdp)) {
    echo "mot de passe bon";
    $nouveauMdpHash = password_hash($_POST['nouveauMdp'], PASSWORD_DEFAULT);
    $changementMdp = $bdd -> prepare('UPDATE utilisateur set mdp = ? where id = ?');
    $changementMdp -> execute(array($nouveauMdpHash, $idUser));
} else {
    echo "ancien mot de passe incorrect";
}
require "footer.php";
?>