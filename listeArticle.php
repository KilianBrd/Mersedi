
<body>
<?php
session_start();
require "header.php";
require "backend/database.php";

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
                        
                <?php endforeach; ?>

<?php
require "footer.php";
?>