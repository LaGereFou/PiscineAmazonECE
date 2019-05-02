-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 02 mai 2019 à 08:54
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `eceamazon`
--

-- --------------------------------------------------------

--
-- Structure de la table `acheteur`
--

DROP TABLE IF EXISTS `acheteur`;
CREATE TABLE IF NOT EXISTS `acheteur` (
  `email` char(50) NOT NULL,
  `mdp` text,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `adresse` text,
  `cpost` int(11) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `pays` varchar(30) DEFAULT NULL,
  `ntel` int(11) DEFAULT NULL,
  `tcarte` text,
  `ncarte` int(11) DEFAULT NULL,
  `dcarte` date DEFAULT NULL,
  `ccarte` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acheteur`
--

INSERT INTO `acheteur` (`email`, `mdp`, `nom`, `prenom`, `adresse`, `cpost`, `ville`, `pays`, `ntel`, `tcarte`, `ncarte`, `dcarte`, `ccarte`) VALUES
('jeremyrocaroca@gmail.com', 'aqwzsx', 'Roca', 'Jeremy', '13 rue de cotonou', 94000, 'creteil', 'France', 608097102, 'Visa', 4878, '2020-06-01', 206),
('leonardo.dicaprio@gmail.com', 'titanic', 'DiCaprio', 'Leonardo', '12 rue de la huchette', 75005, 'Paris', 'France', 676382321, 'Mastercard', 4444, '2020-07-02', 202),
('popfiotte@gmail.com', 'meetflix', 'Fiotte', 'Pop', '37 quai de grenelle', 75015, 'Paris', 'France', 612345678, 'Visa', 3333, '2020-09-22', 101),
('ironman@avengers.fr', 'thanos', 'Avengers', 'Tony', '45 rue de la mort', 69696, 'bagneux', 'Vormir', 686389321, 'Visa', 2222, '2020-08-02', 909),
('aryastark@got.fr', 'marcheurblanc', 'Stark', 'Arya', '99 rue du trone de fer', 77777, 'Got', 'Loin', 675382321, 'Mastercard', 1111, '2021-07-02', 808);

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `email` char(50) NOT NULL,
  `mdp` text,
  `nom` varchar(30) DEFAULT NULL,
  `pdp` text,
  `image` text,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`email`, `mdp`, `nom`, `pdp`, `image`) VALUES
('eceamazon@gmail.com', 'admin', 'Eceamazon', 'xxx', 'xxx');

-- --------------------------------------------------------

--
-- Structure de la table `items`
--

DROP TABLE IF EXISTS `items`;
CREATE TABLE IF NOT EXISTS `items` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titre` text NOT NULL,
  `prix` float NOT NULL,
  `vendeur` text,
  `description` text,
  `image` text,
  `quantity` int(11) DEFAULT NULL,
  `nombrevendu` int(11) DEFAULT NULL,
  `categorie` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `items`
--

INSERT INTO `items` (`id`, `titre`, `prix`, `vendeur`, `description`, `image`, `quantity`, `nombrevendu`, `categorie`) VALUES
(1, 'raquette de tennis', 40.99, 'lomepal@gmail.com', 'raquette de tennis head au prix de 40.99 de couleur noir', 'xxx', 12, 0, 'Tennis');

-- --------------------------------------------------------

--
-- Structure de la table `livres`
--

DROP TABLE IF EXISTS `livres`;
CREATE TABLE IF NOT EXISTS `livres` (
  `id_livres` int(11) NOT NULL,
  `auteur` varchar(30) DEFAULT NULL,
  `datePubli` date DEFAULT NULL,
  `edition` varchar(30) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_livres`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `musique`
--

DROP TABLE IF EXISTS `musique`;
CREATE TABLE IF NOT EXISTS `musique` (
  `id_musique` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_musique`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

DROP TABLE IF EXISTS `panier`;
CREATE TABLE IF NOT EXISTS `panier` (
  `id_panier` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acheteur` varchar(30) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `dateachat` date DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_panier`),
  KEY `id` (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `sportetloisirs`
--

DROP TABLE IF EXISTS `sportetloisirs`;
CREATE TABLE IF NOT EXISTS `sportetloisirs` (
  `id_sport` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `marque` text,
  `idd` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id_sport`),
  KEY `FK_idfk` (`idd`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `sportetloisirs`
--

INSERT INTO `sportetloisirs` (`id_sport`, `marque`, `idd`) VALUES
(1, 'head', 1);

-- --------------------------------------------------------

--
-- Structure de la table `vendeur`
--

DROP TABLE IF EXISTS `vendeur`;
CREATE TABLE IF NOT EXISTS `vendeur` (
  `email` varchar(50) NOT NULL,
  `pseudo` varchar(30) DEFAULT NULL,
  `mdp` text,
  `nom` varchar(30) DEFAULT NULL,
  `prenom` varchar(30) DEFAULT NULL,
  `pdp` text,
  `image` text,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `vendeur`
--

INSERT INTO `vendeur` (`email`, `pseudo`, `mdp`, `nom`, `prenom`, `pdp`, `image`) VALUES
('lydiahadjeb@gmail.com', 'lyly', 'got', 'Hadjeb', 'Lydia', 'xxx', 'xxx'),
('hudofullgerbe@gmail.com', 'hudo', 'Hudo1010', 'Fougeres', 'Hugo', 'xxx', 'xxx'),
('jps@gmail.com', 'jps', 'info', 'Segado', 'Jean Pierre', 'xxx', 'xxx'),
('queenb@gmail.com', 'queenb', 'jayz', 'Carter', 'Beyonce', 'xxx', 'xxx'),
('lomepal@gmail.com', 'lomepal', 'jeanine', 'Antoine', 'Valentinelli', 'xxx', 'xxx');

-- --------------------------------------------------------

--
-- Structure de la table `vente`
--

DROP TABLE IF EXISTS `vente`;
CREATE TABLE IF NOT EXISTS `vente` (
  `id_vente` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `acheteur` varchar(30) DEFAULT NULL,
  `quantite` int(11) DEFAULT NULL,
  `dateachat` date DEFAULT NULL,
  `email` char(50) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vente`),
  KEY `id` (`id`),
  KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `vetements`
--

DROP TABLE IF EXISTS `vetements`;
CREATE TABLE IF NOT EXISTS `vetements` (
  `id_vetements` int(11) NOT NULL,
  `sexe` bit(1) DEFAULT NULL,
  `taille` text,
  `marque` text,
  `couleur` varchar(30) DEFAULT NULL,
  `id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_vetements`),
  KEY `id` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
