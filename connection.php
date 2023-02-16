<?php require "header.php"; ?>
    <p>Il te faut un compte si tu veux acceder au site ! Alors connecte toi ou créer un compte !</p>
	<form method="post" action="/Mersedi/backend/connectionBackEnd.php" id="formConnexion" class="formConnexion">
        <div id="titreConnexion">
            <h1> Connecte-toi !</h1>
        </div>
		<input type="text" name="pseudo" id="pseudo" placeholder="Ton pseudo !" required><br>
		<input type="password" name="mdp" id="mdp" placeholder="Ton mot de passe secret" required><br>
		<input type="submit" name="formsend" id="formsend" action="/Mersedi/backend/connectionBackEnd.php">
        <p> Tu n'as pas encore de compte ?<a href="inscription.php"> Clique ici ou j'te clique</a></p>
	</form>
</body>
</html>

