<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mersedi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body id="bodyIndex">
	<?php require "header.php" ?>
	<div id="titreConnexion">
		<h1 id="titre">Mersedi Blog</h1>
	</div>
	<?php echo "<p> Bienvenue " . $_SESSION['pseudo']; ?><br>
		<a id="lienIndex"href ="deconnexion.php">
			<button id="boutonIndex">Se déconnecter</button>
		</a>
		<a id="lienIndex" href="creer.php">
			<button id="boutonIndex">Créer un article</button>
		</a>

		<?php 
include "database.php";
if (isset($_SESSION['pseudo'])) {
	
} else {
	header('Location: /SiteMersedi/connection.php');
}

$articles = $bdd->query('SELECT art_id as idArticle, art_contenu as contenu, art_titre as titre, utilisateur.pseudo as pseudo, art_date as date FROM article
						 inner join utilisateur on article.idUser = utilisateur.id order by date desc');
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

</body>
</html>

