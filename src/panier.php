<?php include_once('header.html'); ?>

<!-- Corps -->
        <div class="conteneur">
            <div class="header">
				<h1>Votre panier</h1>
			</div>
            <div class="panier">
                <table class=" articlesPanier mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Titre</th>
                            <th>Auteur/Artiste</th>
                            <th>Type d'article</th>
                            <th>Quantité</th>
                            <th>Prix</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                            <td>25</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                            <td>50</td>
                            <td>$1.25</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                            <td>10</td>
                            <td>$2.35</td>
                            <td>$2.90</td>
                            <td>$2.90</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panier">
                <button class="buttonRight mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Continuer mes achats
                </button>

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Poursuivre ma commande
                </button>
            </div>
        </div>

<?php include_once("footer.html"); ?>