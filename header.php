<?php
session_start();
$page = basename($_SERVER['PHP_SELF']);

$liste_pages_unconnect = array(
	array('page' => 'index', 'title' => 'Accueil'),
	array('page' => 'connection', 'title' => 'Connection'),
	array('page' => 'inscription', 'title' => "S'inscrire"),
);

$liste_pages_connect = array(
	array('page' => 'index', 'title' => 'Accueil'),
	array('page' => 'profil', 'title' => 'Profil'),
);

$liste_pages_nocookie = array(
	array('page' => 'index', 'title' => 'Accueil'),
);

$title_id = array_search($page, array_column($liste_pages_unconnect, 'page'));
$arrayPage = $liste_pages_unconnect;
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
                ?>
                    <li><a href="<?php echo $url; ?>.php" class= "navLien custom-btn btn-navbar<?php $page == $url?'active':''?>"> <?php echo $title ?></a></li>
                <?php } ?>
			</ul>
		</div>
	</nav>