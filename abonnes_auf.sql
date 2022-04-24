-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 25 avr. 2022 à 00:20
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
-- Base de données : `auf`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnes_auf`
--

CREATE TABLE `abonnes_auf` (
  `ID` int(100) NOT NULL,
  `NOM` varchar(25) NOT NULL,
  `PRENOM` varchar(30) NOT NULL,
  `DATE_NAISSANCE` date NOT NULL,
  `Email` varchar(70) NOT NULL,
  `NUMERO` int(20) NOT NULL,
  `DATE_DEBUT_D` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `abonnes_auf`
--

INSERT INTO `abonnes_auf` (`ID`, `NOM`, `PRENOM`, `DATE_NAISSANCE`, `Email`, `NUMERO`, `DATE_DEBUT_D`) VALUES
(1, 'COULIBALY', 'BRICE', '1999-11-20', 'Bricecoulibaly596@gmail.com', 54597179, '2022-04-23'),
(2, 'bougouma ', 'marcel', '1999-08-06', 'marcel@gmail.com', 66594775, '2022-04-19'),
(3, 'kabore', 'Aziz', '1988-01-06', 'azizkabore27@gmail.com', 76814694, '2022-04-07'),
(4, 'OUEDRAOGO ', 'MOUNI', '1970-04-08', 'mouni@gmail.com', 66985214, '2022-04-20'),
(5, 'kabore', 'bouba', '1997-04-06', 'bouki@gmail.com', 76438177, '2022-04-13');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `abonnes_auf`
--
ALTER TABLE `abonnes_auf`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `abonnes_auf`
--
ALTER TABLE `abonnes_auf`
  MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
