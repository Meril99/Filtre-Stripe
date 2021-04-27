-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mar. 27 avr. 2021 à 18:05
-- Version du serveur :  5.7.24
-- Version de PHP : 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `fst`
--

-- --------------------------------------------------------

--
-- Structure de la table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `team` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `national` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `players_img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `players`
--

INSERT INTO `players` (`id`, `name`, `post`, `team`, `national`, `players_img`, `video`) VALUES
(1, 'Carlos', 'Forward', 'Real Madrid', 'Spain', '', ''),
(2, 'Jernade', 'Left back', 'UK', 'UK', '', ''),
(3, 'Gerard', 'Midfield', 'FC Barcelona', 'Spain', '', ''),
(4, 'Deniz', 'Midfield', 'PSG', 'France', '', ''),
(5, 'Charlevy', 'Midfield', 'AJ Auxerre', 'Congo', '', ''),
(6, 'Sohane', 'Forward', 'France', 'France', 'img/sohane.png', 'https://youtu.be/MeJsVyfJ3dc'),
(7, 'Daniel', 'Defender', 'Arsenal FC', 'International', '', 'https://youtu.be/4YwZmEz3W2o'),
(8, 'Antonio', 'Goalkeeper', 'FC Barcelona', 'Spain', '', 'https://youtu.be/GcXJKvLOrzs'),
(9, 'Chalrie', 'midfield', 'International', 'UK', '', 'https://youtu.be/YeNb1jBprk4'),
(10, 'Dann', 'Defender', 'International', 'Dutch', '', 'https://youtu.be/Q4V9w1cuiGs'),
(11, 'Stefan', 'Goalkeeper', 'Montenegro', 'Montenegro', '', 'https://youtu.be/80gNmk030Ls'),
(12, 'Rashid', 'Left/Right Back', 'Serbia', 'Serbia', '', 'https://youtu.be/iF1uC4p2HJ0'),
(13, 'Ersi', 'Center Back', 'International', 'Albania', '', 'https://youtu.be/u2VJHqtQ-bs'),
(14, 'Edson', 'Defender', 'France', 'France', '', 'https://youtu.be/JiuXfg-e-6c'),
(15, 'Sam', 'Goalkeeper', 'England', 'England', '', 'https://youtu.be/--wUkmu97pk'),
(16, 'Martins', 'Midfield', 'Nigeria', 'Nigeria', '', 'https://youtu.be/Bt_GCoS7bEM');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
