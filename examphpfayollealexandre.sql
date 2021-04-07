-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mer 07 Avril 2021 à 08:54
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `examphpfayollealexandre`
--

-- --------------------------------------------------------

--
-- Structure de la table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `points` int(11) NOT NULL,
  `goalsScored` int(11) NOT NULL,
  `goalsConceded` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `team`
--

INSERT INTO `team` (`id`, `name`, `points`, `goalsScored`, `goalsConceded`) VALUES
(1, 'Lille', 66, 51, 19),
(2, 'Paris-SG', 63, 67, 22),
(3, 'Monaco', 62, 64, 38),
(4, 'Lyon', 61, 60, 31),
(5, 'Lens', 49, 47, 43),
(6, 'Marseille', 48, 47, 43),
(7, 'Rennes', 45, 39, 35),
(8, 'Montpellier', 45, 49, 50),
(9, 'Metz', 42, 36, 36),
(10, 'Nice', 42, 41, 42),
(11, 'Angers', 41, 34, 44),
(12, 'Reims', 39, 38, 38),
(13, 'Strasbourg', 36, 40, 46),
(14, 'Bordeaux', 36, 34, 41),
(15, 'St-Etienne', 36, 32, 46),
(16, 'Brest', 35, 43, 54),
(17, 'Lorient', 31, 30, 58),
(18, 'Nimes', 29, 30, 58),
(19, 'Nantes', 28, 32, 48),
(20, 'Dijon', 15, 20, 53);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'test', 'test');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
