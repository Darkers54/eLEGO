-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 14 Janvier 2016 à 13:49
-- Version du serveur :  5.6.25
-- Version de PHP :  5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `lego_test`
--

-- --------------------------------------------------------

--
-- Structure de la table `tbbilladdress`
--

CREATE TABLE IF NOT EXISTS `tbbilladdress` (
  `ID_bad` int(11) NOT NULL,
  `badTitle` enum('M.','Mme','Mlle') NOT NULL,
  `badFirstname` varchar(80) NOT NULL,
  `badLastname` varchar(80) NOT NULL,
  `badAddress1` varchar(255) NOT NULL,
  `badAddress2` varchar(255) NOT NULL,
  `badAddress3` varchar(255) NOT NULL,
  `badPostCode` varchar(10) NOT NULL,
  `badCity` varchar(255) NOT NULL,
  `badCountry` enum('FRANCE','ALLEMAGNE','BELGIQUE','LUXEMBOURG','SUISSE','ITALIE','ESPAGNE','PORTUGAL','PAYS-BAS') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbdeliveryaddress`
--

CREATE TABLE IF NOT EXISTS `tbdeliveryaddress` (
  `ID_dad` int(11) NOT NULL,
  `dadTitle` enum('M.','Mme','Mlle') NOT NULL,
  `dadFirstname` varchar(80) NOT NULL,
  `dadLastname` varchar(80) NOT NULL,
  `dadAddress1` varchar(255) NOT NULL,
  `dadAddress2` varchar(255) NOT NULL,
  `dadAddress3` varchar(255) NOT NULL,
  `dadPostCode` varchar(10) NOT NULL,
  `dadCity` varchar(255) NOT NULL,
  `dadCountry` enum('FRANCE','ALLEMAGNE','BELGIQUE','LUXEMBOURG','SUISSE','ITALIE','ESPAGNE','PORTUGAL','ROYAUME-UNI') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbfigurecreates`
--

CREATE TABLE IF NOT EXISTS `tbfigurecreates` (
  `ID_fig` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbproducts`
--

CREATE TABLE IF NOT EXISTS `tbproducts` (
  `ID_prod` int(11) NOT NULL,
  `prodNbrRef` int(11) NOT NULL,
  `prodNbrDesign` int(11) NOT NULL,
  `prodNameRef` varchar(255) NOT NULL,
  `prodYear` int(11) NOT NULL,
  `prodDim` varchar(255) NOT NULL,
  `prodDesc` varchar(255) NOT NULL,
  `prodCat` varchar(255) NOT NULL,
  `prodPriceUnit` float NOT NULL,
  `prodNbStock` int(11) NOT NULL,
  `prodUrl` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `tbusers`
--

CREATE TABLE IF NOT EXISTS `tbusers` (
  `ID_usr` int(11) NOT NULL,
  `usrTitle` enum('M.','Mme','Mlle') NOT NULL,
  `usrFirstname` varchar(80) NOT NULL,
  `usrLastname` varchar(80) NOT NULL,
  `usrNickname` varchar(255) NOT NULL,
  `usrEmail` varchar(255) NOT NULL,
  `usrPassword` varchar(255) NOT NULL,
  `usrRole` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `tbbilladdress`
--
ALTER TABLE `tbbilladdress`
  ADD PRIMARY KEY (`ID_bad`);

--
-- Index pour la table `tbdeliveryaddress`
--
ALTER TABLE `tbdeliveryaddress`
  ADD PRIMARY KEY (`ID_dad`);

--
-- Index pour la table `tbfigurecreates`
--
ALTER TABLE `tbfigurecreates`
  ADD PRIMARY KEY (`ID_fig`);

--
-- Index pour la table `tbproducts`
--
ALTER TABLE `tbproducts`
  ADD PRIMARY KEY (`ID_prod`);

--
-- Index pour la table `tbusers`
--
ALTER TABLE `tbusers`
  ADD PRIMARY KEY (`ID_usr`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `tbbilladdress`
--
ALTER TABLE `tbbilladdress`
  MODIFY `ID_bad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tbdeliveryaddress`
--
ALTER TABLE `tbdeliveryaddress`
  MODIFY `ID_dad` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tbfigurecreates`
--
ALTER TABLE `tbfigurecreates`
  MODIFY `ID_fig` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tbproducts`
--
ALTER TABLE `tbproducts`
  MODIFY `ID_prod` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `tbusers`
--
ALTER TABLE `tbusers`
  MODIFY `ID_usr` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
