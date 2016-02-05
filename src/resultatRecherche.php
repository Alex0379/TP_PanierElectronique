<?php
	include_once('header.html');
	session_start();
	require('../php/fonctions.php');
				// Récupération des saisies
				$motcle= $_POST['motcle'];
				$categorie= $_POST['categorie'];
				// Connexion à la base de données
				$idcom = connex($DB);
				
				// $motcle contient le texte à rechercher
				// $categorie contient le domaine de la recherche
				$requete1="";
				$requete2="";
				$requete3="";
				
				switch ($categorie) {
					case "livreTitre":
						$requete1 = "SELECT * FROM boutique_livre WHERE titre LIKE '%$motcle%'";
						break;
						
					case "livreAuteur":
						$requete1 = "SELECT * FROM boutique_livre WHERE auteur LIKE '%$motcle%'";
						break;
						
					case "albumTitre":
						$requete1 = "SELECT * FROM boutique_livre WHERE titre LIKE '%$motcle%'";
						break;
						
					case "albumAuteur":
						$requete1 = "SELECT * FROM boutique_livre WHERE auteur LIKE '%$motcle%'";
						break;
						
					case "catalogueComplet":
						$requete2 = "SELECT * FROM boutique_musique WHERE titre LIKE '%$motcle%'
							OR artiste LIKE '%$motcle%'";
						$requete3 = "SELECT * FROM boutique_livre WHERE titre LIKE '%$motcle%'
							OR auteur LIKE '%$motcle%'";
				}
?>
	
	<br />
	<div class="conteneur">
	<div class="header">
		<h1> Résultat de recherche</h1>
	</div>
	
	<div class="reglesRecherche">
		
			<form method="post" action="">
				<div class="panier">
					<div class="album">
						<?php
							// Définir le recherche comme négative si aucun article n'a pu être identifié.
							$succesRecherche="NO";
							
							// Exécuter la recherche non NULL.
							for($i=1; $i<=3; $i++) {
								$requete="requete"."$i";
								if($$requete == "") {
									continue;	// Sauter les requêtes NULL
								}
								$resultat = $idcom->query($$requete) or die("Erreur requête");
								while($donnees = $resultat->fetch())
								{
									$succesRecherche="YES";								
						?>
							<div class="articleBiblio">
								<div class="imageBiblio">
									<img src="../images/guerreetpaix.jpg">
								</div>
								<div class="descriptionArticle">
									<p><?php echo $donnees["titre"] ." - ";
												if ($donnees["type_article"] == "Livre"){
													echo $donnees["auteur"];
												}
												else{
													echo $donnees["artiste"];
												}?> </p> <p> <?php echo $donnees["type_article"] ?> </p> <p> <?php echo $donnees["prix"] ."€" ?></p>
								</div>
								<div class="boutonArticle">
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
											Ajouter au panier
									</button>
									<input type="hidden" name="no_article_choisi" value="<?php echo $donnees["no_article"]; ?>">
									<input type="hidden" name="type_article_choisi" value="<?php echo $donnees["type_article"]; ?>">
								</div>
							</div>
							
							<?php
								} // Fin de la boucle while
							} // Fin de la boucle for
							
							if($succesRecherche=="NO")
							{
								echo "<h4> Aucun article identifié.</h4>";
							}
							?>
					</div>		
				</div>
			</form>
		</div>
	</div>
	<br />

<<<<<<< HEAD
<?php include_once("../src/footer.php"); ?>
=======
<?php include_once("footer.php"); ?>
>>>>>>> origin/master
