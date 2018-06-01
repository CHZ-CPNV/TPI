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
	$CurrentUserHD = 0;
	$CurrentUserHF = 0;
	$CurrentUserHeureDepart = 0;

	// Other user est le reste des enseignants de la BD
	$OtherUserHD = 0;
	$OtherUserHF = 0;
	$OtherUserHeureDepart = 0;

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
			if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == $JourSemaine[$TodayDate]) {
				if($CurrentUserHD == 0){
					$CurrentUserHD = $csv[6];
				} else {
					$CurrentUserHF = $csv[6];
					$Duree = $csv[1];
					$CurrentUserHeureDepart = $CurrentUserHF + $Duree;
				}
				//echo $_SESSION['CurrentUser'];
				//var_dump($CurrentUserHD. "HD");
				//var_dump($CurrentUserHF. "HF");
				//var_dump($CurrentUserHeureDepart."h00</br>");
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
				var_dump($UserFound);
				//var_dump($OtherUserHD. " HD");
				//var_dump($OtherUserHF. " HF");
				//var_dump($OtherUserHeureDepart."h00");
				echo "</br>";
			}
			// if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "mardi") {
			// 	if(empty($CurrentUserHD)){ // essayer "if($CurrentUserHD == 0){} conseil de armand"
			// 		$CurrentUserHD = $csv[6];
			// 	} else {
			// 		$CurrentUserHF = $csv[6];
			// 	}
			// 	//var_dump($CurrentUserHF);
			// 	//var_dump($CurrentUserHD);
			// }
			// if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "mercredi") {
			// 	$CurrentUserH = $csv[6];
			// }
			// if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == $JourSemaine[$TodayDate]) {
			// 	$CurrentUserH = $csv[6];
			// }
			// if($csv[3] == $_SESSION['CurrentUser'] && $csv[5] == "vendredi") {
			// 	$CurrentUserH = $csv[6];
			// }

			if($csv[6] == $CurrentUserHD && $csv[5] == $JourSemaine[$TodayDate] && $csv[3] != $_SESSION['CurrentUser']) {
				if($UserFound == $csv[3]){
					//$UserFound = $csv[3];
					//$UserHoraire = $csv[6];
					//$UserHoraireFin = $csv[1] + $csv[6];
					$ArrayUser = array(
						"User" => $UserFound, // Les noms des utilisateurs potentiel pour un covoiturage
						"UserHD" => $OtherUserHD, // Les horaires des utilisateurs potentiel pour un covoiturage
						"UserHF" => $OtherUserHeureDepart, // Les horaires de fin de journée des utilisateurs potentiel pour un covoiturage
					);
					var_dump($ArrayUser);
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
