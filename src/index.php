<?php
	include_once('header.php');
	
	// Vérification de la connexion utilisateur, sinon retour sur la page de connexion / inscription
	if(!isset($_SESSION['utilisateur'])){
        	global $HTTP_HOST, $DOCROOT;
			header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/inscription-connexion.php');            
		}
?>
	
	<br />
	<div class="conteneur">
	<div class="header">
		<h1> Bienvenue sur Livr'O Disque</h1>
	</div>
	
	<div class="reglesRecherche">
		<p> Les règles suivantes s'appliquent : </p>
		<ul>
			<li> Les articles peuvent être recherchés par Titre et Auteur/Interprète de Livre/CD.</li>
			<li> Vous pouvez afficher l'intégralité du catalogue de Livres/Disques.</li>
			<li> Vous pouvez retirer des articles de votre panier avant la validation de la commande.</li>
			<li> Vous pouvez modifier la quantité pour chaque article avant la validation de la commande.</li>
			<li> Ajouter plusieurs fois le même article ne modifie pas la quantité.</li>
		</ul>
		
		<form method="post" action="resultatRecherche.php">
			<div class="panier">
				<div class="buttonLeft">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="motcle" id="chercherIndex">
                        <label class="mdl-textfield__label" for="chercherIndex">Chercher...</label>
                    </div>
				</div>
				
				<div class="buttonRight">
					<label for="filtre">Dans le groupe : </label>
					<SELECT id="filtre" name="categorie" size="1" style="width:200px">
						<option value="livreTitre">Livres par titre</option>
						<option value="livreAuteur">Livres par auteur</option>
						<option value="albumTitre">Albums par titre</option>
						<option value="albumAuteur">Albums par auteur</option>
						<option value="catalogueComplet">Catalogue complet</option>
					</SELECT>
				</div>				
			</div>
			<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect btnRechercheIndex" type="submit" name="rechercher"> 
				Rechercher
			</button>
		</form>
		</div>
	</div>
	<br />

<?php include_once("footer.php"); ?>