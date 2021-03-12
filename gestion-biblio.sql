-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 11 mars 2021 à 10:32
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `gestion-biblio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin123'),
(2, 'admin2', 'admin123');

-- --------------------------------------------------------

--
-- Structure de la table `auteur`
--

CREATE TABLE `auteur` (
  `id` int(11) NOT NULL,
  `nom` varchar(250) NOT NULL,
  `prenom` varchar(250) NOT NULL,
  `dateN` date NOT NULL,
  `srcA` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `auteur`
--

INSERT INTO `auteur` (`id`, `nom`, `prenom`, `dateN`, `srcA`) VALUES
(1, 'Yassine', 'BILAL', '2021-03-20', 'auteur1.jpg'),
(2, 'Wydad', 'WAC', '1937-05-08', 'wac.jpg'),
(3, 'Fatima', 'Jdioui', '2021-03-06', 'auteur2.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `livre`
--

CREATE TABLE `livre` (
  `idL` int(11) NOT NULL,
  `titre` varchar(250) NOT NULL,
  `dateCreation` date NOT NULL,
  `prix` float NOT NULL,
  `src` varchar(250) NOT NULL,
  `buy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livre`
--

INSERT INTO `livre` (`idL`, `titre`, `dateCreation`, `prix`, `src`, `buy`) VALUES
(7, 'Books of Blood', '2021-03-16', 169, 'b4.jpg', 1),
(8, 'The past is rising', '2021-03-21', 399, 'b3.jpg', 2),
(9, 'Fable', '2021-03-28', 169, 'b7.jpg', 3),
(10, 'Promise', '2021-03-11', 89, 'b5.jpg', 0),
(12, 'Win15', '2021-03-20', 700, 'win15.png', 0),
(25, 'BABABAABA', '2021-04-03', 399, 'bg2.png', 0);

-- --------------------------------------------------------

--
-- Structure de la table `livreauteur`
--

CREATE TABLE `livreauteur` (
  `idla` int(11) NOT NULL,
  `idA` int(11) NOT NULL,
  `idL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `livreauteur`
--

INSERT INTO `livreauteur` (`idla`, `idA`, `idL`) VALUES
(54, 1, 7),
(55, 1, 8),
(56, 3, 9),
(57, 2, 10),
(59, 2, 12),
(72, 3, 25);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `auteur`
--
ALTER TABLE `auteur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `livre`
--
ALTER TABLE `livre`
  ADD PRIMARY KEY (`idL`);

--
-- Index pour la table `livreauteur`
--
ALTER TABLE `livreauteur`
  ADD PRIMARY KEY (`idla`),
  ADD UNIQUE KEY `idautre` (`idla`),
  ADD KEY `idA` (`idA`),
  ADD KEY `idL` (`idL`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `auteur`
--
ALTER TABLE `auteur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `livre`
--
ALTER TABLE `livre`
  MODIFY `idL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT pour la table `livreauteur`
--
ALTER TABLE `livreauteur`
  MODIFY `idla` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `livreauteur`
--
ALTER TABLE `livreauteur`
  ADD CONSTRAINT `livreauteur_ibfk_1` FOREIGN KEY (`idA`) REFERENCES `auteur` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `livreauteur_ibfk_2` FOREIGN KEY (`idL`) REFERENCES `livre` (`idL`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
