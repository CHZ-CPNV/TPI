<?php
//erreur.php
//Date de création: 23.05.2018
//Auteur: CHZ
//____________________________
$titre = 'Ride W/Me - Erreur';
ob_start();?>
<div class="errorBox"><h1>Une erreur est survenue :</h1><p><?= $msgErreur?></p></div>
<?php $contenu = ob_get_clean();

require 'gabarit.php';
 ?>
