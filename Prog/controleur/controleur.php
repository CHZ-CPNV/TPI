<?php
//controleur.php
//Date de création: 18.05.2018
//Auteur: CHZ
//____________________________

require 'modele/modele.php';

// function vueConnexion(){
// 	if(isset($_POST['flogin'])){
// 		$resultats = getLogin($_POST);
// 	}
// 	require 'view/Connexion.php';
// }

function vueHomepage(){
	require 'view/gabarit.php';
}

function sendRegistering($post)
{
  // Connexion à la BD
  $connexion = getBD();
  // Hashage du mot de passe
  $password = $post['fpassword'];
  $password = md5($password);
  // Définition de la requete
  $requete="INSERT INTO users VALUES (DEFAULT, '".$post['fusername']."', '".$password."', '".$post['fmail']."', DEFAULT, DEFAULT)";
  $resultats = $connexion->exec($requete);
}
