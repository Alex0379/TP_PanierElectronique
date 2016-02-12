<?php 
    require 'commun.inc.php';
    
    // fonction Connex()
    function connex($base){
        global $DB_SERVER, $HTTP_HOST, $DB_LOGIN, $DB_PASSWORD, $DB, $DOCROOT;
        try{
            $idcom = new PDO('mysql:host='.$DB_SERVER.';dbname='.$DB.';charset=utf8', $DB_LOGIN, $DB_PASSWORD);
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $idcom;
    }
    
    // fonction IndentifieUtilisateur()
    function IdentifieUtilisateur($utilisateur, $motdepasse){
        global $DB_SERVER, $HTTP_HOST, $DB_LOGIN, $DB_PASSWORD, $DB, $DOCROOT;
        
        // Ouvre une connexion avec le serveur MySQL 
        if(!($idcom = connex($DB))){
            AfficheMessErr(sprintf("Erreur interne %d:%s\n"));
            return 0;
        }
        
        // Effectuer l'identification utilisateur / mot de passe 
        $requete="select * from profil_utilisateur where id_utilisateur='$utilisateur'";
            if(!($resultat = $idcom->query($requete))){
                AfficheMessErr(sprintf("Erreur interne %d:%s\n"));
                return 0;
            }
            
            if(($ligne = $resultat->fetch()) && ($motdepasse == $ligne["motdepasse"] && $motdepasse != ""))
                return 1;
            else
                return 0;
    }
    
    // fonction SupprimeSession()
    function SupprimeSession(){
        // Supprimer toutes les variable de session 
        session_unset();
        
        //Détruire la session elle-même
        session_destroy();
    }
	
	// Fonction ajoutPanier()
	function ajoutPanier()
	{
		global $DB;
		// Récupération des articles (valeurs renvoyées par les boutons).
		$idArticle = $_POST["no_article_choisi"];
		$typeArticleChoisi = $_POST["type_article_choisi"];
		
		// Nouvelle requête pour récupérer les informations détaillées des articles.
			// Connexion à la base de données.
			$idcom = connex($DB);
            
			// Condition pour les requêtes SQL
			switch ($typeArticleChoisi)
			{
				case "Livre":
					$requete="SELECT * FROM boutique_livre WHERE no_article = '$idArticle'";
					break;
					
				default :
					$requete="SELECT * FROM boutique_musique WHERE no_article = '$idArticle'";
			}
			
			// Lancement de la requête.
			$resultat=$idcom->query($requete) or die("erreur requête");
			while ($donnees = $resultat->fetch())
			{
				$titre = $donnees["titre"];
				if ($donnees["type_article"]=="Livre")
				{
					$auteur_artiste=$donnees["auteur"];
				}
				else
				{
					$auteur_artiste=$donnees["artiste"];
				}
				$prix=$donnees["prix"];
			}
		
		// Mise en place d'un drapeau
		$present=false;
		
		for($i=0; $i<$_SESSION["nbr_articles"]; $i++)
		{
			if($_SESSION["no_article"][$i] == $idArticle AND $_SESSION["type_article"][$i] == $typeArticleChoisi)
			{
				$present=true;
			}
		}
		
		if ($present)
			{
				echo "<h3>Cet article est déjà présent dans votre panier. Vous avez la possibilité de modifier la quantité en affichant celui-ci.</h3>";
			}
		else
		// SESSION on place ces variables dans des variables de session.
			{
				$_SESSION["no_article"][]=$idArticle;
				$_SESSION["type_article"][]=$typeArticleChoisi;
				$_SESSION["titre"][]=$titre;
				$_SESSION["auteur_artiste"][]=$auteur_artiste;
				$_SESSION["prix"][]=$prix;
				$_SESSION["quantite"][]=1; // Quantité toujours fixée à 1 par défaut pour l'article sélectionné.
				$_SESSION["nbr_articles"]++; // Incrémentation de la quantité d'articles.
				echo "<h3>L'article suivant a été ajouté à votre panier électronique...</h3>";
			}
	}
?>