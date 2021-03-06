<!DOCTYPE HTML>
<html>
	<head>
		<title>Livr'O Disque</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../style/style.css" />
		<link rel="stylesheet" href="../style/mdl/material.min.css"/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
		
		<!-- En-tête -->
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
			<header class="mdl-layout__header">
				<div class="mdl-layout__header-row">
				<!-- Titre -->
				<span class="mdl-layout-title">Livr'O Disque</span>
				<!-- Alignement du titre à droite avec un espacement -->
				<div class="mdl-layout-spacer"></div>
                <!-- Navigation -->
                <nav class="mdl-navigation mdl-layout--large-screen-only">
                    <a class="mdl-navigation__link" href="./index.php">Accueil</a>
                    <a class="mdl-navigation__link" href="./bibliotheque.php">Bibli'O Thèque</a>
                    <a class="mdl-navigation__link" href="./discotheque.php">Disc'O Thèque</a>
                    <a class="mdl-navigation__link" href="./panier.php">Compte</a>
                    <form method="post">
						<button id="boutonDeco" name="boutonDeco" type="submit" class="mdl-button mdl-js-button mdl-button--icon">
							<i class="material-icons">power_settings_new</i>
						</button>
						<div class="mdl-tooltip" for="boutonDeco">
							Déconnexion
						</div>
					</form>
                </nav>
                </div>
			</header>
            
			<div class="mdl-layout__drawer">
				<span class="mdl-layout-title">Livr'O Disque</span>
				<nav class="mdl-navigation">
					<a class="mdl-navigation__link" href="./index.php">Accueil</a>
                    <a class="mdl-navigation__link" href="./bibliotheque.php">Bibli'O Thèque</a>
                    <a class="mdl-navigation__link" href="./discotheque.php">Disc'O Thèque</a>
                    <a class="mdl-navigation__link" href="./panier.php">Compte</a>
				</nav>
			</div>
            <main class="mdl-layout__content">
                
			<?php
				session_start();
				require('../php/fonctions.php');
				// Récupération des valeurs boutons/déco
				
				if(isset($_POST["boutonDeco"]))
				{
					SupprimeSession();
				}
			?>
