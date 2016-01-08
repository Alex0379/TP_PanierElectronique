<?php
	include_once('header.html');
?>

	<div class="conteneur">
		<p> Les règles suivantes s'appliquent : </p>
		<ul>
			<li> Les articles peuvent être recherchés par Titre et Auteur/Interprète de Livre/CD.</li>
			<li> Vous pouvez afficher l'intégralité du catalogue de Livres/Disques.</li>
			<li> Vous pouvez retirer des articles de votre panier avant la validation de la commande.</li>
			<li> Vous pouvez modifier la quantité pour chaque article avant la validation de la commande.</li>
			<li> Ajouter plusieurs fois le même article ne modifie pas la quantité.</li>
		</ul>
		
		<form method="post" action="">
				<label>Chercher :</label> 
				<input type="text" name="chercher" id="chercherIndex" placeholder="" size="30" maxlength="10" />
				<br />
				<br />
				<label>Dans le groupe : </label>
				<SELECT name="categorie" size="1" style="width:200px"></SELECT>
				<br />
				<br />				
				<input class="btnRechercheIndex" value=" Lancer la recherche " onclick="" type="submit">
		</form>
		
	</div>


<?php include_once("footer.html"); ?>