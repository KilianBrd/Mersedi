<?php
session_start();
$page = basename($_SERVER['PHP_SELF']);

$liste_pages_nocookie = array(
	array('page' => 'index', 'title' => 'Accueil'),
);

if(isset($_SESSION['pseudo'])) {
	$arrayPage = array(
		array('page' => 'index', 'title' => 'Accueil'),
		array('page' => 'profil', 'title' => $_SESSION['pseudo']),
		array('page' => 'creerArticle', 'title' => 'Creer un article'),
		array('page' => 'listeArticle', 'title' => 'listeArticle'),
	);
} else {
	$arrayPage = array(
		array('page' => 'index.php', 'title' => 'Accueil'),
		array('page' => 'connection', 'title' => 'Connection'),
		array('page' => 'inscription', 'title' => "S'inscrire"),
	);
}


$title_id = array_search($page, array_column($liste_pages_unconnect, 'page'));
$titlePage = $arrayPage[$title_id]['title'];
$active = 'active';

?>

<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
	<title>Mersedi | <?php echo $titlePage ?></title>
</head>

<body>
	<nav>
		<div class="logo">
			<a class="navlogo" href="./index.php">
				<img src="./assets/favicon.png" alt="Logo de mersedi">
				<h1>Mersedi</h1>
			</a>
		</div>
		<div class="menu">
			<ul>
				<?php
                foreach ($arrayPage as $item) {
                    $url = $item['page'];
                    $title = $item['title'];
                ?>
                    <li><a href="<?php echo $url; ?>.php" class= "navLien custom-btn btn-navbar<?php $page == $url?'active':''?>"> <?php echo $title ?></a></li>
                <?php } ?>
				<li> <?php $_SESSION['pseudo']; ?>
			</ul>
		</div>
	</nav>