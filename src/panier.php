<?php include_once('header.html'); ?>

<!-- Corps -->
        <div class="conteneur">
            <div class="header">
				<h1>Votre panier</h1>
			</div>
            <div class="panier">
                <table class=" articlesPanier mdl-data-table--selectable mdl-data-table mdl-js-data-table mdl-shadow--2dp">
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
                        <tr>
                            <td>25</td>
                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                            <td>25</td>
                            <td>$2.90</td>
                            <td>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="quantite1">
                                    <label class="mdl-textfield__label" for="quantite1">Quantité...</label>
                                    <span class="mdl-textfield__error">Ceci n'est pas un nombre !</span>
                                </div>
                            </td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                            <td>50</td>
                            <td>$1.25</td>
                            <td>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="quantite1">
                                    <label class="mdl-textfield__label" for="quantite1">Quantité...</label>
                                    <span class="mdl-textfield__error">Ceci n'est pas un nombre !</span>
                                </div>
                            </td>
                            <td>$2.90</td>
                        </tr>
                        <tr>
                            <td>25</td>
                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                            <td>10</td>
                            <td>$2.35</td>
                            <td>
                                <div class="mdl-textfield mdl-js-textfield">
                                    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="quantite1">
                                    <label class="mdl-textfield__label" for="quantite1">Quantité...</label>
                                    <span class="mdl-textfield__error">Ceci n'est pas un nombre !</span>
                                </div>
                            </td>
                            <td>$2.90</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="panier">
                <button class="buttonRight mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Valider ma commande
                </button>

                <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
                    Modifier la quantité
                </button>
            </div>
        </div>

<?php include_once("footer.php"); ?>