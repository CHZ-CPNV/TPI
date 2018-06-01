-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 01 juin 2018 à 12:53
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tpi`
--

-- --------------------------------------------------------

--
-- Structure de la table `profs`
--

DROP TABLE IF EXISTS `profs`;
CREATE TABLE IF NOT EXISTS `profs` (
  `IDProf` int(11) NOT NULL AUTO_INCREMENT,
  `Acronyme` varchar(30) COLLATE utf8_bin NOT NULL,
  `Nom` varchar(36) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(32) COLLATE utf8_bin NOT NULL,
  `Password` varchar(32) COLLATE utf8_bin NOT NULL,
  `Email` varchar(254) COLLATE utf8_bin NOT NULL,
  `NbPlace` tinyint(4) NOT NULL,
  `VilleDépart` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`IDProf`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`IDProf`, `Acronyme`, `Nom`, `Prenom`, `Password`, `Email`, `NbPlace`, `VilleDépart`) VALUES
(1, 'XCL', 'Carrel', 'Xavier', '81dc9bdb52d04dc20036dbd8313ed055', 'xavier.carrel@test.ch', 5, 'Lausanne'),
(2, 'PBA', 'Benzonana', 'Pascal', '81dc9bdb52d04dc20036dbd8313ed055', 'pascal.benzonana@test.ch', 7, 'Yverdon'),
(3, 'FAO', 'Andolfatto', 'Frederique', '81dc9bdb52d04dc20036dbd8313ed055', 'frederique.andolfatto@test.ch', 5, 'Yverdon'),
(16, 'PAI', 'Altieri', 'Patrick', '81dc9bdb52d04dc20036dbd8313ed055', 'patrick.altieri@test.ch', 5, 'Lausanne');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
