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
			 //if($ligne['NbPlace'] < "7") { check nbplace car
  }
	require 'view/inscription.php';
}

function vueHoraire(){
	$row=0;
	ini_set('auto_detect_line_endings', TRUE);
	if (($file = fopen("C:\Users\Camille.HEINTZ\Documents\TPI\Prog\data\data.csv", "r")) !== FALSE) {
		fgetcsv($file);
		while (($dataCSV = fgetcsv($file, 0, ";")) !== FALSE) {
			$csv[] = $dataCSV;
			$num = count($csv);
			echo "data" . $num;
			for ($i = 0; $i <= $num; $i++){
				for($j = 0; $j <= 8; $j++){
					echo $csv[1][$j];
				}
			}
		}
		//echo implode($csv);
		//var_dump($csv);
		// if($csv[0][4] == "Altieri"){
		// 	echo "bonjour";
		// }
		fclose($file);
	}
	require 'view/horaire.php';
}

// Affichage des erreurs
function erreur($msgErreur){
  require 'view/erreur.php';
}
