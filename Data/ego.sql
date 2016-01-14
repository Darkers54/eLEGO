-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Janvier 2016 à 01:40
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `ego`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbbilladdress`
--

CREATE TABLE IF NOT EXISTS `tbbilladdress` (
  `ID_bad` int(11) NOT NULL AUTO_INCREMENT,
  `badTitle` enum('M.','Mme','Mlle') NOT NULL,
  `badFirstname` varchar(80) NOT NULL,
  `badLastname` varchar(80) NOT NULL,
  `badAddress1` varchar(255) NOT NULL,
  `badAddress2` varchar(255) NOT NULL,
  `badAddress3` varchar(255) NOT NULL,
  `badPostCode` varchar(10) NOT NULL,
  `badCity` varchar(255) NOT NULL,
  `badCountry` enum('FRANCE','ALLEMAGNE','BELGIQUE','LUXEMBOURG','SUISSE','ITALIE','ESPAGNE','PORTUGAL','PAYS-BAS') NOT NULL,
  PRIMARY KEY (`ID_bad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbdeliveryaddress`
--

CREATE TABLE IF NOT EXISTS `tbdeliveryaddress` (
  `ID_dad` int(11) NOT NULL AUTO_INCREMENT,
  `dadTitle` enum('M.','Mme','Mlle') NOT NULL,
  `dadFirstname` varchar(80) NOT NULL,
  `dadLastname` varchar(80) NOT NULL,
  `dadAddress1` varchar(255) NOT NULL,
  `dadAddress2` varchar(255) NOT NULL,
  `dadAddress3` varchar(255) NOT NULL,
  `dadPostCode` varchar(10) NOT NULL,
  `dadCity` varchar(255) NOT NULL,
  `dadCountry` enum('FRANCE','ALLEMAGNE','BELGIQUE','LUXEMBOURG','SUISSE','ITALIE','ESPAGNE','PORTUGAL','ROYAUME-UNI') NOT NULL,
  PRIMARY KEY (`ID_dad`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `tbusers`
--

CREATE TABLE IF NOT EXISTS `tbusers` (
  `ID_usr` int(11) NOT NULL AUTO_INCREMENT,
  `usrTitle` enum('M.','Mme','Mlle') NOT NULL,
  `usrFirstname` varchar(80) NOT NULL,
  `usrLastname` varchar(80) NOT NULL,
  `usrNickname` varchar(255) NOT NULL,
  `usrEmail` varchar(255) NOT NULL,
  `usrPassword` varchar(255) NOT NULL,
  `usrRole` varchar(25) NOT NULL,
  PRIMARY KEY (`ID_usr`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
