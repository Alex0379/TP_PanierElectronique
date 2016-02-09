<?php
	include_once('header.html');
	session_start();
	require('../php/fonctions.php');
				// Connexion à la base de données
				$idcom = connex($DB);
				
				// $motcle contient le texte à rechercher
				// $categorie contient le domaine de la recherche
				$requete1="SELECT * FROM boutique_musique";
?>
	
	<br />
	<div class="conteneur">
	<div class="header">
		<h1> Disc'O Thèque</h1>
	</div>
	
	<div class="reglesRecherche">
		<h4> La Disc'O Thèque vous propose : </h4>
		
		<form method="post" action="">
				<div class="panier">
					<div class="album">
						<?php
							// Définir le recherche comme négative si aucun article n'a pu être identifié.
							$succesRecherche="NO";
							
								$resultat = $idcom->query($requete1) or die("Erreur requête");
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
									<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
											Ajouter au panier
									</button>
									<input type="hidden" name="no_article_choisi" value="<?php echo $donnees["no_article"]; ?>">
									<input type="hidden" name="type_article_choisi" value="<?php echo $donnees["type_article"]; ?>">
								</div>
							</div>
							
							<?php
								} // Fin de la boucle while
							
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

<?php include_once("footer.php"); ?>