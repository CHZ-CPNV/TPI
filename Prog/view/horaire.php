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
            <table class="table_horaire">
							<?php for($i = 0; $i < 10; $i++) {?>
								<tr>
									<td><?php echo $sameuser;?></td>
								</tr>
							<?php }?>
              <tr>
                <td>Heures</td>
                <td colspan=3>Lundi</td>
                <td colspan=3>Mardi</td>
								<td colspan=3>Mercedi</td>
								<td colspan=3>Jeudi</td>
								<td colspan=3>Vendredi</td>
              </tr>
							<tr>
								<td rowspan="2">8:00</td>
								<td></td>
								<td>CHZ</td>
								<td></td>
								<td></td>
								<td>PBA</td>
								<td></td>
								<td></td>
								<td>TEST</td>
								<td></td>
								<td></td>
								<td>CEG</td>
								<td></td>
								<td></td>
								<td>JTE</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>CHZ</td>
								<td></td>
								<td></td>
								<td>PBA</td>
								<td></td>
								<td></td>
								<td>TEST</td>
								<td></td>
								<td></td>
								<td>CEG</td>
								<td></td>
								<td></td>
								<td>JTE</td>
								<td></td>
							</tr>


              <!-- <tr>
                <td>8:45</td>
              </tr>
              <tr>
                <td>9:35</td>
              </tr>
              <tr>
                <td>10:35</td>
              </tr>
              <tr>
                <td>11:25</td>
              </tr>
              <tr>
                <td>12:15</td>
              </tr>
              <tr>
                <td>13:30</td>
              </tr>
              <tr>
                <td>14:15</td>
              </tr>
              <tr>
                <td>15:20</td>
              </tr>
              <tr>
                <td>16:05</td>
              </tr>
              <tr>
                <td>16:55</td>
              </tr> -->
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
