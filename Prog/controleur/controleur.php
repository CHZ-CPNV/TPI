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
	$CurrentUserHD = 0;
	$UserFound;
	$TodayDate = date("N");
	$JourSemaine = array(
		"1" => "lundi",
		"2" => "mardi",
		"3" => "mercredi",
		"4" => "jeudi",
		"5" => "vendredi",
		"6" => "samedi",
		"7" => "dimanche",
	);
	ini_set('auto_detect_line_endings', TRUE);
	if (($file = fopen("C:\Users\Camille.HEINTZ\Documents\TPI\Prog\data\data.csv", "r")) !== FALSE) {
		fgetcsv($file);
		while (($dataCSV = fgetcsv($file, 0, ";")) !== FALSE) {
			$csv = $dataCSV;
			//var_dump($csv);

			//Check les horaires par rapport au jour de l'utilisateur connecté
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "lundi") {
				if($CurrentUserHD == 0){

				}
			}
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "mardi") {
				if(empty($CurrentUserHD)){
					$CurrentUserHD = $csv[6];
				} else {
					$CurrentUserHF = $csv[6];
				}
				var_dump($CurrentUserHF);
				var_dump($CurrentUserHD);
			}
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "mercredi") {
				$CurrentUserH = $csv[6];
			}
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == $JourSemaine[$TodayDate]) {
				$CurrentUserH = $csv[6];
			}
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "vendredi") {
				$CurrentUserH = $csv[6];
			}

			if($csv[6] == $CurrentUserHD && $csv[5] == "mardi" && $csv[3] != $_SESSION['CurrentUser']) {
				if($UserFound == $csv[3]){} else {
					$UserFound = $csv[3]; // Les noms des utilisateurs potentiel pour un covoiturage
					$UserHoraire = $csv[6]; // Les horaires des utilisateurs potentiel pour un covoiturage
					$UserHoraireFin = $csv[1] + $csv[6]; // Les horaires de fin de journée des utilisateurs potentiel pour un covoiturage
					$ArrayUser = array(
						"User" => $UserFound,
						"UserH" => $UserHoraire,
						"UserHF" => $UserHoraireFin,
					);
					var_dump($ArrayUser);

					//echo "All teacher with same hours " . $UserFound ." ". $UserHoraire ." ". $UserHoraireFin ."</br>";
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
