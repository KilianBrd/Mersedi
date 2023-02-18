<?php require "header.php"; ?>
<div class="login">
    <form method="post" action="./backend/connectionBackEnd.php" id="formConnexion" class="formConnexion">
        <h1> Connecte-toi !</h1>
        <input type="text" name="pseudo" id="pseudo" placeholder="Ton pseudo !" required><br>
        <input type="password" name="mdp" id="mdp" placeholder="Ton mot de passe secret" required><br>
        <input type="submit" name="formsend" id="formsend" class="custom-btn btn_connexion">
        <a href="./index.php">Mot de passe oubliez ?</a>
    </form>
</div>
<?php require 'footer.php'; ?>