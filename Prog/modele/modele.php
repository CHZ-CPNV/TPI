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

function inscriptionDone($post){
  $connexion = getBd();
	$password = $post['fPassword'];
	$password = md5($password);
  $requete = "INSERT INTO profs (Acronyme, Nom, Prenom, Email, Password, NbPlace) VALUES('".$post['fAcronyme']."', '".$post['fNom']."', '".$post['fPrenom']."', '".$post['fEmail']."', '".$password."', '".$post['fNbPlace']."')";
  $connexion->exec($requete);

	// Requête pour sélectionner la personne loguée
	$requete = "SELECT * FROM profs WHERE Email ='".$post['fEmail']."' AND Password ='".$password."';";
	$resultats = $connexion->query($requete);

	return $resultats;
}

function getVillePorf(){
	$connexion = getBd();
	//Récupère la ville de l'utilisateur connecté
	$currentUserVille = "SELECT VilleDepart FROM profs WHERE Nom ='".$_SESSION['CurrentUser']."';";
	$StartPoint = $connexion->query($currentUserVille);

	return $StartPoint;
}

function getProf($ville){
		$connexion = getBd();
		//Cherche les enseignants de la même ville
		$requete = "SELECT Acronyme, Nom, Prenom, VilleDepart FROM profs WHERE VilleDepart = '".$ville."' AND Nom <> '".$_SESSION['CurrentUser']."'";
		$resultats = $connexion->query($requete);
		
		return $resultats;
}

function getLogin($email, $password){
  $connexion = getBD();
  // Requête pour sélectionner la personne loguée
	$password = md5($password);
  $requete = "SELECT * FROM profs WHERE Email ='".$email."' AND Password ='".$password."';";
  $resultats = $connexion->query($requete);
  return $resultats;
}
