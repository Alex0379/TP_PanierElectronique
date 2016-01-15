<?php
	include_once('header.html');
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
		
		<form method="post" action="">
			<div class="panier">
				<div class="buttonLeft">
					<label>Chercher :</label> 
					<input type="text" name="chercher" id="chercherIndex" placeholder="" size="30" maxlength="10" />
				</div>
				
				<div class="buttonRight">
					<label>Dans le groupe : </label>
					<SELECT name="categorie" size="1" style="width:200px"></SELECT>
				</div>				
			</div>
			<input class="btnRechercheIndex" value=" Lancer la recherche " onclick="" type="submit">
		</form>
		</div>
	</div>
	<br />

<?php include_once("footer.html"); ?>