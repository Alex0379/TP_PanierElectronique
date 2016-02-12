<?php ob_start(); ?>
<?php include('header.php');

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
                        <form method="post" action="">
						<?php
							for($i=0; $i<$_SESSION["nbr_articles"];$i++)
							{
								if($_SESSION['quantite'][$i]>0){
						?>
							<tr>
								<td><?php echo $_SESSION["no_article"][$i]; ?></td>
								<td class="mdl-data-table__cell--non-numeric"><?php echo $_SESSION["titre"][$i]; ?></td>
								<td><?php echo $_SESSION["auteur_artiste"][$i]; ?></td>
								<td><?php echo $_SESSION["type_article"][$i]; ?></td>
								<td>
                                    <div class="quantitePanier mdl-textfield mdl-js-textfield">
                                        <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="quantite<?php echo $i; ?>" value="<?php echo $_SESSION['quantite'][$i]; ?>">
                                        <label class="mdl-textfield__label" for="quantite<?php echo $i; ?>">Quantité...</label>
                                        <span class="mdl-textfield__error">Ceci n'est pas un nombre !</span>
                                    </div>
								</td>
								<td><?php 
										$prixUnitaire = $_SESSION["prix"][$i]; 
										$quantiteArticle = $_SESSION["quantite"][$i];
										$prixTotal = $prixUnitaire*$quantiteArticle;
										echo $prixTotal. "€";
									?>
								</td>
							</tr>
						<?php
                                } // Fermeture du if
                            } // Fermeture du FOR
								
						?>
                    </tbody>
                </table>
            </div>
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
			if(isset($_POST["bouton"]))
			{
				switch($_POST["bouton"])
				{
					case "modifQuantite":
                    for($i=0; $i<$_SESSION["nbr_articles"];$i++){
                        $quantite = 'quantite' . $i;
						$_SESSION["quantite"][$i] = $_POST[$quantite];
						header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/panier.php');
                        }
						break;
						
					case "validCommande" :
						header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/facture.php');
						break;
						
					default :
					break;
				}
			}
?>
        
<?php include("footer.php"); ?>
<?php ob_end_flush(); ?>