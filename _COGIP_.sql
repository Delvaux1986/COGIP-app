-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
<<<<<<< HEAD
-- Généré le : lun. 14 sep. 2020 à 09:24
-- Version du serveur :  10.4.13-MariaDB
=======
-- Généré le : mer. 09 sep. 2020 à 08:42
-- Version du serveur :  10.5.4-MariaDB
>>>>>>> master
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cogip`
--

-- --------------------------------------------------------

--
-- Structure de la table `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `ID_Company` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Country` varchar(40) NOT NULL,
  `VAT` varchar(10) NOT NULL,
  `ID_Type` int(11) NOT NULL,
  PRIMARY KEY (`ID_Company`),
  KEY `ID_Type` (`ID_Type`)
<<<<<<< HEAD
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `company`
--

INSERT INTO `company` (`ID_Company`, `Name`, `Country`, `VAT`, `ID_Type`) VALUES
(1, 'Haie Tronc SPRL', 'Finlande', 'FI01314575', 1),
(2, 'Q_Q ASBL', 'France', 'FR54896347', 2),
(3, 'Love Solution', 'Allemagne', 'DE4586347', 2),
(4, 'Brouette Society', 'Espagne', 'ES4584589', 2),
(5, 'La pull Society', 'Soul Society', 'DE1294347', 1),
(6, 'Spirou SPRL', 'Belgique', 'BE4586347', 2);

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID_Contact` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `ID_Company` int(11) NOT NULL,
  PRIMARY KEY (`ID_Contact`),
  KEY `ID_Company` (`ID_Company`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`ID_Contact`, `Firstname`, `Lastname`, `Email`, `Phone`, `ID_Company`) VALUES
(1, 'Robby', 'Lastname', 'dualvex@hotmail.com', 485693965, 1),
(2, 'Robby', 'Delvaux', 'Dualvex86@gmail.com', 486353639, 1),
(3, 'Pierre', 'Weets', 'Pierre@gmail.com', 485464947, 1),
(4, 'Adrien', 'Delpire', 'Adrien@gmail.com', 485262485, 1),
(5, 'Jean-Charles', 'Brognaz', 'Jc@gmail.com', 496353637, 1),
(6, 'Albert', 'njadze', 'Albert@gmail.com', 123456987, 1),
(7, 'Arnaud', 'Duchemin', 'Arnaud@Becode.org', 485464947, 1);
=======
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Structure de la table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `ID_Invoice` int(11) NOT NULL AUTO_INCREMENT,
  `Number_Invoice` varchar(14) NOT NULL,
  `Date_Invoice` date NOT NULL,
  `ID_Company` int(11) NOT NULL,
  `ID_Contact` int(11) NOT NULL,
  PRIMARY KEY (`ID_Invoice`),
  KEY `ID_Company` (`ID_Company`),
  KEY `ID_Contact` (`ID_Contact`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `invoice`
--

INSERT INTO `invoice` (`ID_Invoice`, `Number_Invoice`, `Date_Invoice`, `ID_Company`, `ID_Contact`) VALUES
(1, 'F20190404-001', '2019-04-04', 1, 1),
(2, 'F20190404-002', '2019-04-04', 2, 2),
(3, 'F20190404-003', '2019-04-04', 3, 3),
(4, 'F20190504-001', '2019-05-04', 4, 4),
(5, 'F20190504-002', '2019-05-04', 1, 5),
(6, 'F20190504-003', '2019-05-04', 2, 2),
(7, 'F20200604-001', '2020-06-04', 3, 3),
(8, 'F20200604-002', '2020-06-04', 4, 4),
(9, 'F20200604-003', '2020-06-04', 1, 1),
(10, 'F20200604-004', '2020-06-04', 2, 2),
(11, 'F20200704-001', '2020-06-04', 3, 3),
(12, 'F20200704-002', '2020-06-04', 4, 4);
=======
-- Structure de la table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `ID_Contact` int(11) NOT NULL AUTO_INCREMENT,
  `Firstname` varchar(40) NOT NULL,
  `Lastname` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` int(11) NOT NULL,
  `ID_Company` int(11) NOT NULL,
  PRIMARY KEY (`ID_Contact`),
  KEY `ID_Company` (`ID_Company`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
>>>>>>> master

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `ID_Type` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Company` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Type`)
=======
-- Structure de la table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
CREATE TABLE IF NOT EXISTS `invoice` (
  `ID_Invoice` int(11) NOT NULL AUTO_INCREMENT,
  `Number_Invoice` int(11) NOT NULL,
  `Date_Invoice` date NOT NULL,
  `ID_Company` int(11) NOT NULL,
  `ID_Contact` int(11) NOT NULL,
  PRIMARY KEY (`ID_Invoice`),
  KEY `ID_Company` (`ID_Company`),
  KEY `ID_Contact` (`ID_Contact`)
>>>>>>> master
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
<<<<<<< HEAD
-- Structure de la table `user`
--

=======
-- Structure de la table `type`
--

DROP TABLE IF EXISTS `type`;
CREATE TABLE IF NOT EXISTS `type` (
  `ID_Type` int(11) NOT NULL AUTO_INCREMENT,
  `Type_Company` varchar(30) NOT NULL,
  PRIMARY KEY (`ID_Type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

>>>>>>> master
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `ID_User` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(40) NOT NULL,
  `Hash_Password` varchar(255) NOT NULL,
  `Profil` varchar(40) NOT NULL,
  PRIMARY KEY (`ID_User`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;