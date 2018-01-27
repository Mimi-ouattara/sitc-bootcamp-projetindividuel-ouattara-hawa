-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 28 Janvier 2018 à 00:16
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `db_cvs`
--

-- --------------------------------------------------------

--
-- Structure de la table `ajouter_diplo`
--

CREATE TABLE IF NOT EXISTS `ajouter_diplo` (
  `id_diplo` int(11) NOT NULL AUTO_INCREMENT,
  `etablissement` varchar(50) NOT NULL,
  `diplome` varchar(50) NOT NULL,
  `date_obtention` date NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id_diplo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `centre_interet`
--

CREATE TABLE IF NOT EXISTS `centre_interet` (
  `id_interet` int(11) NOT NULL AUTO_INCREMENT,
  `centre_interet` varchar(50) NOT NULL,
  `decription` text NOT NULL,
  PRIMARY KEY (`id_interet`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `codeuse`
--

CREATE TABLE IF NOT EXISTS `codeuse` (
  `id_codeuse` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `mot_passe` int(20) NOT NULL,
  PRIMARY KEY (`id_codeuse`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `connection`
--

CREATE TABLE IF NOT EXISTS `connection` (
  `id-conn` int(11) NOT NULL AUTO_INCREMENT,
  `email_conn` varchar(50) NOT NULL,
  `motpass_conn` int(50) NOT NULL,
  PRIMARY KEY (`id-conn`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `id_cv` int(11) NOT NULL AUTO_INCREMENT,
  `facebook` varchar(52) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `google` varchar(50) NOT NULL,
  PRIMARY KEY (`id_cv`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `experience`
--

CREATE TABLE IF NOT EXISTS `experience` (
  `id_exp` int(11) NOT NULL AUTO_INCREMENT,
  `organisation` varchar(50) NOT NULL,
  `poste_occupe` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `date_debut` date NOT NULL,
  `date_fin` date NOT NULL,
  `id_codeuse` int(11) NOT NULL,
  PRIMARY KEY (`id_exp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `inscription`
--

CREATE TABLE IF NOT EXISTS `inscription` (
  `id_ins` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `resume` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `telephone` int(20) NOT NULL,
  `mot_passe` int(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_ins`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `modifier_profil`
--

CREATE TABLE IF NOT EXISTS `modifier_profil` (
  `id_mod` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `date_naissance` date NOT NULL,
  `resume` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `mot de passe` int(11) NOT NULL,
  `photo` varchar(50) NOT NULL,
  PRIMARY KEY (`id_mod`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
