<?php
	include_once('header.html');
?>

<!-- Corps -->
		<div class="conteneur">
			<div class="header">
				<h1>Inscrivez-Vous !</h1>
			</div>
			<div class="formulaire">
				<form action="#">
					<div class="section"><span>1</span>Nom et Adresse</div>
					<div class="contenu_form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="nomPers">
							<label class="mdl-textfield__label" for="nomPers">Nom</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="pays">
							<label class="mdl-textfield__label" for="pays">Pays</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="ville">
							<label class="mdl-textfield__label" for="ville">Ville</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="codePostal">
							<label class="mdl-textfield__label" for="codePostal">Code postal</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="adresse1">
							<label class="mdl-textfield__label" for="adresse1">Adresse ligne 1</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="adresse2">
							<label class="mdl-textfield__label" for="adresse2">Adresse ligne 2</label>
						</div>
					</div>
					
					<div class="section"><span>2</span>Sexe</div>
					<div class="contenu_form">
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="homme">
							<input type="radio" id="homme" class="mdl-radio__button" name="sexe" value="H">
							<span class="mdl-radio__label">Homme</span>
						</label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="femme">
							<input type="radio" id="femme" class="mdl-radio__button" name="sexe" value="F">
							<span class="mdl-radio__label">Femme</span>
						</label>
					</div>
					
					<div class="section"><span>3</span>Année de naissance et Moyen de communication</div>
					<div class="contenu_form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="anneeNaissance">
							<label class="mdl-textfield__label" for="anneeNaissance">Année de Naissance</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="mail">
							<label class="mdl-textfield__label" for="mail">Addresse mail</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="tel">
							<label class="mdl-textfield__label" for="tel">Téléphone</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
					</div>
					
					<div class="section"><span>4</span>Type de Carte</div>
					<div class="contenu_form">
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="masterCard">
							<input type="radio" id="masterCard" class="mdl-radio__button" name="typeCarte" value="masterCard">
							<span class="mdl-radio__label">MasterCard</span>
						</label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="visa">
							<input type="radio" id="visa" class="mdl-radio__button" name="typeCarte" value="visa">
							<span class="mdl-radio__label">Visa</span>
						</label>
						<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="carteBleu">
							<input type="radio" id="carteBleu" class="mdl-radio__button" name="typeCarte" value="carteBleu">
							<span class="mdl-radio__label">CarteBleu</span>
						</label>
					</div>
					
					<div class="section"><span>5</span>Numéro de Carte</div>
					<div class="contenu_form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="numeroCarte">
							<label class="mdl-textfield__label" for="numeroCarte">Numéro de Carte</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="dateExpiration">
							<label class="mdl-textfield__label" for="dateExpiration">Date d'expiration</label>
						</div>
					</div>
					
					<div class="section"><span>6</span>Identifiant et Mot de passe</div>
					<div class="contenu_form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="idConnexion">
							<label class="mdl-textfield__label" for="idConnexion">Identifiant</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="mdp">
							<label class="mdl-textfield__label" for="mdp">Mot de passe</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" id="confirmationMdp">
							<label class="mdl-textfield__label" for="confirmationMdp">Confirmer mot de passe</label>
						</div>
					</div>
					
					<div class="footer">
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
							S'inscrire
						</button>
					</div>
				</form>
			</div>
		</div>


<?php include_once("footer.html"); ?>