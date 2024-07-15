-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 25 sep. 2023 à 09:35
-- Version du serveur : 8.0.31
-- Version de PHP : 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_smart`
--

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

DROP TABLE IF EXISTS `demande`;
CREATE TABLE IF NOT EXISTS `demande` (
  `id` int NOT NULL AUTO_INCREMENT,
  `reference` varchar(30) NOT NULL,
  `date_rdv` date NOT NULL,
  `service` varchar(250) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenoms` varchar(250) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `objet` varchar(250) NOT NULL,
  `message` text NOT NULL,
  `statut` tinyint(1) NOT NULL COMMENT '0: demande non active | 1:demande active',
  `etat` tinyint(1) NOT NULL COMMENT '0:non traité | 1:traité',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `objet_rdv`
--

DROP TABLE IF EXISTS `objet_rdv`;
CREATE TABLE IF NOT EXISTS `objet_rdv` (
  `id` int NOT NULL AUTO_INCREMENT,
  `libelle` varchar(250) NOT NULL,
  `service` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
