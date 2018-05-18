<?php

	// ---------------------------------------------
	// getBD()
	// Date de création : 18.05.2018
	// Fonction : connexion à la BD : instancie et renvoie l'objet PDO
	// Sortie : $connexion
	function getBD(){
		// connexion au serveur MySQL et à la BD snows
		$connexion = new PDO('mysql:host=localhost; dbname=tpi', 'root', '1234');
		// permet d'avoir plus de déatils sur les erreur retournées
		$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $connexion;
	}
