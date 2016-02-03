<?php include_once('header_admin.html'); ?>

        <div class="conteneur">
            <div class="header">
				<h1>Liste des utilisateurs</h1>
			</div>
            <div class="panier">
                <table class=" articlesPanier mdl-data-table mdl-js-data-table mdl-shadow--2dp">
                    <thead>
                        <tr>
                            <th class="mdl-data-table__cell--non-numeric">Nom de l'utilisateur</th>
                            <th>Ville</th>
                            <th class="mdl-data-table__text-center">Lien vers les transactions</th>
                            <th class="mdl-data-table__text-center">Supprimer</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Acrylic (Transparent)</td>
                            <td>$2.90</td>
                            <td class="mdl-data-table__text-center">
                                <a class="transaction_user" href="./transaction_user.php">Dupont</a>
                            </td>
                            <td class="mdl-data-table__text-center">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">delete</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Plywood (Birch)</td>
                            <td>$1.25</td>
                            <td class="mdl-data-table__text-center">
                                <a class="transaction_user" href="./transaction_user.php">Georges</a>
                            </td>
                            <td class="mdl-data-table__text-center">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">delete</i>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="mdl-data-table__cell--non-numeric">Laminate (Gold on Blue)</td>
                            <td>$2.35</td>
                            <td class="mdl-data-table__text-center">
                                <a class="transaction_user" href="./transaction_user.php">Jackie</a>
                            </td>
                            <td class="mdl-data-table__text-center">
                                <button class="mdl-button mdl-js-button mdl-button--icon">
                                    <i class="material-icons">delete</i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

<?php include_once('footer_admin.html'); ?>