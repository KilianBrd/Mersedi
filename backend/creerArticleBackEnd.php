<?php
include "database.php";
session_start();
if(isset($_POST['formsend'])) {
    if(!empty($_POST['titreArticle']) and !empty($_POST['contenuArticle'])){
        $titre = $_POST['titreArticle'];
        $contenu = $_POST['contenuArticle'];
        $idUser = $_SESSION['id'];
        $timestamp = time();
        $date = date("Y-m-d:H:i:s", $timestamp);
        $insertArticle = $bdd -> prepare("INSERT INTO article(art_contenu, art_titre, idUser, art_date) VALUES(?, ?, ?, ?)");
		$insertArticle -> execute(array($contenu, $titre, $idUser, $date));
        header('Location: ../listeArticle.php');
    }
}