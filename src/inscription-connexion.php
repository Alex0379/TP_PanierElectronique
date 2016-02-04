<!DOCTYPE HTML>
<html>
	<head>
		<title>Bienvenue sur Livr'o Disque</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../style/style.css" />
	</head>
	<body>	
		<div id="header">
			<h1>Bienvenue sur Livr'o Disque</h1>
			<div id="ligne"></div>
		</div>
		<br /><!--		
		--><div id="cadreConnexion">
			<h1>Connexion</h1>

			<form method="post" action="">
				<p>
					<input type="text" name="identifiant" id="identifiant" placeholder=" Votre identifiant" size="30" maxlength="10" />
					<br />
					<br />
					<input type="password" name="motdepasse" id="motdePasse" placeholder=" Votre mot de passe" size="30" maxlength="10" />
					<br />
					<br />
					<input class="btnEnregistrer" value=" Se Connecter " onclick="" type="submit">
					<p><a href="">Mot de passe oublié ?</a></p>
				</p>
			</form> 
		</div><!--
		--><div id="cadreInscription">
				<h1>Pas encore inscrit ?</h1>
				<br />
				<br />	
				<a href="./formulaire_inscription.php"><input class="btnInscription" value=" S'inscrire " onclick="" type="submit">
			</div>
            
<?php 
    session_start();
    require('../php/fonctions.php');
    
    if(isset($_POST['identifiant'])){
        // Récupération des valeurs
        $id_utilisateur=$_POST['identifiant'];
        $motdepasse=$_POST['motdepasse'];
        
        // supprimer toutes les anciennes variables 
        session_unset();
        if(IdentifieUtilisateur($id_utilisateur, $motdepasse)){
            
            global $HTTP_HOST, $DOCROOT;
            
            $_SESSION['motdepasse'] = $motdepasse;
            $_SESSION['utilisateur'] = $id_utilisateur;
            $_SESSION['nbr_articles'] = 0;
            header('location://'.$HTTP_HOST.'/'.$DOCROOT.'/index.php');
            exit();
        }
        else{
            echo('Erreur interne');
            exit();
        }
    }
    
?>
            
	</body>
</html>