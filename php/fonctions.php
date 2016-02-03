<?php 
    require 'commun.inc.php';
    
    // fonction Connex()
    function connex($base){
        global $DB_SERVER, $HTTP_HOST, $DB_LOGIN, $DB_PASSWORD, $DB, $DOCROOT;
        try{
            $idcom = new PDO('mysql:host=$HTTP_HOST;dbname=$DB;charset=utf8', $DB_LOGIN, $DB_PASSWORD);
        }
        catch(Exception $e){
            die('Erreur : ' . $e->getMessage());
        }
        return $idcom;
    }
    
    // fonction IndentifieUtilisateur()
    function IdentifieUtilisateur($utilisateur, $motdepasse){
        
    }
    
    // fonction SupprimeSession()
?>