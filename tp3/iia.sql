-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 23 mars 2022 à 15:57
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `iia`
--

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

DROP TABLE IF EXISTS `etudiant`;
CREATE TABLE IF NOT EXISTS `etudiant` (
  `identifiant` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `Promotion_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`identifiant`),
  KEY `fk_etudiant_Promotion_idx` (`Promotion_id`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `etudiant`
--

INSERT INTO `etudiant` (`identifiant`, `prenom`, `nom`, `Promotion_id`) VALUES
(1, 'Jose', 'Riaud', 1),
(2, 'Mathis', 'Lethug', 1),
(3, 'Pierre', 'LeCailloux', 1),
(4, 'Philipe', 'Couscous', 2),
(5, 'Couscous', 'LePoteDePhilipe', 2),
(6, 'Lucas', 'Voiture', 2),
(7, 'Johny', 'Haliday', 2),
(8, 'Renaud', 'MoiZamimal', 3),
(9, 'Poisson', 'blobli', 3),
(10, 'Licorne', 'Quipu', 3),
(11, 'Rafal', 'test', 3),
(12, 'Alex', 'Terrieur', 3),
(14, 'Sarah', 'Croche', 4),
(15, 'Sarah', 'Pelle', 4),
(16, 'Sarrah', 'Porte', 4),
(17, 'Sarrah', 'Mene', 4),
(18, 'Sarrah', 'petisse', 5),
(19, 'Sarrah', 'Je', 5),
(20, 'Pikachu', 'Ladobe', 6),
(21, 'Insolourdo', 'TopUn', 6),
(22, 'MegaInsolourdo', 'Dansmesreves', 6),
(23, 'CrystalInsolourdo', 'PokemonAzuriteRpZ', 6),
(24, 'Asta', 'Luego', 6),
(25, 'Baka', 'Sta', 6),
(28, 'Pierre', 'LeCailloux', 1),
(33, 'Renaud', 'MoiZamimal', 3),
(42, 'Sarrah', 'Mene', 4),
(45, 'Pikachu', 'Ladobe', 6),
(51, 'Gorge', 'deLajungle', 1);

-- --------------------------------------------------------

--
-- Structure de la table `promotion`
--

DROP TABLE IF EXISTS `promotion`;
CREATE TABLE IF NOT EXISTS `promotion` (
  `id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `promotion`
--

INSERT INTO `promotion` (`id`, `nom`) VALUES
(1, 'btsE1'),
(2, 'btsE2'),
(3, 'btsA1'),
(4, 'btsA2'),
(5, 'L1'),
(6, 'L2');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD CONSTRAINT `fk_etudiant_Promotion` FOREIGN KEY (`Promotion_id`) REFERENCES `promotion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
