-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 20 oct. 2022 à 21:37
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bddaad`
--

-- --------------------------------------------------------

--
-- Structure de la table `artiste`
--

CREATE TABLE `artiste` (
  `idArt` int(5) NOT NULL,
  `nomArt` varchar(25) NOT NULL,
  `prenomArt` varchar(25) NOT NULL,
  `descArt` text NOT NULL,
  `imgArt` varchar(100) NOT NULL,
  `telArt` varchar(14) NOT NULL,
  `MailArt` varchar(50) NOT NULL,
  `idCateg` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `artiste`
--

INSERT INTO `artiste` (`idArt`, `nomArt`, `prenomArt`, `descArt`, `imgArt`, `telArt`, `MailArt`, `idCateg`) VALUES
(1, 'Diana', 'Higbee', '', 'diana.jpg', '', '', 2),
(2, 'Coutable', 'Gaëtan', '', 'gaetan.jpg', '06 51 57 50 02', 'gaetcoutable@hotmail.com', 1),
(3, 'Baï', 'Lola ', '', 'Lola.jpg', '06 70 344 163', 'lola@lolabai.com', 2),
(4, 'El Mago Mato', '', 'magicien', 'mago.jpg', '', '', 4),
(5, 'Greory', 'Nicolas', 'Pianiste', 'nico.jpg', '', '', 1),
(6, 'Reyes', 'Tomas', 'Comédien', 'tomas.jpg', '', '', 5),
(7, 'Ebongue', 'Wilfried', 'Danseur', 'wil.jpg', '', '', 3);

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `idCateg` int(11) NOT NULL,
  `NomCategArt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`idCateg`, `NomCategArt`) VALUES
(1, 'Musique'),
(2, 'Chant'),
(3, 'Danse'),
(4, 'Magie'),
(5, 'Comédie');

-- --------------------------------------------------------

--
-- Structure de la table `public`
--

CREATE TABLE `public` (
  `idPublic` int(2) NOT NULL,
  `TypePublic` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `public`
--

INSERT INTO `public` (`idPublic`, `TypePublic`) VALUES
(1, 'Famille'),
(2, 'Enfant');

-- --------------------------------------------------------

--
-- Structure de la table `spectacle`
--

CREATE TABLE `spectacle` (
  `idSp` int(11) NOT NULL,
  `TitreSp` varchar(30) NOT NULL,
  `DescSp` text NOT NULL,
  `TarifSp` int(20) NOT NULL,
  `TempsSp` varchar(20) NOT NULL,
  `ImgSp` varchar(50) NOT NULL,
  `idArt` int(11) NOT NULL,
  `idPublic` int(2) NOT NULL,
  `idCateg` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `spectacle`
--

INSERT INTO `spectacle` (`idSp`, `TitreSp`, `DescSp`, `TarifSp`, `TempsSp`, `ImgSp`, `idArt`, `idPublic`, `idCateg`) VALUES
(1, 'Tour de magie', '', 20, '30min', 'SpMagie.jpg', 4, 2, 4),
(2, 'Spectacle de chant', '', 50, '10min', 'SpChant.jpg', 1, 1, 2),
(3, 'Spectacle de musique', '', 30, '10min', 'SpMusicien.jpg', 2, 1, 1),
(4, 'Spectacle de comédie', '', 40, '50min', 'SpComédie.jpg', 6, 1, 5),
(5, 'Danse artistique', '', 30, '20 min', 'SpDanseur.jpg', 7, 1, 3),
(6, 'Spectacle lyrique', 'Spectacle lyrique en solo réalisé par Lola Baï accompagné de son piano et de sa guitare', 40, '20 min', 'lyrique.jpg', 3, 1, 2),
(7, 'Spectacle de piano', '', 20, '1h', 'piano.jpg', 5, 1, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artiste`
--
ALTER TABLE `artiste`
  ADD PRIMARY KEY (`idArt`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`idCateg`);

--
-- Index pour la table `public`
--
ALTER TABLE `public`
  ADD PRIMARY KEY (`idPublic`);

--
-- Index pour la table `spectacle`
--
ALTER TABLE `spectacle`
  ADD PRIMARY KEY (`idSp`),
  ADD KEY `idArt` (`idArt`),
  ADD KEY `idPublic` (`idPublic`),
  ADD KEY `idCateg` (`idCateg`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artiste`
--
ALTER TABLE `artiste`
  MODIFY `idArt` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `idCateg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `public`
--
ALTER TABLE `public`
  MODIFY `idPublic` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `spectacle`
--
ALTER TABLE `spectacle`
  MODIFY `idSp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `spectacle`
--
ALTER TABLE `spectacle`
  ADD CONSTRAINT `fkArtiste` FOREIGN KEY (`idArt`) REFERENCES `artiste` (`idArt`),
  ADD CONSTRAINT `fkPublic` FOREIGN KEY (`idPublic`) REFERENCES `public` (`idPublic`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
