-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 05 juin 2018 à 13:59
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
-- Structure de la table `courses`
--

DROP TABLE IF EXISTS `courses`;
CREATE TABLE IF NOT EXISTS `courses` (
  `IDCourse` int(11) NOT NULL AUTO_INCREMENT,
  `StartPoint` varchar(30) COLLATE utf8_bin NOT NULL,
  `EndPoint` varchar(30) COLLATE utf8_bin NOT NULL,
  `Date` date NOT NULL,
  `Heure` time NOT NULL,
  PRIMARY KEY (`IDCourse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `courseshoraires`
--

DROP TABLE IF EXISTS `courseshoraires`;
CREATE TABLE IF NOT EXISTS `courseshoraires` (
  `FKHoraire` int(11) NOT NULL,
  `FKCourse` int(11) NOT NULL,
  KEY `FKCourse` (`FKCourse`),
  KEY `FKHoraire` (`FKHoraire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `horaires`
--

DROP TABLE IF EXISTS `horaires`;
CREATE TABLE IF NOT EXISTS `horaires` (
  `IDHoraire` int(11) NOT NULL AUTO_INCREMENT,
  `TrancheHoraire` time NOT NULL,
  PRIMARY KEY (`IDHoraire`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

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
  `VilleDepart` varchar(32) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`IDProf`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`IDProf`, `Acronyme`, `Nom`, `Prenom`, `Password`, `Email`, `NbPlace`, `VilleDepart`) VALUES
(1, 'XCL', 'Carrel', 'Xavier', '81dc9bdb52d04dc20036dbd8313ed055', 'xavier.carrel@test.ch', 5, 'Lausanne'),
(2, 'PBA', 'Benzonana', 'Pascal', '81dc9bdb52d04dc20036dbd8313ed055', 'pascal.benzonana@test.ch', 7, 'Yverdon'),
(3, 'FAO', 'Andolfatto', 'Frederique', '81dc9bdb52d04dc20036dbd8313ed055', 'frederique.andolfatto@test.ch', 5, 'Yverdon'),
(16, 'PAI', 'Altieri', 'Patrick', '81dc9bdb52d04dc20036dbd8313ed055', 'patrick.altieri@test.ch', 5, 'Lausanne'),
(17, 'MCN', 'Chatelain', 'Michel', '81dc9bdb52d04dc20036dbd8313ed055', 'michel.chatelain@test.ch', 5, 'Lausanne'),
(18, 'JCY', 'Chavey', 'Jean-Philippe', '81dc9bdb52d04dc20036dbd8313ed055', 'jean-philippe.chavey@test.ch', 7, 'Lausanne'),
(21, 'MCO', 'Cricco', 'Massimiliano', '81dc9bdb52d04dc20036dbd8313ed055', 'cricco.massimiliano@test.ch', 5, 'Lausanne'),
(26, 'CER', 'Claude', 'Egger', '81dc9bdb52d04dc20036dbd8313ed055', 'claude.egger@test.ch', 7, 'Lausanne'),
(23, 'MDN', 'Dafflon', 'Marc', '81dc9bdb52d04dc20036dbd8313ed055', 'marc.dafflon@test.ch', 2, 'Lausanne'),
(27, 'SFA', 'Fasola', 'Sylvain', '81dc9bdb52d04dc20036dbd8313ed055', 'sylvain.fasola@test.ch', 2, 'Lausanne'),
(25, 'SDE', 'Delaporte', 'Stéphane', '81dc9bdb52d04dc20036dbd8313ed055', 'stéphane.delaporte@test.ch', 5, 'Lausanne'),
(28, 'RFA', 'Favre', 'Raphaël', '81dc9bdb52d04dc20036dbd8313ed055', 'raphaël.favre@test.ch', 7, 'Lausanne'),
(29, 'JIE', 'Julien', 'Ithurbide', '81dc9bdb52d04dc20036dbd8313ed055', 'julien.ithurbide@test.ch', 7, 'Lausanne'),
(30, 'LJI', 'Jäggi', 'Laurent', '81dc9bdb52d04dc20036dbd8313ed055', 'laurent.jäggi@test.ch', 5, 'Lausanne'),
(31, 'CRT', 'Rochat', 'Claude', '81dc9bdb52d04dc20036dbd8313ed055', 'claude.rochat@test.ch', 2, 'Lausanne'),
(32, 'DWZ', 'Wulliamoz', 'Didier', '81dc9bdb52d04dc20036dbd8313ed055', 'didier.wulliamoz@test.ch', 5, 'Lausanne');

-- --------------------------------------------------------

--
-- Structure de la table `profscourses`
--

DROP TABLE IF EXISTS `profscourses`;
CREATE TABLE IF NOT EXISTS `profscourses` (
  `FKProf` int(11) NOT NULL,
  `FKCourse` int(11) NOT NULL,
  KEY `FKProf` (`FKProf`),
  KEY `FKCourse` (`FKCourse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
