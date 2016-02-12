<?php 
	include_once('header.php'); 

	// Vérification de la connexion utilisateur, sinon retour sur la page de connexion / inscription
		if(!isset($_SESSION['utilisateur'])){
				global $HTTP_HOST, $DOCROOT;
				header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/inscription-connexion.php');            
			}
?>

<!-- Corps -->
        <div class="conteneur">
            <div class="header">
				<h1>Votre panier</h1>
			</div>
            <div class="panier">
                <table class=" articlesPanier mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th>N° article</th>
                            <th class="mdl-data-table__cell--non-numeric">Titre</th>
                            <th>Auteur/Artiste</th>
                            <th>Type d'article</th>
                            <th class="mdl-data-table__cell--non-numeric"><i class="material-icons iconePanier">comment</i>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
						<?php
							for($i=0; $i<$_SESSION["nbr_articles"];$i++)
							{
								
						?>
							<tr>
								<td><?php echo $_SESSION["no_article"][$i]; ?></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $_SESSION["titre"][$i]; ?></td>
								<td><?php echo $_SESSION["auteur_artiste"][$i]; ?></td>
								<td><?php echo $_SESSION["type_article"][$i]; ?></td>
								<td>
								<input type="hidden" name="no_ligne" value="<?php echo $i; ?>">
									<div class="quantitePanier mdl-textfield mdl-js-textfield">
										<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" value="<?php echo $_SESSION['quantite'][$i]; ?>">
										<label class="mdl-textfield__label" for="quantite1">Quantité...</label>
										<span class="mdl-textfield__error">Ceci n'est pas un nombre !</span>
									</div>
								</td>
								<td><?php echo $_SESSION["prix"][$i]; ?></td>
							</tr>
						<?php
							} // Fermeture du FOR
								
						?>
                    </tbody>
                </table>
            </div>
			<form method="post" action="">
				<div class="panier">
					<button class="buttonRight mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="bouton" type="submit" value="validCommande">
						Valider ma commande
					</button>

					<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" name="bouton" type="submit" value="modifQuantite">
						Modifier la quantité
					</button>
				</div>
			</form>
        </div>
		
		<?php
			global $HTTP_HOST, $DOCROOT;
			if(isset($_POST['bouton']))
			{
				switch($_POST['bouton'])
				{
					case "modifQuantite":
						$_SESSION['quantite'][$_POST['no_ligne']] = $_POST['quantite'];
						header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/panier.php');
						break;
						
					case "validCommande" :
						header('location: //'.$HTTP_HOST.'/'.$DOCROOT.'/facture.php');
						break;
						
					default :
					break;
				}
			}
		?>

<?php include_once("footer.php"); ?>