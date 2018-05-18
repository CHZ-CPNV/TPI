<?php

//index.php
//Date de création: 18.05.2018
//Auteur: CHZ
//____________________________

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
			case 'horaire':
				vueHoraire();
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
