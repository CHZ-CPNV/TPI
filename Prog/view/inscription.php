<?php
//inscription.php
//Date de création: 22.05.2018
//Auteur: CHZ
//____________________________
$titre = 'Ride W/Me - Inscription';
ob_start();
?>
<div class="contact_form_section">
	<div>
		<div class="row">
			<div class="col">
				<div class="contact_form_container">
					<?php
  					if (isset($resultats)) {
      				$ligne=$resultats->fetch();
							if(isset($ligne['Nom'])) {
              	$_SESSION['User'] = $ligne['Nom']." ".$ligne['Prenom'];
              	echo '<br/><div class="alert alert-info">Bonjour '.$_SESSION['User'].'. Vous vous êtes bien inscris sur notre site.<a href="index.php?action=homepage">Retour sur la homepage</a></div>';
							}
  					} else {
          ?>
					<div class="contact_title text-center">Inscris toi, c'est gratuit :)</div>
					<form action="index.php?action=inscription" id="contact_form" class="contact_form text-center" method="post">
						<input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis.">
						<input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis.">
						<input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis.">
						<input type="password" class="contact_form_name input_field" placeholder="Mot de passe" required="required" name="fPassword" data-error="Un mot de passe est requis.">
						<input type="password" class="contact_form_prenom input_field" placeholder="Confirmer mot de passe" required="required" name="fConfirmedpassword" data-error="Veuillez confirmer votre mot de passe.">
						<input type="text" class="contact_form_name input_field" placeholder="Username (Acronyme de préference)" required="required" name="fUsername" data-error="Comme pour les autre champs, lui aussi est obligatoire.">
						<input type="number" class="contact_form_prenom input_field" placeholder="Nombre de sièges (4, 5, 7)" required="required" name="fNbPlace" data-error="Prénom est requis.">
						<button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Envoyer la requête <img id="pigeonSize" src="images/pigeonInscription.png" alt=""></button>
					</form>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php
	$contenu = ob_get_clean();
	require 'gabarit.php';
?>
