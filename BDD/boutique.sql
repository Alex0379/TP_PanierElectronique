-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 06 Janvier 2016 à 16:04
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `boutique`
--

-- --------------------------------------------------------

--
-- Structure de la table `boutique_livre`
--

CREATE TABLE IF NOT EXISTS `boutique_livre` (
  `no_article` int(20) NOT NULL AUTO_INCREMENT,
  `type_article` varchar(20) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `auteur` varchar(60) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`no_article`),
  KEY `index_on_livre_no_article` (`no_article`),
  KEY `index_on_livre_titre` (`titre`),
  KEY `index_on_livre_auteur` (`auteur`),
  KEY `no_article` (`no_article`),
  KEY `titre` (`titre`),
  KEY `auteur` (`auteur`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `boutique_livre`
--

INSERT INTO `boutique_livre` (`no_article`, `type_article`, `titre`, `auteur`, `prix`) VALUES
(1, 'Livre', 'Les Fleurs du mal', 'Ch. Baudelaire', 12.8),
(2, 'Livre', 'Travaux pratiques avec Excel 2016', 'F. Lemainque', 22.5),
(3, 'Livre', 'La nausée', 'J.P. Sartre', 9.95),
(4, 'Livre', 'Guerre et Paix', 'Léon Tolstoï', 15.2),
(5, 'Livre', 'Le médecin malgré lui', 'Molière', 5.6);

-- --------------------------------------------------------

--
-- Structure de la table `boutique_musique`
--

CREATE TABLE IF NOT EXISTS `boutique_musique` (
  `no_article` int(20) NOT NULL AUTO_INCREMENT,
  `type_article` varchar(20) NOT NULL,
  `titre` varchar(60) NOT NULL,
  `artiste` varchar(60) NOT NULL,
  `prix` float NOT NULL,
  PRIMARY KEY (`no_article`),
  KEY `index_on_musique_no_article` (`no_article`),
  KEY `index_on_musique_titre` (`titre`),
  KEY `index_on_musique_artiste` (`artiste`),
  KEY `no_article` (`no_article`),
  KEY `titre` (`titre`),
  KEY `artiste` (`artiste`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `boutique_musique`
--

INSERT INTO `boutique_musique` (`no_article`, `type_article`, `titre`, `artiste`, `prix`) VALUES
(1, 'CD', 'Revolver', 'Beatles', 20.9),
(2, 'CD', 'Abbey Road', 'Beatles', 20.1),
(3, 'CD', 'Best of Amstrong', 'Louis Amstrong', 9.95),
(4, 'CD', 'Toccata et fugue en D mineur', 'Ludwig von Beethoven', 9.95);

-- --------------------------------------------------------

--
-- Structure de la table `profil_utilisateur`
--

CREATE TABLE IF NOT EXISTS `profil_utilisateur` (
  `nom` varchar(40) NOT NULL,
  `id_utilisateur` varchar(20) NOT NULL,
  `motdepasse` varchar(20) NOT NULL,
  `adresse_ligne1` varchar(40) NOT NULL,
  `adresse_ligne2` varchar(40) DEFAULT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `codepostal` varchar(5) NOT NULL,
  `sexe` varchar(3) NOT NULL,
  `an_naissance` varchar(4) NOT NULL,
  `adresse_email` varchar(20) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `no_carte` varchar(20) NOT NULL,
  `date_expiration` varchar(20) NOT NULL,
  `type_carte` varchar(20) NOT NULL,
  `solde_compte` float NOT NULL,
  PRIMARY KEY (`id_utilisateur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `profil_utilisateur`
--

INSERT INTO `profil_utilisateur` (`nom`, `id_utilisateur`, `motdepasse`, `adresse_ligne1`, `adresse_ligne2`, `ville`, `pays`, `codepostal`, `sexe`, `an_naissance`, `adresse_email`, `telephone`, `no_carte`, `date_expiration`, `type_carte`, `solde_compte`) VALUES
('dubois', 'dubois', '123', '3 place des Saules', NULL, 'Moulin', 'France', '54100', 'Mr', '1970', 'dubois@fai.fr', '12345678', '123456789', '10/12/2020', 'Mastercard', 53.35),
('Dupont', 'dupont', 'password', '3 allée des Glycines', NULL, 'Montpellier', 'France', '34000', 'Mr', '1970', 'jdupont@fai.fr', '12345678', '123456789', '07/05/2018', 'Eurocard', 204.5),
('Rignal', 'o.rignal', 'p@$$word', '', NULL, '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `no_commande` int(11) NOT NULL AUTO_INCREMENT,
  `id_utilisateur` varchar(20) NOT NULL,
  `no_article` varchar(20) NOT NULL,
  `type_article` varchar(10) NOT NULL,
  `quantité` int(11) NOT NULL DEFAULT '0',
  `date` date NOT NULL,
  `etat` varchar(20) NOT NULL,
  PRIMARY KEY (`no_commande`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Contenu de la table `transaction`
--

INSERT INTO `transaction` (`no_commande`, `id_utilisateur`, `no_article`, `type_article`, `quantité`, `date`, `etat`) VALUES
(22, 'dupont', '2', 'Livre', 1, '2015-09-11', 'En attente'),
(23, 'dupont', '4', 'C.D.', 1, '2015-09-11', 'En attente'),
(24, 'dubois', '3', 'Livre', 1, '2015-09-11', 'En attente'),
(26, 'dubois', '2', 'Livre', 1, '2015-09-13', 'En attente'),
(27, 'dubois', '1', 'CD', 1, '2015-09-13', 'En attente');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
