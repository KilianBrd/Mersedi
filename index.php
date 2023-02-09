<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Mersedi</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/index.css">
</head>
<body>
	<?php require "header.php" ?>
	<h1 id="titre">Mersedi Blog</h1>
	<?php echo "<p> Bienvenue " . $_SESSION['pseudo']; ?><br>
	<a href ="deconnexion.php">
		<button>Se déconnecter</button>
	</a>
	<a href="creer.php">
		<button>Créer un article</button>
	</a>
</body>
</html>

<?php 
include "database.php";
if (isset($_SESSION['pseudo'])) {
	
} else {
	header('Location: /SiteMersedi/connection.php');
}

$articles = $bdd->query('SELECT art_id as idArticle, art_contenu as contenu, art_titre as titre, utilisateur.pseudo as pseudo FROM article
						 inner join utilisateur on article.idUser = utilisateur.id');
                foreach ($articles as $article):
                    ?>
                    <article>
                        <header>
                            <h1 class="titreArticle"><?php echo $article['titre']; ?></h1>
                        </header>
                        <p><?= $article['contenu']; ?></p>
                        <p><?= $article['pseudo']; ?></p>
                    </article>
                    <hr />
                <?php endforeach; ?>
