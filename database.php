<?php 

	try {
		$bdd = new PDO('mysql:host=localhost,dbname=id20135329_article;charset=utf8','id20135329_mersedi','Mickey01!500184');
	} catch(Exception $e) {
		die('Erreur'.$e->getMessage());
	}