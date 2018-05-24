<?php

//index.php
//Date de création: 18.05.2018
//Auteur: CHZ
//____________________________
session_start();
require 'controleur/controleur.php';

try
{
	if(isset($_GET['action']))
	{
		//Page é afficher
		$page=$_GET['action'];

		switch($page)
		{
			case 'homepage':
				vueHomepage();
				break;
			case 'login':
				vueLogin();
				break;
			case 'horaire':
				vueHoraire();
				break;
			case 'inscription':
				vueInscription();
				break;
			default:
				throw new Exception("Page non valide");
		}
	}
	else
		vueHomepage();
}
catch (Exception $e)
{
	erreur($e->getMessage());
}
