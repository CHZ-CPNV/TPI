<?php
//horaire.php
//Date de création: 24.05.2018
//Auteur: CHZ
//____________________________
$titre = 'Ride W/Me - Horaire';
ob_start();
?>
<div class="contact_form_section">
	<div>
		<div class="row">
			<div class="col">
				<div class="contact_form_container">
					<div class="contact_title text-center">Voici les horaires disponible pour les courses</div>
					<form action="index.php?action=horaire" id="contact_form" class="contact_form text-center" method="post">
            <table>
              <tr>
                <td>8:00value="<?=$ligne['NumAbris'];?>"</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="text" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>8:45</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="text" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>9:35</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>10:35</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>11:25</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>12:15</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>13:30</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>14:15</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>15:20</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>16:05</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td>16:55</td>
                <td><input type="text" class="contact_form_name input_field" placeholder="Nom" required="required" name="fNom" data-error="Name est requis."></td>
                <td><input type="text" class="contact_form_prenom input_field" placeholder="Prénom" required="required" name="fPrenom" data-error="Prénom est requis."></td>
                <td><input type="mail" class="contact_form_email input_field" placeholder="Email" required="required" name="fEmail" data-error="Email est plus que requis."></td>
              </tr>
              <tr>
                <td><button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Envoyer la requête <img id="pigeonSize" src="images/pigeonInscription.png" alt=""></button></td>
              </tr>
            </table>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$contenu = ob_get_clean();
	require 'gabarit.php';
?>
