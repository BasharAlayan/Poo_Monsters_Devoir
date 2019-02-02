-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 02 Février 2019 à 23:49
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `monsters`
--

-- --------------------------------------------------------

--
-- Structure de la table `monster`
--

CREATE TABLE `monster` (
  `id` int(11) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `Strength` int(11) DEFAULT NULL,
  `Life` int(11) DEFAULT NULL,
  `Type` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Contenu de la table `monster`
--

INSERT INTO `monster` (`id`, `name`, `Strength`, `Life`, `Type`) VALUES
(1, 'DomovoI', 30, 300, 'Water'),(2, 'Wendigos', 100, 500, 'Earth'),(3, 'Thunderbird', 400, 500, 'Air'),(4, 'Sirrush', 250, 1500, 'Fire');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `monster`
--
ALTER TABLE `monster`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `monster`
--
ALTER TABLE `monster`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
