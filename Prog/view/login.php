<?php
//inscription.php
//Date de création: 22.05.2018
//Auteur: CHZ
//____________________________
$titre = 'Ride W/Me - Login';
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
              if(isset($ligne['Email'])){
                $_SESSION['User'] = $ligne['Nom']." ".$ligne['Prenom'];
								$_SESSION['CurrentUser'] = $ligne['Nom'];
                echo '<br/><div class="alert alert-info">Bonjour '.$_SESSION['User'].'. Vous êtes bien connecté.<a href="index.php?action=homepage">Retour sur la homepage</a></div>';
              } else {
                echo '<br/><div class="alert alert-danger">Les informations indiquées semble erronées.</div>';
                ?><div class="contact_title text-center">Connecte-toi et profite de voyager avec d'autres utilisateurs.</div>
                <form action="index.php?action=login" id="contact_form" class="contact_form text-center" method="post">
                  <input type="mail" class="contact_form_name input_field" placeholder="Email" required="required" name="LogUser" data-error="Erreur">
                  <input type="password" class="contact_form_name input_field" placeholder="Mot de passe" required="required" name="LogPassword" data-error="Erreur">
                  <button type="submit" id="form_submit_button" class="login_button form_submit_button button trans_200">Envoyer la requête <img id="pigeonSize" src="images/pigeonInscription.png" alt=""></button>
                </form><?php
              }
  					} else {
  							if (isset($_SESSION['User'])) {
  								session_destroy();
  								header ("location:index.php");
  					    }
          ?>
					<div class="contact_title text-center">Connecte-toi et profite de voyager avec d'autres utilisateurs.</div>
					<form action="index.php?action=login" id="contact_form" class="contact_form text-center" method="post">
						<input type="mail" class="contact_form_name input_field" placeholder="Email" required="required" name="LogUser" data-error="Erreur">
						<input type="password" class="contact_form_name input_field" placeholder="Mot de passe" required="required" name="LogPassword" data-error="Erreur">
						<button type="submit" id="form_submit_button" class="login_button form_submit_button button trans_200">Envoyer la requête <img id="pigeonSize" src="images/pigeonInscription.png" alt=""></button>
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
