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
				<h1>Commande enregistrée</h1>
			</div>
            <div class="panier">
                <div class="renseignementCommande">
                    <div class="numCommande"><h5>N° Commande :</h5><p>86624562</p></div>
                    <div class="dateCommande"><h5>Date :</h5><p>20/01/2016</p></div>
                </div>
                <div class="detailsCommande">
                    <h5>Détails commande :</h5>
                    <table class=" articlesPanier mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                        <thead>
                            <tr>
                                <th class="mdl-data-table__cell--non-numeric">N° article</th>
                                <th class="mdl-data-table__cell--non-numeric">Titre</th>
                                <th class="mdl-data-table__cell--non-numeric">Auteur/Artiste</th>
                                <th class="mdl-data-table__cell--non-numeric">Type d'article</th>
                                <th>Quantité</th>
                                <th>Prix</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">25</td>
                                <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                                <td class="mdl-data-table__cell--non-numeric">25</td>
                                <td class="mdl-data-table__cell--non-numeric">$2.90</td>
                                <td>1</td>
                                <td>$2.90</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">25</td>
                                <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                                <td class="mdl-data-table__cell--non-numeric">50</td>
                                <td class="mdl-data-table__cell--non-numeric">$1.25</td>
                                <td>1</td>
                                <td>$2.90</td>
                            </tr>
                            <tr>
                                <td class="mdl-data-table__cell--non-numeric">25</td>
                                <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                                <td class="mdl-data-table__cell--non-numeric">10</td>
                                <td class="mdl-data-table__cell--non-numeric">$2.35</td>
                                <td>1</td>
                                <td>$2.90</td>
                            </tr>
                            <tr>
                                <td colspan="6">Total de votre commande : 13,03€</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="adresses">
                    <div class="adresseFacturation">
                        <h5>Adresse de facturation :</h5>
                        <p><strong>Nom :</strong> Georges<br>
                        <strong>Adresse :</strong> 11, Rue du Poteau vert <br>
                                  79068 TAMBOUCTOU<br>
                                  France<br>
                        <strong>Règlement par :</strong> Chèque</p>
                    </div>
                    <div class="adresseLivraison">
                        <h5>Adresse de livraison :</h5>
                        <p><strong>Nom :</strong> Georges<br>
                        <strong>Adresse :</strong> 11, Rue du Poteau vert <br>
                                  79068 TAMBOUCTOU<br>
                                  France</p>
                    </div>
                    <p style="text-align: center">Merci de votre confiance !</p>
                </div>
            </div>
        </div>

<?php include_once("footer.php"); ?>