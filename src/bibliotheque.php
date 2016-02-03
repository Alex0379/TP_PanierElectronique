<?php
	include_once('header.html');
?>
	
	<br />
	<div class="conteneur">
	<div class="header">
		<h1> Bibli'O Thèque</h1>
	</div>
	
	<div class="reglesRecherche">
		<h4> La Bibli'O Thèque vous propose : </h4>
		
		<form method="post" action="">
			<div class="panier">
				<div class="album">
						<div class="articleBiblio">
							<div class="imageBiblio">
								<img src="../images/guerreetpaix.jpg">
							</div>
							<div class="descriptionArticle">
								<p>Guerre et paix - L. Tolstoï </p> <p> Livre </p> <p> 17.90€</p>
							</div>
							<div class="boutonArticle">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
										Ajouter au panier
								</button>
							</div>
						</div>
						
						<div class="articleBiblio">
							<div class="imageBiblio">
								<img src="../images/fleursdumal.jpg">
							</div>
							<div class="descriptionArticle">
								<p>Les Fleurs du mal - Ch. Baudelaire </p> <p> Livre </p> <p> 8.50€</p>
							</div>
							<div class="boutonArticle">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
										Ajouter au panier
								</button>
							</div>
						</div>
						
						<div class="articleBiblio">
							<div class="imageBiblio">
								<img src="../images/tpexcel.jpg">
							</div>
							<div class="descriptionArticle">
								<p>Travaux pratiques Excel 2016 - F. Lemainque </p> <p> Livre </p> <p> 22.50€ </p>
							</div>
							<div class="boutonArticle">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
										Ajouter au panier
								</button>
							</div>
						</div>	
				</div>
								
			</div>
			
		</form>
		</div>
	</div>
	<br />

<?php include_once("footer.html"); ?>