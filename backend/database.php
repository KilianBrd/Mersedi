<?php 

	try {
		$bdd = new PDO('mysql:host=localhost;dbname=Mersedi;charset=utf8','administrateur','simone');
	} catch(Exception $e) {
		die('Erreur'.$e->getMessage());
	}