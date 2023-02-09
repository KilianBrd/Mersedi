<?php
require "header.php";
include "database.php";
?>
<body id="bodyIndex">
<div id="titreConnexion">
    <h1> Mes postes :</h1>
</div>
<?php

$articles = $bdd->prepare('SELECT art_id as idArticle, art_contenu as contenu, art_titre as titre,
                         utilisateur.pseudo as pseudo, art_date as date FROM article inner join utilisateur
                          on article.idUser = utilisateur.id where article.idUser = ?');
$articles -> execute(array($_SESSION['id']));
                foreach ($articles as $article):
                    ?>
                    <article>
                        <header>
                            <div id="divArticle">
                              <h1 class="titreArticle"><?php echo $article['titre']; ?></h1>
                            </div>
                        </header>
                        <p><strong><?= $article['contenu']; ?></strong></p>
                        <p><i><?= $article['pseudo']; ?></i></p>
						<?php $date = date("d-m-Y H:i", strtotime($article['date'])); ?>
						<time><?= $date ?></time>
                    </article>
                    <hr />
                <?php endforeach; ?>

<p> Supprimer un article :</p><?php
$articles = $bdd->prepare('SELECT art_id as idArticle, art_contenu as contenu, art_titre as titre,
                         utilisateur.pseudo as pseudo, art_date as date FROM article inner join utilisateur
                          on article.idUser = utilisateur.id where article.idUser = ?;');
$articles -> execute(array($_SESSION['id']));?>
<form method="post">
    <select name="articleSuppr">
        <option value="">--Choisir titre de l'article à supprimer--</option>
        <?php foreach ($articles as $article){ 
            $titreArticle = $article['titre'];
            $idArticle = $article['idArticle']; ?>
            <option value="<?php echo $idArticle; ?>"> <?php echo $titreArticle; ?> </option>
        <?php }; ?>
    </select>
    <input type="submit" name="formsend" id="formsend">
</form>

<?php 
    $idSuppr = $_POST['articleSuppr'];
    $suppr = $bdd -> prepare('delete from article where art_id = ?');
    $suppr -> execute(array($idSuppr));

    ?>

        </body>