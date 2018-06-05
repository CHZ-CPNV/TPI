<?php
//controleur.php
//Date de création: 18.05.2018
//Auteur: CHZ
//____________________________
require 'modele/modele.php';

function vueHomepage() {
	require 'view/homepage.php';
}

function vueLogin(){
		if(isset($_POST['LogUser'])) {
			$resultats = getLogin($_POST['LogUser'],$_POST['LogPassword']);
		}
		require 'view/login.php';
}

// Inscription sur le site
function vueInscription() {
	if (isset($_POST['fEmail']) AND $_POST['fPassword'] == $_POST['fConfirmedpassword']) {
		$resultats = inscriptionDone($_POST);
		//if($ligne['NbPlace'] < "7") { check nbplace car
  }
	require 'view/inscription.php';
}

function vueHoraire() {
	// Current user est l'utilisateur connecté
	$CurrentUserHD = 0; // Heures du début des cours
	$CurrentUserHF = 0; // Heures de fin brut des cours (sans la durée pris en compte)
	$CurrentUserHeureDepart = 0; // Heures de fin des cours

	// Other user est le reste des enseignants du CSV
	$OtherUserHD = 0; // Heures du début des cours
	$OtherUserHF = 0; // Heures de fin brut des cours (sans la durée pris en compte)
	$OtherUserHeureDepart = 0; // Heures de fin des cours

	$TodayDate = date("N"); // Retourne le jour de la semaine actuelle sous forme numérique
	$JourSemaine = array( // Tableau des jour de la semaine
		"1" => "lundi",
		"2" => "mardi",
		"3" => "mercredi",
		"4" => "jeudi",
		"5" => "vendredi",
		"6" => "samedi",
		"7" => "dimanche",
	);

	// Récupère la ville de départ de l'utilisateur connecté
	$LogUserVille = getVillePorf();
	$res = $LogUserVille->fetch();
	$ville = $res['VilleDepart'];

	ini_set('auto_detect_line_endings', TRUE);
	if (($file = fopen("C:\Users\Camille.HEINTZ\Documents\TPI\Prog\data\data.csv", "r")) !== FALSE) {
		fgetcsv($file);
		while (($dataCSV = fgetcsv($file, 0, ";")) !== FALSE) {
			$csv = $dataCSV;

			//Check les horaires par rapport au jour de l'utilisateur connecté
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == $JourSemaine[$TodayDate]) {
				if($CurrentUserHD == 0){
					$CurrentUserHD = $csv[6];
				} else {
					$CurrentUserHF = $csv[6];
					$Duree = $csv[1];
					$CurrentUserHeureDepart = $CurrentUserHF + $Duree;
				}
			}

			//Check les horaires des autre enseignants
			if($csv[5] == $JourSemaine[$TodayDate]){
				$UserFound = $csv[3];
				if($OtherUserHD == 0){
					$OtherUserHD = $csv[6];
				} else {
					$OtherUserHF = $csv[6];
					$Duree = $csv[1];
					$OtherUserHeureDepart = $OtherUserHF + $Duree;
				}
				echo "</br>";
			}
			// Récupère les profs venant de la même ville que celui connecté
			$OtherUserVille = getProf($ville);
			foreach ($OtherUserVille as $value) {
				$OtherUserVille = $value;
				if($csv[6] == $CurrentUserHD && $csv[5] == $JourSemaine[$TodayDate] && $csv[3] != $_SESSION['CurrentUser']) {
					echo $OtherUserVille['Nom'];
					if($OtherUserVille['Nom'] == $csv[3]){
						$ArrayUser = array(
							"Acronyme" => $OtherUserVille['Acronyme'], // Les acronymes des utilisateurs potentiel pour un covoiturage
							"UserN" => $OtherUserVille['Prenom'], // Les noms des utilisateurs potentiel pour un covoiturage
							"UserN" => $OtherUserVille['Nom'], // Les noms des utilisateurs potentiel pour un covoiturage
							"UserHD" => $OtherUserHD, // Les horaires des utilisateurs potentiel pour un covoiturage
							"UserHF" => $OtherUserHeureDepart, // Les horaires de fin de journée des utilisateurs potentiel pour un covoiturage
						);
					}
				}
			}
		}
	}
	fclose($file);
	require 'view/horaire.php';
}

function sendMail(){
	//Get email du currentuser et des users qui on la meme heures
	$subject = "Sujet du mail";
	$message = "Message du mail";
}

// Affichage des erreurs
function erreur($msgErreur) {
  require 'view/erreur.php';
}
