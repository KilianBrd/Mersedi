
<?php require "header.php" ?>
<form method="post" action="../backend/creerArticle.php">
    <input type="text" required placeholder="Met un titre" id="titreArticle" name="titreArticle"><br>
    <input type="text" required placeholder="Ecrit ton poste !" id="contenuArticle" name="contenuArticle"><br>
    <input type="submit" name="formsend" id="formsend">
</form>

