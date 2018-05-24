<?php
//controleur.php
//Date de création: 18.05.2018
//Auteur: CHZ
//____________________________
require 'modele/modele.php';

function vueHomepage(){
	require 'view/homepage.php';
}

function vueLogin(){
		if(isset($_POST['LogUser'])){
			$resultats = getLogin($_POST['LogUser'],$_POST['LogPassword']);
		}
		require 'view/login.php';
}

// Inscription sur le site
function vueInscription(){
  if (isset($_POST['fEmail']) AND $_POST['fPassword'] == $_POST['fConfirmedpassword'])
	{
		   $resultats = inscriptionDone($_POST);
			 //if($ligne['NbPlace'] < "7") {
  }
	require 'view/inscription.php';
}

function vueHoraire(){
	require 'view/horaire.php';
}
// Affichage des erreurs
function erreur($msgErreur){
  require 'view/erreur.php';
}
