<?php include_once('header.html'); ?>

<!-- Corps -->
        <div class="conteneur">
            <div class="header">
				<h1>Commande enregistrée</h1>
			</div>
            <div class="panier">
                <table class=" articlesPanier mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th>N° article</th>
                            <th class="mdl-data-table__cell--non-numeric">Titre</th>
                            <th>Auteur/Artiste</th>
                            <th>Type d'article</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>25</td>
                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                            <td>25</td>
                            <td>$2.90</td>
                            <td>1</td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                            <td>50</td>
                            <td>$1.25</td>
                            <td>1</td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                            <td>10</td>
                            <td>$2.35</td>
                            <td>1</td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td colspan="6">Total de votre commande : 13,03€</td>
                        </tr>
                    </tbody>
                </table>
                
                <table class="coordonneesFacture mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th></th>
                            <th class="mdl-data-table__cell--non-numeric">Conditions de livraison</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="ligneCenter mdl-data-table__cell--non-numeric">Nom :</td>
                            <th class="mdl-data-table__cell--non-numeric">Georges</td>
                        </tr>
                        <tr>
                            <th class="ligneCenter mdl-data-table__cell--non-numeric">Adresse :</td>
                            <th class="mdl-data-table__cell--non-numeric">11, Rue du poteau vert<br>76098 TAMBOUCTOU<br>France</td>
                        </tr>
                        <tr>
                            <th class="ligneCenter mdl-data-table__cell--non-numeric">Règlement par :</td>
                            <th class="mdl-data-table__cell--non-numeric">Chèque</td>
                        </tr>
                    </tbody>
                </table>
                
                <p style="text-align: center">Merci de votre confiance !</p>
                
            </div>
        </div>

<?php include_once("footer.html"); ?>