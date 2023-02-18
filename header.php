<?php
session_start();
$page = basename($_SERVER['PHP_SELF']);

if (isset($_SESSION['pseudo'])) {
	$pseudo = $_SESSION['pseudo'];
} else {
	$pseudo = "";
}

$liste_pages_nocookie = array(
	array('page' => 'index.php', 'title' => 'Accueil'),
);

if (isset($_SESSION['pseudo'])) {
	$arrayPage = array(
		array('page' => 'index.php', 'title' => 'Accueil'),
		array('page' => 'creerArticle.php', 'title' => 'Creer un article'),
		array('page' => 'listeArticle.php', 'title' => 'Tous les articles'),
		array('page' => 'profil.php', 'title' => 'Compte'),
	);
} else {
	$arrayPage = array(
		array('page' => 'index.php', 'title' => 'Accueil'),
		array('page' => 'connection.php', 'title' => 'Connection'),
		array('page' => 'inscription.php', 'title' => "S'inscrire"),
	);
}


$title_id = array_search($page, array_column($arrayPage, 'page'));
$titlePage = $arrayPage[$title_id]['title'];
$active = 'active';
?>

<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="./style/style.css">
	<link rel="icon" href="./assets/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet">
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
					if ($item['title'] === "Compte") {
						echo "<li><div class='profil_header'><a href='./" . $url . "'><img src='./assets/user.png'><p>" . $_SESSION["pseudo"] . "</p></a></div></li>";
					} else {
						echo '<li><a href="./' . $url . '" class="navLien custom-btn btn-navbar">'. $title . '</a></li>';
					}
				} ?>
			</ul>
		</div>
	</nav>