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
							<input class="mdl-textfield__input" type="text" name="nomPers" id="nomPers">
							<label class="mdl-textfield__label" for="nomPers">Nom</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="pays" id="pays">
							<label class="mdl-textfield__label" for="pays">Pays</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="ville" id="ville">
							<label class="mdl-textfield__label" for="ville">Ville</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="codePostal" id="codePostal">
							<label class="mdl-textfield__label" for="codePostal">Code postal</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="adresse1" id="adresse1">
							<label class="mdl-textfield__label" for="adresse1">Adresse ligne 1</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="adresse2" id="adresse2">
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
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="anneeNaissance" id="anneeNaissance">
							<label class="mdl-textfield__label" for="anneeNaissance">Année de Naissance</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="mail" id="mail">
							<label class="mdl-textfield__label" for="mail">Addresse mail</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="tel" id="tel">
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
							<input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" name="numeroCarte" id="numeroCarte">
							<label class="mdl-textfield__label" for="numeroCarte">Numéro de Carte</label>
							<span class="mdl-textfield__error">Ceci n'est pas un nombre...</span>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="dateExpiration" id="dateExpiration">
							<label class="mdl-textfield__label" for="dateExpiration">Date d'expiration</label>
						</div>
					</div>
					
					<div class="section"><span>6</span>Identifiant et Mot de passe</div>
					<div class="contenu_form">
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="idConnexion" id="idConnexion">
							<label class="mdl-textfield__label" for="idConnexion">Identifiant</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="mdp" id="mdp">
							<label class="mdl-textfield__label" for="mdp">Mot de passe</label>
						</div>
						<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
							<input class="mdl-textfield__input" type="text" name="confirmationMdp" id="confirmationMdp">
							<label class="mdl-textfield__label" for="confirmationMdp">Confirmer mot de passe</label>
						</div>
					</div>
					
					<div class="footer">
						<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" type="submit">
							S'inscrire
						</button>
					</div>
				</form>
			</div>
		</div>

<?php
    require('../php/fonctions.php');
    
    if(isset($_POST['identifiant'])){
        // Récupération des valeurs
        $nom                =   $_POST['nomPers'];
        $pays               =   $_POST['pays'];
        $ville              =   $_POST['ville'];
        $codepostal         =   $_POST['codePostal'];
        $adresse_ligne1     =   $_POST['adresse1'];
        $adresse_ligne2     =   $_POST['adresse2'];
        $sexe               =   $_POST['sexe'];
        $an_naissance       =   $_POST['anneeNaissance'];
        $adresse_mail       =   $_POST['mail'];
        $telephone          =   $_POST['tel'];
        $type_carte         =   $_POST['typeCarte'];
        $no_carte           =   $_POST['numeroCarte'];
        $date_expiration    =   $_POST['dateExpiration'];
        $id_utilisateur     =   $_POST['idConnexion'];
        $motdepasse         =   $_POST['mdp'];
        $confirmationMdp    =   $_POST['confirmationMdp'];
        
        
        if($motdepasse == $confirmationMdp){
            
        }
          
          
          
          
          
            global $HTTP_HOST, $DOCROOT;
            
            header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/index.php');
            exit();
        }
        else{
            echo('Erreur interne');
            exit();
        }
    }
    
?>

<?php include_once("footer.php"); ?>