<?php
	include_once('header.html');
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
						<div class="articleDisco">
							<div class="imageDisco">
								<img src="../images/beatles-revolver.jpg">
							</div>
							<div class="descriptionArticle">
								<p>Revolver - Les Beatles </p> <p> CD </p> <p> 20.90€</p>
							</div>
							<div class="boutonArticle">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
										Ajouter au panier
								</button>
							</div>
						</div>
						
						<div class="articleDisco">
							<div class="imageDisco">
								<img src="../images/louisamstrong.jpg">
							</div>
							<div class="descriptionArticle">
								<p>Best of Louis Amstrong - L. Amstrong </p> <p> CD </p> <p> 10.10€</p>
							</div>
							<div class="boutonArticle">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
										Ajouter au panier
								</button>
							</div>
						</div>
						
						<div class="articleDisco">
							<div class="imageDisco">
								<img src="../images/beethoven.jpg">
							</div>
							<div class="descriptionArticle">
								<p>Symphonie pastorale - L. Von Beethoven </p> <p> CD </p> <p> 12.50€ </p>
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