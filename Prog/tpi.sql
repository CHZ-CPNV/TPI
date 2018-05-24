-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 23 mai 2018 à 14:40
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
  `Statut` tinyint(1) NOT NULL,
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
  `Username` varchar(30) COLLATE utf8_bin NOT NULL,
  `Nom` varchar(30) COLLATE utf8_bin NOT NULL,
  `Prenom` varchar(50) COLLATE utf8_bin NOT NULL,
  `Password` varchar(32) COLLATE utf8_bin NOT NULL,
  `Email` varchar(60) COLLATE utf8_bin NOT NULL,
  `NbPlace` tinyint(4) NOT NULL,
  `Statut` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`IDProf`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `profs`
--

INSERT INTO `profs` (`IDProf`, `Username`, `Nom`, `Prenom`, `Password`, `Email`, `NbPlace`, `Statut`) VALUES
(1, 'CHZ', 'camille', 'heintz', '81dc9bdb52d04dc20036dbd8313ed055', 'camille.heintz@cpnv.ch', 5, 0),
(2, 'Gboiay', 'Mottay', 'Gwendal', 'f09f52499eff0cd90d74591cad902691', 'gwendal.mottay@cpnv.ch', 7, 0),
(3, 'THX', 'test', 'testeu', 'e10adc3949ba59abbe56e057f20f883e', 'teste.testeu@gmail.com', 5, 0);

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
