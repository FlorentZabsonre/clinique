-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Sam 13 Décembre 2014 à 18:08
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `clinique`
--

-- --------------------------------------------------------

--
-- Structure de la table `acte`
--

CREATE TABLE IF NOT EXISTS `acte` (
  `idacte` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''acte',
  `nomActe` text NOT NULL COMMENT 'nom de l''acte',
  `prixActe` int(11) NOT NULL COMMENT 'prix de l''acte',
  PRIMARY KEY (`idacte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE IF NOT EXISTS `consultation` (
  `idconsult` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant  de la consultation',
  `nommedecin` text NOT NULL COMMENT 'nom du medecin s''occupant de la consultation',
  `date` date NOT NULL COMMENT 'date de la consultation',
  `prix` float NOT NULL COMMENT 'prix de la consultation',
  `compterendu` text NOT NULL COMMENT 'résumé de la consultation',
  `suivi` text NOT NULL COMMENT 'prochaine etape que dois faire le patient',
  PRIMARY KEY (`idconsult`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `historiquecompte`
--

CREATE TABLE IF NOT EXISTS `historiquecompte` (
  `idcompte` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du compte ',
  `numsecu` int(11) NOT NULL COMMENT 'numero de securite social du patient',
  `montant` int(11) NOT NULL COMMENT 'montant decide par le patient ',
  `date` int(11) NOT NULL COMMENT 'date  à laquelle le patient',
  PRIMARY KEY (`idcompte`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `operations`
--

CREATE TABLE IF NOT EXISTS `operations` (
  `idoperation` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de l''opertion',
  `nom` text NOT NULL COMMENT 'nom de l''operation',
  `nompatient` text NOT NULL COMMENT 'nom du patient ayant reçu cette operation',
  `nommedecin` int(11) NOT NULL COMMENT 'nom du  medecin qui l''a realise',
  PRIMARY KEY (`idoperation`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `numsecu` int(11) NOT NULL COMMENT 'numero de securite social du patient',
  `nom` text NOT NULL COMMENT 'nom du patient',
  `prenom` text NOT NULL COMMENT 'prenom du patient',
  `naissance` text NOT NULL COMMENT 'date de naissance du patient',
  `tel` int(11) NOT NULL COMMENT 'numero de telephone  du patient',
  `mail` varchar(30) NOT NULL COMMENT 'adresse mail du patient',
  `adresse` varchar(30) NOT NULL COMMENT 'adresse postale du patient',
  `profession` text NOT NULL COMMENT 'metier du patient',
  `familiale` text NOT NULL COMMENT 'situation familiale (celibataire , marié,..) du patient',
  PRIMARY KEY (`numsecu`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE IF NOT EXISTS `payement` (
  `idpayement` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du payment',
  `montantpayement` float NOT NULL COMMENT 'montant du payement',
  `numsecu` int(11) NOT NULL COMMENT 'numero de secu social',
  PRIMARY KEY (`idpayement`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `personnel`
--

CREATE TABLE IF NOT EXISTS `personnel` (
  `idpersonnel` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant du membre du personnel',
  `nom` text CHARACTER SET utf8 NOT NULL COMMENT 'nom du membre du personnel',
  `prenom` text CHARACTER SET utf8 NOT NULL COMMENT 'prenom du membre du personnel',
  `rang` text CHARACTER SET utf8 NOT NULL COMMENT 'rand(medecin , directeur,...) du membre du personel',
  PRIMARY KEY (`idpersonnel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `piece`
--

CREATE TABLE IF NOT EXISTS `piece` (
  `idpiece` int(11) NOT NULL AUTO_INCREMENT COMMENT 'identifiant de la piece',
  `textpiece` text NOT NULL COMMENT 'texte de la piece ',
  PRIMARY KEY (`idpiece`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
