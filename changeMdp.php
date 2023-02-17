<?php
require "header.php";
require "backend/database.php";
session_start();
?>

<h1 class="changeMdpTitre"> Change ton mot de passe</h1>
<form method="post">
    <label for="ancienMdp"> Ton ancien mot de passe :</label>
    <input type="text" name="ancienMdp">
</form>

<?php
$idUser = $_SESSION['id'];
$recupMdp = $bdd -> prepare('SELECT mdp from utilisateur where id = ?');
$recupMdp -> execute(array($idUser));
$res = $recupMdp->fetch(PDO::FETCH_ASSOC);
$ancienMdp = $res['mdp'];
echo $ancienMdp;
$verifMdp = $_POST['ancienMdp'];
echo $verifMdp;
if(password_verify($mdpHash,))
require "footer.php";
?>